<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $request->validate(([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|numeric',
            'subject'=>'required',
            'message'=>'required',
        ]));
        contact::create($request->all());
        return redirect()->back()->with(['success'=>'Your message has been sent successfully. Refresh this page if you want to send more
        messages.']);
    }
}
