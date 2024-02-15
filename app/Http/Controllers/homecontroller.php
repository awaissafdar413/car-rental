<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class homecontroller extends Controller
{
    function car_show(){
        $cars=DB::table('vehicle')->get();
        $types=DB::table('brand')->get();
        return view('car',compact('cars','types'));
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
