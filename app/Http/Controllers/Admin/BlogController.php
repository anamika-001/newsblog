<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\AddBlog;
use App\AddCategory;
use App\AddState;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{
    public function create(Request $request)
    { 
        $categories=AddCategory::select('id','title')->get();
        $states=AddState::select('id','state_name')->get();
        
        return view('Admin.blog.addblog',compact('categories','states'));

    }

   
    public function store(Request $request)
    { 
        $filename=$_FILES['blog_image']['name'];
        if($request->hasfile('blog_image')){
        $filename=$_FILES['blog_image']['name'];
        $imageName = time().'.'.$request->blog_image->getClientOriginalExtension();
        $request->blog_image->move(public_path('/uploads'), $imageName);

        }  
      

        $blog=new AddBlog();
        $blog->category_id=$request->category_id;
        $blog->state_id=$request->state_id;
        $blog->page_title=$request->page_title;
        $blog->page_description=$request->page_description;
        $blog->page_meta_description=$request->page_meta_description;
        $blog->page_keywords=$request->page_keywords;
        $blog->blog_title=$request->blog_title;
        $blog->blog_description=$request->blog_description;
        $blog->blog_image=$filename; 
        $blog->posted_by=$request->posted_by;
        $blog->blog_tags=$request->blog_tags;
        
        $blog->save();

        return redirect()->back()->with('success','blog created successfully.');
    }

    
    public function show()
    {
        $blogs=AddBlog::all();
        return view('Admin.Blog.viewblog',['blogs'=>$blogs]);
    }

    
    public function edit($id)
    {
        $categories=AddCategory::select('id','title')->get();
        $states=AddState::select('id','state_name')->get();
        $blogs=AddBlog::where('id',  '=', $id)->first();
        return view('Admin.Blog.editblog',['blogs'=>$blogs,'categories'=>$categories,'states'=>$states]);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'category_id' => 'required',
            'state_id' => 'required',
            'page_title' => 'required',
            'page_description' => 'required',
            'page_meta_description' => 'required',
            'page_keywords' => 'required',
            'blog_title' => 'required',
            'blog_image' => 'required',
            'posted_by' => 'required',
            'blog_image' => 'nullable|mimes:jpeg,bmp,png,jpg'
        ]);

        if($request->hasfile('blog_image')){
            $filename=$_FILES['blog_image']['name'];
            $imageName = time().'.'.$request->blog_image->getClientOriginalExtension();
            $request->blog_image->move(public_path('/uploads'), $imageName);
    
            }  
        AddBlog::where('id', '=', $id)->update([
            'category_id' => $request->category_id??'',
            'state_id' => $request->state_id??'',
            'page_title' => $request->page_title??'',
            'page_description' => $request->page_description??'',
            'page_meta_description' => $request->page_meta_description??'',
            'page_keywords' => $request->page_keywords??'',
            'blog_title' => $request->blog_title??'',
            'blog_description' => $request->blog_description??'',
            'blog_image' => $request->blog_image??'',
            'posted_by' => $request->posted_by??'',
            'blog_tags'=>$request->blog_tags??''
             ]);
             return redirect()->back()->with('success','blog updated successfully.');
    }

    
    public function destroy($id)
    {
        $data =AddBlog::where('id','=',$id)->delete();
        if($data){
            return redirect()->back()->with('success','blog deleted successfully.');
        }
    }
}
