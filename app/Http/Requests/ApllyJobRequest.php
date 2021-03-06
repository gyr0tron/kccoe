<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Auth;
use App\ResponseBuilder;

class ApllyJobRequest extends FormRequest
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return true;
  }

  public function response(array $errors)
  {
    return ResponseBuilder::send(false, $errors, "");
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    return [
      'name' => 'required|string',
      'email' => 'required|email',
      'phone' => 'required|string',
      "resume" => 'required|file|max:10000'
    ];
  }
}
