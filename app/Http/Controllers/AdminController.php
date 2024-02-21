<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function blog_show(request $request){
        $blogs=blog::all();
        return view('blog',compact('blogs'));
    }
}
