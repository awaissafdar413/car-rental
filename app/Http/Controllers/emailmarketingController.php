<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailmarketingController extends Controller
{
    public function allemail(){
        return view('emailmarketing.allemail');
    }
}
