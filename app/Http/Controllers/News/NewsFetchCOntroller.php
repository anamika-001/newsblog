<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AddCategory;
use App\AddBlog;
use App\Video;

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

    
}
