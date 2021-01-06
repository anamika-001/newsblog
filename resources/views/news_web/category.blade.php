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
         <section>
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="top_bar">
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <div id="menu_area" class="menu-area">
                     <div class="container-fluid">
                        <div class="row">
                           <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <i class="fa fa-bars"></i>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           
                                 <ul class="navbar-nav mr-auto">
                              
                                    <li class="active"><a href="{{url('/index')}}"> <i class="fa fa-home"></i><span class="sr-only">(current)</span></a></li>
                                 
                                    @foreach($categories as $category) 
                                    <li><a href="{{ url('category/'.$category->category_url)}}">{{$category->title}}</a></li>
                                 
                                    @endforeach 
                                 </ul>
                              
                              </div>
                              <a class="navbar-brand" href="{{url('/index')}}"><img src="../assets/img/logo.png" class="nav-logo"></a>
                           </nav>
                        </div>
                     </div>
                  </div>

         </section>   
         <section>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcrumb">
                        <a href="{{url('/index')}}">Home</a> / <a>Category</a>  
                        <!-- / <a href="{{ url('category/'.$category->category_url)}}">{{$category->title}}</a> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-9">
                    <div>
                     <div class="h-line-head margin-bt20px">
                        <h2 class="head-two"><span>Top News</h2>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="half_news">
                              <a href="single_news.php">
                                 <img src="../uploads/{{$blogs->Saved_image}}" class="w-100">
                                 <p>{{$blogs->blog_title}}</p>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-6">
                        @foreach($blogcategorywise as $b)
                           <div class="category_news">
                             
                              <a href="{{ url('blogs/'.$b->blog_url)}}">
                                {{$b->blog_title}}
                              </a>
                             
                           </div>
                           @endforeach
                           
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
                      <form action="{{url('/subscriber')}}" method="post">
                      @csrf
                        <div class="form-group" action="{{url('/subscriber')}}" method="post">
                        
                          <input type="text" name="name" class="form-control" placeholder="Enter Name">
                          <small class="text-white">{{ $errors->first('name') }}</small>
                        </div>
                        <div class="form-group">
                          <input type="email"  name="email" class="form-control" placeholder="Enter Email">
                          <small class="text-white">{{ $errors->first('email') }}</small>
                        </div>
                        <button type="submit" class="btn">Subscribe</button>
                      </form>
                     </div>



                     <div id="sidebar" class="top_stories">
                        <h4 class="heading">लेटेस्ट</h4>
                        <div class="row">
                           <div class="col-md-12">
                           @foreach($bloglatest as $bl)
                              <a href="single_news.php" class="news-box-link">
                             
                                 <div class="row side-blog">
                                    <div class="col-4 pl-0">
                                       <img src="../uploads/{{$bl->Saved_image}}" class="w-100">
                                    </div>
                                    
                                    <div class="col-8 side-blog-content px-0">
                                       <h6>{{$bl->blog_title}}</h6>
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
    

      <footer class="footer">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12 p-0">
                  <div class="footer_social">
                     <p>Follow our social media accounts to get the latest news & updates:</p>
                     <ul>
                        <li><a href=""><img src="../assets/img/facebook.png"></a></li>
                        <li><a href=""><img src="../assets/img/instagram.png"></a></li>
                        <li><a href=""><img src="../assets/img/twitter.png"></a></li>
                        <li><a href=""><img src="../assets/img/youtube.png"></a></li>
                     </ul>
                  </div>
                  </div>
                  <div class="col-md-12 p-0">
                  <div class="footer_links">
                     <ul>
                        <li><a href="{{url('/index')}}">Home</a></li>
                        <li><a href="{{url('/about_us')}}">About Us</a></li>
                        <li><a href="{{url('/anchor_profile')}}">Anchor Profiles</a></li>
                        <li><a href="{{url('/privacy_policy')}}">Privacy Policy</a></li>
                        <li><a href="{{url('/terms_conditions')}}">Terms &amp; Conditions</a></li>
                        <li><a href="{{url('/advertise_with_us')}}">Advertise With Us</a></li>
                        <li><a href="{{url('/contact_us')}}">Contact Us</a></li>
                     </ul>
                  </div>
                  </div>
                  <div class="col-md-12 p-0">
                  <div class="copyright">
                     <p>Copyright &copy; 2020 | All Rights Reserved</p>
                  </div>
                  </div>
               </div>
            </div>
      </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
      <script src="assets/js/jquery.min.js"></script> 
      <script src="assets/js/wow.min.js"></script> 
      <script src="assets/js/bootstrap.min.js"></script> 
      <script src="assets/js/slick.min.js"></script> 
      <script src="assets/js/jquery.li-scroller.1.0.js"></script> 
      <script src="assets/js/jquery.newsTicker.min.js"></script> 
      <script src="assets/js/jquery.fancybox.pack.js"></script> 
      <script src="assets/js/custom.js"></script>



      <script>
          window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("menu_area");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
} 
      </script>  


   </body>
</html>