<!DOCTYPE html>
<html lang="en">
   <head>
      <title>News</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/latest_news.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/li-scroller.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div id="app">
      @include('news_web.header') 
         <section>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcrumb">
                        <a href="{{url('/index')}}">Home</a> / <a href="category.php">{{$categorytitle->title}}</a> / <a href="">News</a>


                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-9">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="single_news_img">
                              <h4>
                              {{$blog->blog_title}}
                              </h4>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <img src="../uploads/{{$blog->Saved_image}}" class="w-100">
                        </div>
                        <div class="col-md-4">
                           <div class="story_highlight">
                              स्टोरी हाइलाइट्स
                           </div>
                           <div class="story_high_point">
                              <p>{{$blog->highlight1}}</p>
                              <p>{{$blog->highlight2}}</p>
                              <p>{{$blog->highlight3}}</p>
                              <p>{{$blog->highlight4}}</p>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="single_strip">
                              <div class="social_single_news">
                              <p>Share:</p>
                              <ul>
                                 <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                 <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                 <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                 <li><a href=""><i class="fa fa-envelope"></i></a></li>
                              </ul>
                           </div>
                           <div class="feedback_single_news">
                              <a href="{{url('../feedback')}}" class="btn btn_feedback">Feedback</a>
                           </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="single_news_content">
                              <p>{{$blog->blog_description}}
                              </p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="right_ad">
                        <img src="assets/img/ad1.gif" class="w-100">
                     </div>
                     <div class="right_ad">
                        <img src="assets/img/ad2.gif" class="w-100">
                     </div>
                     <div class="subscribe_form">
                     @if(Session::has('success'))
                     <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                        Session::forget('success');
                        @endphp
                     </div>
                     @endif
                        <p>DAILY<br><span>NEWSLETTER</span></p>
                        <h6>Get our best delivered directly to your inbox</h6>
                        <form  action="{{url('/subscriber')}}" method="post">
                        @csrf
                           <div class="form-group">
                           
                              <input type="text" class="form-control" name="name" placeholder="Enter Name">
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control" name="email" placeholder="Enter Email">
                           </div>
                           <button type="submit" class="btn">Subscribe</button>
                        </form>
                     </div>
                     <div id="sidebar" class="top_stories">
                        <h4 class="heading">लेटेस्ट</h4>
                       
                        <div class="row">
                       
                           <div class="col-md-12">
                            @foreach($blogs as $blog)
                              <a href="single_news.php" class="news-box-link">
                                 <div class="row side-blog">
                                    <div class="col-4 pl-0">
                                       <img src="../uploads/{{$blog->Saved_image}}" class="w-100">
                                    </div>
                                    <div class="col-8 side-blog-content px-0">
                                       <h6>{{$blog->blog_title}}</h6>
                                    </div>
                                 </div>
                              </a>
                              @endforeach
                           </div>
                          
                        </div>
                       
                       
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      @include('news_web.footer')
   </body>
</html>