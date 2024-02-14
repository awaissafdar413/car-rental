<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    function car_show(){
        $cars=DB::table('vehicle')->get();
        $types=DB::table('brand')->get();
        return view('car',compact('cars'));
    }
}
