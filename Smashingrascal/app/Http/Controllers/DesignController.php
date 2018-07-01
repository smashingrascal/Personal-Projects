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
    $styles = \App\Design::inRandomOrder()->get();
      return $styles;
  }

  public static function SloadHeader()
  {
    $styles = \App\Design::all();
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

        $filename = 'emblem' . time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images\added\\' . $filename);
        Image::make($image)->save($location);
    $style->emblem = "images\added\\" . $filename;

    $image2 = $request->file('banner');
        $filename2 = 'banner' . time() . '.' . $image2->getClientOriginalExtension();
        $location2 = public_path('images\added\\' . $filename2);
        Image::make($image2)->save($location2);
    $style->banner = "images\added\\" . $filename2;

    $image3 = $request->file('icon');
        $filename3 = 'icon' . time() . '.' . $image3->getClientOriginalExtension();
        $location3 = public_path('images\added\\' . $filename3);
        Image::make($image3)->save($location3);
    $style->icon = "images\added\\" . $filename3;

    $style->save();
    return redirect('/lNstyle');



}
public function destroy($id)
{

    $design = Design::find($id);
    $design->delete();
    return redirect('/lNstyle')->with('success', 'Post Removed');
}



}
