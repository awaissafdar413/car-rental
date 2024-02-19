<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\vehicle;
use Illuminate\Support\Facades\Hash;

class homecontroller extends Controller
{
    function car_show(request $request){

        // $cars=DB::table('vehicles')->get();
        $types=DB::table('brands')->get();
        $cars=DB::table('vehicles')
        ->join('brands','vehicles.car_type','=','brand_id')
        ->orderBy('car_type','ASC')
        ->get();
        $q_brands=$request->query('brands');
        $brand_name=$request->brands;
        if($brand_name== " ")
        {
            $cars=DB::table('vehicles')
            ->join('brands','vehicles.car_type','=','brand_id')
            ->orderBy('car_type','ASC')
            ->where('brand_id',$brand_name)
            ->get();

        }
        else {
            $cars=DB::table('vehicles')
            ->join('brands','vehicles.car_type','=','brand_id')
            ->orderBy('car_type','ASC')
            ->get();
        }
        // dd($brand_name);


        // if ($q_brands ==null) {
        //     $cars=DB::table('vehicles')
        //     ->join('brands','vehicles.car_type','=','brand_id')
        //     ->get();
        // }
        // else{
        // $cars=DB::table('vehicle')
        // ->join('brands','vehicles.car_type','=','brand_id')
        // ->where(function($query) use($q_brands){
        //     $query->whereIn('brand_id',explode(',',$q_brands))->orWhereRaw("'".$q_brands."'=' '");
        // });}
        // dd($cars);
        // dd('brands');
        // $cars=DB::table('vehicle')->get();
        return view('car',compact('cars','types','q_brands'));
    }
    function dashboard(){
        $id=auth()->user()->id;
        $users=DB::table('users')->where('id',$id)->get();
        return view('account-dashboard',compact('users'));
    }
    function singleuser_dashboard(){
        $id=auth()->user()->id;
        $users=DB::table('users')->where('id',$id)->get();
        return view('account-profile',compact('users'));
    }
    function singleuser_dashboard_update($id,request $request){
        $users=DB::table('users')->where('id',$id)->update([
            'name'=> $request->username,
            'email'=> $request->email_address,
            'password'=> Hash::make($request->user_password),
        ]);

        return redirect()->back();
    }
}
