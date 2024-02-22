<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function blog_show(){
    $datas=blog::all();
    return view('admin.dashboard',compact('datas'));
   }

   public function blog_add(request $request){
    if($request->has('image')){
        $file = $request->file('image');
        $extension= $file->getClientOriginalExtension();
        $filename= time().'.'.$extension;
        $path='upload/blog/';
        $file->move($path, $filename);
    }


    //images
    $blog= new blog;
    $blog->title=$request->input('title');
    $blog->keyword=$request->input('keyword');
    $blog->slug=$request->input('slug');
    $blog->description=$request->input('description');
    $blog->blog=$request->input('content');
    $blog->featuredimage=$path.$filename;
    $blog->save();
    return redirect('/Admin-panel');
   }

public function add_blog_show(){
    return view('admin.addblog');
}
   public function blog_delete($id){
    $student = new blog;
    $stud=$student->find($id);
    $stud->delete();
    return redirect()->back();
   }
   public function blog_update($id){
    $student = new blog;
    $stud = $student->find($id);
    $datas=$stud->get();
    return view('admin.update',compact('datas'));
   }
   public function blog_update_post(request $request){
    if($request->has('image')){
        $file = $request->file('image');
        $extension= $file->getClientOriginalExtension();
        $filename= time().'.'.$extension;
        $path='upload/blog/';
        $file->move($path, $filename);
    }


    //images
    $id=$request->input('id');
    $blog= blog::find($id);
    $blog->title=$request->input('title');
    $blog->keyword=$request->input('keyword');
    $blog->slug=$request->input('slug');
    $blog->description=$request->input('description');
    $blog->blog=$request->input('content');
    $blog->featuredimage=$path.$filename;
    $blog->update();
    return redirect('/Admin-panel');
   }
}

