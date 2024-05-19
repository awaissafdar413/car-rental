<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exportController extends Controller
{
    public function importexportview(){
        return view ('excel.import');
    }
    public function import(){
        Excel::import(new emailImport, request()->file('file'));
        return back();
    }
}
