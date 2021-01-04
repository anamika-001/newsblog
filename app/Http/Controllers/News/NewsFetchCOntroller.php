<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AddCategory;
use App\AddBlog;
use App\Video;
use App\Subscriber;

class NewsFetchCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function header()
    {
        $categories=AddCategory::all();
        $blogs=AddBlog::orderBy('created_at','desc')->take(5)->get();
        $completeblog=AddBlog::inRandomOrder()->take(3)->get();
        $sidenews=AddBlog::inRandomOrder()->take(7)->get();
        $centernews=AddBlog::inRandomOrder()->take(4)->get();
        $videos=Video::orderBy('created_at','desc')->take(3)->get();
        
       
        return View('news_web.index', compact(['categories','blogs','completeblog','sidenews','centernews','videos']));
       
    }
    public function subscribe(Request $request)
    {
        $subscriber=new Subscriber();
        $subscriber->name=$request->name;
        $subscriber->email=$request->email;
        $subscriber->save();
        return redirect()->back()->with('success','subscribed successfully');
       
    }

    public function category($category_url)
    {
        $categories=AddCategory::all();
        $category=AddCategory::where('category_url',$category_url)->first();
        $categoryId=$category->id;
        $blog=AddBlog::where('category_id',$categoryId)->get();
      
        return View('news_web.category', compact(['categories','category','blog']));
       
    }
    public function blog($blog_url)
    {
        $categories=AddCategory::all();
        $blog=AddBlog::where('blog_url',$blog_url)->get();
        
        $categoryId=$category->id;
        $blog=AddBlog::where('category_id',$categoryId)->get();
      
        return View('news_web.category', compact(['categories','category','blog']));
       
    }
}
