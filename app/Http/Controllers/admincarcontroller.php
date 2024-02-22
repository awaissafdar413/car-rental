<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\vehicle;
use Illuminate\Http\Request;

class admincarcontroller extends Controller
{
   public function addcar_show()
   {
    $cars=brand::all();
    return view("admin-car.addcar",compact("cars"));
   }
   public function blog_add(request $request){
    if($request->has('image')){
        $file = $request->file('image');
        $extension= $file->getClientOriginalExtension();
        $filename= time().'.'.$extension;
        $path='upload/blog/';
        $file->move($path, $filename);

    }


    //images
    $vehicle= new vehicle;

    $vehicle->car_name=$request->input('car_name');
    $vehicle->car_type=$request->input('car_type');
    $vehicle->car_passenger=$request->input('car_passenger');
    $vehicle->car_gate=$request->input('car_gate');
    $vehicle->car_rent=$request->input('car_rent');
    $vehicle->blog=$request->input('content');
    $vehicle->shortdescription=$request->input('shortdescription');
    $vehicle->longdescription=$request->input('content');
    $vehicle->car_image=$path.$filename;
    $vehicle->save();
    return redirect('/car');
   }

}
