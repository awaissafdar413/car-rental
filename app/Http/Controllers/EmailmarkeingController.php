<?php

namespace App\Http\Controllers;

use App\Models\email_template;
use App\Models\emailmarkeing;
use Illuminate\Http\Request;


class EmailmarkeingController extends Controller
{
    public function dashboard(){
        $templates=email_template::all();
        return view('backend.emailmarketing.dashboard',compact('templates'));
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
    public function blog_update_post(request $request){
           $blog= email_template::find($id);
        $id=$request->input('id');
        $blog->title=$request->input('title');
        $blog->keyword=$request->input('keyword');
        $blog->subject=$request->input('subject');
        $blog->content=$request->input('content');

        $blog->update();
        return redirect()->route('admin.emailmarketing');
       }
}
