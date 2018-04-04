<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
use Mail;
use App\ResponseBuilder;
use App\User;
use App\Admission;
use App\EmailVerification;
use App\Mail\AdmissionRegisterMail;
use App\Mail\AdmissionWelcomeMail;


use App\Http\Requests\AdmissionRegisterRequest;
use App\Http\Requests\RegisterRequest;

class AdmissionsController extends Controller
{
  use AuthenticatesUsers;
  protected $redirectTo = '/';
  public function __construct()
  {
    $this->middleware('guest')->except(['postApplication']);
    $this->middleware('admission')->only(['postApplication']);
  }

  public function register(AdmissionRegisterRequest $request)
  {
    $user = new User();
    $user->email = $request->input('reg_email');
    $user->fullname = $request->input('reg_name');
    $user->username = $request->input('reg_email');
    $user->password = bcrypt($request->input('reg_password'));
    $user->type = '1';
    $user->save();
    $ev = EmailVerification::new($user, $request->input('reg_email'));
    Mail::to($request->input('reg_email'))->send(new AdmissionRegisterMail($user, $ev));
    return ResponseBuilder::send(true, "We have send a email containing the steps to verify your email address.", "/");
  }
  public function verify(Request $request) {
    $token = $request->input('token');
    $user = EmailVerification::verify($token);
    if($user) {
      Mail::to($user->email)->send(new AdmissionWelcomeMail($user));
      return redirect()->route('admissions-apply');
    }
    return redirect('/');
  }
  /*
  Login Functions
  */
  public function username()
  {
    return 'email';
  }
  protected function credentials(Request $request)
  {
    return [
      'email'    => $request->input('email'),
      'password' => $request->input('password'),
      'verified' => '1',
      'type' => '1',
    ];
  }
  public function postApplication(Request $request)
  {
    $data = $request->all();
    unset($data['_token']);
    $admission = Admission::where('userid', Auth::user()->id)->first();
    if(!$admission) {
      $admission = new Admission();
    }
    $admission->userid = Auth::user()->id;
    $admission->data = json_encode($data);
    $admission->save();
    if($data['submit'] == "proceed") return $data;
    return view('pages.admissions.student-application');
  }
}
