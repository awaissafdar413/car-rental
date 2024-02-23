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
    $old_slug=$request->slug;

$final_slug = str_replace(' ', '_',$old_slug);
$slug = strtolower($final_slug);
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
    // $student = new blog;
    // $stud=$student->where('id',$id);
    // $stud->delete();
    $data=blog::where('id',$id)->delete();
    return redirect()->back();
   }
   public function blog_update($id){
    $student = new blog;
    $stud = $student->where('id',$id);
    $datas=$stud->get();
    return view('admin.update',compact('datas'));
   }
   public function blog_update_post(request $request){
    $path= "";
    $filename = "";
    if($request->has('image')){
        $file = $request->file('image');
        $extension= $file->getClientOriginalExtension();
        $filename= time().'.'.$extension;
        $path='upload/blog/';
        $file->move($path, $filename);

    }

//create slug
$old_slug=$request->slug;

$slug = str_replace(' ', '_',$old_slug);
    //images
    $id=$request->input('id');
    // $blog= blog::where('id',$id);
    $blog= blog::find($id);
    $blog->title=$request->input('title');
    $blog->keyword=$request->input('keyword');
    $blog->slug=$slug;
    $blog->description=$request->input('description');
    $blog->blog=$request->input('content');
    $blog->featuredimage=$path.$filename;

    $blog->update();
    // dd($blog);
    return redirect('/Admin-panel');
   }}

