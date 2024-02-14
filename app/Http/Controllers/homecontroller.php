<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    function car_show(){
        $datas=DB::table('vehicle')->get();
        return view('car',compact('datas'));
    }
}
