<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AddBlog;
use App\AddCategory;
use App\AddState;


class BlogController extends Controller
{
    
    public function index(){
        $categories=AddCategory::select('title')->get();
        $states=AddState::select('state_name')->get();
        
        return view('Admin.blog.addblog',compact('categories','states'));
    }

    public function create(Request $request)
    { 
       

    }

   
    public function store(Request $request)
    {
        dd($request->category_id);
        $categories=AddCategory::select('id')->get();
        $states=AddState::select('id')->get();
        $blog=new AddBlog();
        $blog->category_id=$request->category_id;
        $blog->state_id=$request->state_id;
        $blog->page_title=$request->page_title;
        $blog->page_description=$request->page_description;
        $blog->page_meta_description=$request->page_meta_description;
        $blog->page_keywords=$request->page_keywords;
        $blog->blog_title=$request->blog_title;
        $blog->blog_description=$request->blog_description;
        $blog->blog_image=$request->blog_image; 
        $blog->posted_by=$request->posted_by;
        $blog->save();

        return redirect()->back();
    }

    
    public function show()
    {
        return view('Admin.blog.viewblog');
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
