<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
  public static function getHeader()
  {


      $Sheader1 = array(
        "headercolor" => "#000000",
        "appcolor" => "#696969",
        "emblem" => "Images/Emblem1.png",
        "banner" => "Images/Banner1.png",
        "icon" => "Images/Icon1.png",
      );

      $Sheader2 = array(
        "headercolor" => "#FFFFFF",
        "appcolor" => "#F1F1F1",
        "emblem" => "Images/Emblem2.png",
        "banner" => "Images/Banner2.png",
        "icon" => "Images/Icon2.png",
      );

      $Sheaders = array ($Sheader1, $Sheader2);
      return $Sheaders[array_rand($Sheaders)];
  }
}
