<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderStyle extends Model
{

  public static function getHeaderStyles()
  {
  $Sheader1 = array(
    "headercolor" => "#000000",
    "complimentcolor" => "#FFFFFF",
    "emblem" => "Images/Emblem1.png",
    "banner" => "Images/Banner1.png",
    "icon" => "Images/Icon1.png",
  );

  $Sheader2 = array(
    "headercolor" => "#FFFFFF",
    "complimentcolor" => "#000000",
    "emblem" => "Images/Emblem2.png",
    "banner" => "Images/Banner2.png",
    "icon" => "Images/Icon2.png",
  );

  $Sheaders = array ($Sheader1, $Sheader2);
  return $Sheaders[array_rand($Sheaders)];
}
}
