<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;
use App\Committee;
use App\Message;

class AboutController extends Controller
{
    public function getAbout()
    {
      return view('pages.about');
    }
    public function getCommittees()
    {
      return view('pages.committees');
    }
    public function getInfrastructures()
    {
      return view('pages.infrastructure');
    }
    public function getIqac($action)
    {
      return view('pages.iqac', compact(['action']));
    }
    public function getIqacMeetingsByID($id) {
      $title = "Meeting $id";
      $url = url("/public/iqac/meetings/meeting$id.pdf");
      $menu_item = "iqac";
      return view('pages.pdfview', compact("title", "url","menu_item"));
    }
    public function getCommitteeDetails($url)
    {
      $committee = Committee::where('url',$url)->first();
      if(!$committee) abort(404);
      $title = $committee->name;
      $url = $committee->getFile();
      return view('pages.pdfview', compact("title", "url"));
    }
}
