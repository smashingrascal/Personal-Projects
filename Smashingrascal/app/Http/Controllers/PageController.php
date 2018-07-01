<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function getWelcomePage() {
      return view('welcome');
  }
  public function getChecklNPage() {
      return view('pages/ChecklN');
  }
  public function getlNQueuePage() {
      return view('pages/lNQueue');
  }

  public function getlNtouchPage () {
      return view('pages/lNtouch');
  }

  public function getlNstylePage() {
    $styles = \App\Design::all();
      return view('pages/lNstyle')->with('styles', $styles);
  }




  public function getEndouble () {
    return view('pages/Endouble');
}

}
