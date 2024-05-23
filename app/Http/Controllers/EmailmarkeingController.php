<?php

namespace App\Http\Controllers;

use App\Models\email_template;
use App\Models\emailmarkeing;
use Illuminate\Http\Request;


class EmailmarkeingController extends Controller
{
    public function dashboard(){
        $templates=email_template::all();
        $emails=emailmarkeing::paginate(15);
        return view('backend.emailmarketing.dashboard',compact('templates','emails'));
    }
    public function template_add(request $request){
        $blog= new email_template;
        $blog->subject=$request->input('subject');
        $blog->content=$request->input('content');
        $blog->save();
        return redirect()->route('admin.emailmarketing');
       }

    public function add_template_show(){
        return view('backend.emailmarketing.addtemplate');
    }
    public function template_delete($id){
        $data=email_template::where('id',$id)->delete();
        return redirect()->back();
       }
       public function template_update($id){
        $student = new email_template;
        $stud = $student->where('id',$id);
        $datas=$stud->get();
        return view('backend.emailmarketing.update',compact('datas'));
    }
    public function template_update_post(request $request){
        $id=$request->input('id');
           $blog= email_template::find($id);
        $blog->subject=$request->input('subject');
        $blog->content=$request->input('content');

        $blog->update();
        return redirect()->route('admin.emailmarketing');
       }
       public function add_email(){
        return view('backend.emailmarketing.add_email');
       }
       public function add_email_post(request $request){
        $request->validate([
            'email'=>'required'
        ]);
        $emails = $request->input('email');
        $emailArray = explode(',', $emails);
        foreach ($emailArray as $email) {
            $trimmedEmail = trim($email);
            emailmarkeing::create([
                'email' => $trimmedEmail
            ]);
        }
        return redirect()->back();
       }
}
