<!DOCTYPE html>
<html lang="en">
   <head>
      <title>News</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/latest_news.css">
      <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div id="app">
      @include('news_web.header')
         <section>
           <div class="container-fluid">
             <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                 <div class="feedback_form">
                  <h4>User Feedback</h4>
                  @if(Session::has('success'))
                     <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                        Session::forget('success');
                        @endphp
                     </div>
                     @endif
                  <form action="{{url('/feedback')}}" method="post">
                     @csrf
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label feedback_label">Name</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Your Name">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label feedback_label">Email</label>
                        <div class="col-sm-8">
                           <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Your Email Address">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label feedback_label">Contact Number</label>
                        <div class="col-sm-8">
                           <input type="number" class="form-control" id="inputEmail3" name="contact" placeholder="Your Contact Number">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label feedback_label">Feedback</label>
                        <div class="col-sm-8">
                           <textarea class="form-control" id="inputEmail3" name="message" placeholder="Your Feedback"></textarea>
                        </div>
                     </div>
                     
                     <div class="form-group row">
                        <div class="col-sm-10">
                           <button type="submit" class="btn btn-feedback">Submit</button>
                        </div>
                     </div>
                   </form>
                 </div>
                </div>
                <div class="col-md-4 text-center">
                  <div class="feedback_latest">
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
           </div>
         </section>
      </div>
      @include('news_web.footer')
   </body>
</html>