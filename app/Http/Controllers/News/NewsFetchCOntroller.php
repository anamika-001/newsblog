<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AddCategory;
use App\AddBlog;
use App\Video;
use App\Subscriber;
use App\Advertise;
use App\Feedback;

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
        $categoryfirst=AddCategory::where('title','लेटेस्ट')->first();
        $categorysecond=AddCategory::where('title','ट्रेंड्स')->first();
       
        $centernewsfirst=AddBlog::where('category_id',$categoryfirst->id)->inRandomOrder()->take(4)->get();
        
        $centernewssecond=AddBlog::where('category_id',$categorysecond->id)->inRandomOrder()->take(4)->get();
       
         $videos=Video::orderBy('created_at','desc')->take(3)->get();
        return View('news_web.index', compact(['categories','categoryfirst','categorysecond','blogs','completeblog','sidenews','centernewsfirst','centernewssecond','videos']));
       
    }
    public function subscribe(Request $request)
    {
        $this->validate($request,
        [
        'name'=>'required',
        'email'=>'required',
        ]);

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
        
        $blogcategorywise=AddBlog::where('category_id',$category->id)->take(4)->get();
        $blogs=AddBlog::where('category_id',$category->id)->orderBy('created_at','desc')->take(1)->first();
        $bloglatest=AddBlog::where('category_id',$category->id)->orderBy('created_at','desc')->get();
        return View('news_web.category', compact(['categories','blogcategorywise','category','bloglatest','blogs']));
       
    }
    public function blog($blog_url)
    {
        
        $categories=AddCategory::all();
       
        $blog=AddBlog::where('blog_url',$blog_url)->first();
        
        $blogs=AddBlog::where('category_id',$blog->category_id)->inRandomOrder()->get();
       
        $categorytitle=AddCategory::where('id',$blog->category_id)->first();
        return View('news_web.single_news', compact(['categories','blog','blogs','categorytitle']));
       
    }
    public function advertise(Request $request)
    {
        
        $this->validate($request,
        [
        'name'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'message'=>'required',
        ]);

        $advertise=new Advertise();
        $advertise->name=$request->name;
        $advertise->email=$request->email;
        $advertise->phone=$request->phone;
        $advertise->message=$request->message;
        $advertise->save();
        return redirect()->back()->with('success','Message Sent Successfully');
       
    }

    public function feedback(Request $request)
    {
        
        $this->validate($request,
        [
        'name'=>'required',
        'email'=>'required',
        'contact'=>'required',
        'message'=>'required',
        ]);

        $feedback=new Feedback();
        $feedback->name=$request->name;
        $feedback->email=$request->email;
        $feedback->contact=$request->contact;
        $feedback->message=$request->message;
        $feedback->save();
        return redirect()->back()->with('success','Feedback Sent Successfully');
       
    }
    
}
