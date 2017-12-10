<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
  public static function getHeader()
  {

      $Sheaders = \App\HeaderStyle::getHeaderStyles();
      return $Sheaders;
  }



}
