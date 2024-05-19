<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailmarketingController extends Controller
{
    public function dashboard()
    {
        // $templates = template::orderBy('created_at', 'desc')->take(1)->get();
        $templates = template::latest()->get();
        return view('emailmarketing.dashboard', compact('templates'));
    }
    public function allemailaddress()
    {
        $datas = emaildata::all();
        return view('emailmarketing.allemailaddress', compact('datas'));
    }
    public function alltemplate()
    {
        $datas = template::all();
        return view('emailmarketing.alltemplate', compact('datas'));
    }
    public function templatedelete($id)
    {
        $datas = template::where('id', $id)->delete();
        return redirect()->back();
    }
    public function deleteallemailaddress()
    {
        emaildata::all()->each(function ($email) {
            $email->delete();
        });
        return redirect()->back();
    }
    public function saveemailaddress(Request $request)
    {
        $request->validate([
            'emails'=>'required'
        ]);
        $emails = $request->input('emails');
        $emailArray = explode(',', $emails);
        foreach ($emailArray as $email) {
            $trimmedEmail = trim($email);
            $request->validate([
                $trimmedEmail => 'email | indisposable', // Add 'indisposable' rule
              ]);
            emaildata::create([
                // 'name'=>$request->name,
                'email' => $trimmedEmail
            ]);
        }
        // return redirect()->back()->with('success', 'Emails stored successfully!');
        return redirect('/allemailaddress')->with('success', 'Emails stored successfully!');
    }
    public function templatestructure(Request $request)
    {
        $filename="";
        $request->validate([
            'pdf_file' => 'mimes:pdf',
          ]);
        if($request->hasfile('pdf_file'))
        {
            $file = $request->file('pdf_file');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/email/', $filename);
        }
          // Save the file name to
        $template=new template;
        $template->subject=$request->input('subject');
        $template->attachment='uploads/email/'. $filename;
        $template->template=$request->input('content');
        $template->save();
        return redirect()->back();
    }
    public function email($id)
    {
        $datas = template::where('id', $id)->get();
        return view('emailmarketing.template.template', compact('datas'));
    }
    public function emailsend($template)
    {
        $emaildatas = emaildata::all();
        $subjectData = template::find($template); // Replace with your model and ID retrieval logic
        // Fetch template using ID or other criteria
        foreach ($emaildatas as $emaildata) {
            dispatch(new webmailjob($emaildata, $template, $subjectData))
            ->delay(now()->addMinutes(2));
            // ->delay(now()->addSeconds(20));
        }
        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}
