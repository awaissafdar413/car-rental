<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\vehicle;
use App\models\blog;
use App\models\brand;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class mainhomecontroller extends Controller
{
    function car_show(request $request){
        $types = brand::get();
        $query = vehicle::query();
        if($request->ajax())
        {
            $cars = $query->where(['brand_id'=>$request->category])->get();
            return response()->json(['products'=>$cars]);
        }
        $cars = $query->get();
        return view('car',compact('cars','types'));
    }
    function car_show_home(request $request){
        $types = brand::get();
        $query = vehicle::query();
        $cars = $query->get();
        return view('index',compact('cars','types'));
    }
    function blog_show(request $request){
        $blogs=blog::all();
        return view('blog',compact('blogs'));
    }
    function blog_single($slug){
        $blogs=blog::where('slug',$slug)->get();
        dd($blogs);
        return view('blog-single',compact('blogs'));
    }

    function dashboard(){
        $id=auth()->user()->id;
        // $users=DB::table('users')->where('id',$id)->get();
        $users=user::where('id',$id)->get();
        return view('account-dashboard',compact('users'));
    }
    function singleuser_dashboard(){
        $id=auth()->user()->id;
        // $users=DB::table('users')->where('id',$id)->get();
        $users=User::where('id',$id)->get();
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
