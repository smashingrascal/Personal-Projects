<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Design;
use Image;

class DesignController extends Controller
{
  public static function getHeader()
  {

      $Sheaders = \App\HeaderStyle::getHeaderStyles();
      return $Sheaders;
  }

  public function Ssaveheader(Request $request)
  {
    $this->validate($request, [
            'color' => 'required',
            'emblem' => 'required|mimes:jpeg,jpg,png,gif',
            'banner' => 'required|mimes:jpeg,jpg,png,gif',
            'icon' => 'required|mimes:jpeg,jpg,png,gif'
        ]);

    $style = new Design;
    $style->color = $request->color;


    $image = $request->file('emblem');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images\added\\' . $filename);
        Image::make($image)->save($location);
    $style->emblem = $filename;

    $image = $request->file('banner');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images\added\\' . $filename);
        Image::make($image)->save($location);
    $style->banner = $filename;

    $image = $request->file('icon');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images\added\\' . $filename);
        Image::make($image)->save($location);
    $style->icon = $filename;

    $style->save();
    return redirect('/');



}



}
