<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\vehicle;
use Illuminate\Http\Request;

class admincarcontroller extends Controller
{
   public function all_car_show()
   {
    $datas=vehicle::all();
    // dd($datas);
    return view("admin-car.dashboard",compact("datas"));
   }
   public function addcar_show()
   {
    $cars=brand::all();
    return view("admin-car.addcar",compact("cars"));
   }
   public function add_car(request $request){
   $request->validate([
    'car_name'=>"required",
    'car_type'=>"required",
    'car_passenger'=>"required",
    'car_gate'=>"required",
    'car_rent'=>"required",
    "image"=>"required | mimes:jpg,jpeg,webp,png"
   ]);
    if($request->has('image')){
        $file = $request->file('image');
        $extension= $file->getClientOriginalExtension();
        $filename= time().'.'.$extension;
        $path='upload/car/';
        $file->move($path, $filename);

    }


    //images
    $vehicle= new vehicle;

    $vehicle->car_name=$request->input('car_name');
    $vehicle->car_type=$request->input('car_type');
    $vehicle->car_passenger=$request->input('car_passenger');
    $vehicle->car_gate=$request->input('car_gate');
    $vehicle->car_rent=$request->input('car_rent');
    $vehicle->shortdescription=$request->input('shortdescription');
    $vehicle->longdescription=$request->input('content');
    $vehicle->car_image=$path.$filename;
    $vehicle->save();
    return redirect('/car');
   }
//delete car
public function car_delete($id){
    $data=vehicle::where('id',$id)->delete();
    return redirect()->back();
   }
   public function car_update($id){
    $student = new vehicle;
    $stud = $student->where('id',$id);
    $datas=$stud->get();
    return view('admin-car.update',compact('datas'));
   }
public function car_update_post(request $request){
    $path='';
    $filename='';
     if($request->has('image')){
         $file = $request->file('image');
         $extension= $file->getClientOriginalExtension();
         $filename= time().'.'.$extension;
         $path='upload/car/';
         $file->move($path, $filename);

     }


     //images
     $id=$request->input('id');
     $vehicle= vehicle::find($id);
     $vehicle->car_name=$request->input('car_name');
     $vehicle->car_type=$request->input('car_type');
     $vehicle->car_passenger=$request->input('car_passenger');
     $vehicle->car_gate=$request->input('car_gate');
     $vehicle->car_rent=$request->input('car_rent');
     $vehicle->shortdescription=$request->input('shortdescription');
     $vehicle->longdescription=$request->input('content');
     $vehicle->car_image=$path.$filename;
     $vehicle->update();
     return redirect('/car');
    }
}
