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
                     <div class="breaking-flash">
                        <a href="">
                        <img src="assets/img/news-image.jpg" class="w-100">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="newsSection">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="latest_newsarea">
                     <span>Latest News</span>
                     <ul id="ticker01" class="news_sticker">
                        @foreach($blogs as $blog)
                        <li><a href="{{ url($blog->blog_url)}}"><img src="uploads/{{$blog->Saved_image}}" alt="">{{$blog->blog_title}}</a></li>
                        @endforeach 
                        
                     </ul>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-3">
                     <div class="">
                        <div class="corona-chart">
                           <div class="chart-india">
                              <h3>कोरोना ट्रैकर (भारत)</h3>
                              <ul>
                                 <li>
                                    <div class="chart-title">Confirmed</div>
                                    <div class="chart-val-confirm">9,857,029</div>
                                 </li>
                                 <li>
                                    <div class="chart-title">Recovered</div>
                                    <div class="chart-val-recover">9,357,464</div>
                                 </li>
                                 <li>
                                    <div class="chart-title">Death</div>
                                    <div class="chart-val">143,019</div>
                                 </li>
                              </ul>
                           </div>
                           <div class="chart-world">
                              <h3>कोरोना ट्रैकर (विश्व)</h3>
                              <ul>
                                 <li>
                                    <div class="chart-title">Confirmed</div>
                                    <div class="chart-val-confirm">71,698,043</div>
                                 </li>
                                 <li>
                                    <div class="chart-title">Recovered</div>
                                    <div class="chart-val-recover">46,855,056</div>
                                 </li>
                                 <li>
                                    <div class="chart-title">Death</div>
                                    <div class="chart-val">1,604,928</div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="right_ad">
                           <img src="assets/img/ad.gif" class="w-100">
                        </div>
                     </div>
                  </div>


                  <div class="col-md-6">
                     <div class="row">
                        <?php $i = 1;?>
                        @foreach($completeblog as $cb)
                        <?php if($i==1)
                        {
                        ?>
                        <div class="col-md-12">
                           <div class="full_box_news">
                              <a href="{{ url($cb->blog_url)}}">
                                 <img src="uploads/{{$cb->Saved_image}}" class="w-100">
                                 <h4>{{$cb->blog_title}}</h4>
                              </a>
                           </div>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if($i==2 || $i==3)
                        { 
                          if($i==2)
                          {
                        ?>
                        <div class="col-md-6">
                           <div class="half_news">
                              <a href="{{ url($cb->blog_url)}}">
                                 <img src="uploads/{{$cb->Saved_image}}" class="w-100">
                                 <p>{{$cb->blog_title}}</p>
                              </a>
                           </div>
                        </div>
                        <?php
                          }
                          if($i==3)
                          {
                        ?>
                        <div class="col-md-6">
                           <div class="half_news">
                              <a href="{{ url($cb->blog_url)}}">
                                 <img src="uploads/{{$cb->Saved_image}}" class="w-100">
                                 <p>{{$cb->blog_title}}</p>
                              </a>
                           </div>
                        </div>
                        <?php
                          }
                        }
                        ?>
                        <?php $i++;?>
                        @endforeach
                     </div>
                  </div>


                  <div class="col-md-3">
                     <div class="">
                        <div class="right_ad">
                           <img src="assets/img/ad1.gif" class="w-100">
                        </div>
                        <div class="right_ad">
                           <img src="assets/img/ad2.gif" class="w-100">
                        </div>
                        <div class="right_ad">
                           <img src="assets/img/ad1.gif" class="w-100">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="section-top-space">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-3">
            <div id="sidebar" class="top_stories">
               <h4 class="heading">प्रमुख समाचार</h4>
               <div class="row">
                  <div class="col-md-12">
                     @foreach($sidenews as $sn)
                     <a href="single_news.php" class="news-box-link">
                        <div class="row side-blog">
                           <div class="col-4 pl-0">
                              <img src="uploads/{{$sn->Saved_image}}" class="w-100">
                           </div>
                           <div class="col-8 side-blog-content px-0">
                              <h6>{{$sn->blog_title}}</h6>
                           </div>
                        </div>
                     </a>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-12">
                  <div class="ribbons-wrapper">
                     <div class="ribbon">
                        <span class="ribbon5">देश विदेश</span>
                        <?php $i = 1;?>
                        <div class="row cat-box">
                           @foreach($centernews as $cn)
                           <?php if($i==1) { ?>
                           <div class="col-md-5 pd-l-cat-4 cat-left">
                              <a href="single_news.php" class="news-box-link">
                                 <h4>{{$cn->blog_title}}</h4>
                              </a>
                              <img src="uploads/{{$cn->Saved_image}}" class="w-100">
                           </div>
                           <?php } ?>
                           <?php  if($i==2) 
                            { ?>
                           <div class="col-md-7 pd-cat-4">
                              
                              <?php
                                 if($i==2) { 
                                 ?>
                             @foreach($completeblog as $cb)
                              <div class="row">
                                 <div class="col-4">
                                    <img src="uploads/{{$cb->Saved_image}}" class="w-100">
                                 </div>
                                 <div class="col-8 pl-0">
                                    <a href="single_news.php" class="news-box-link">
                                       <h4>{{$cb->blog_title}}</h4>
                                    </a>
                                 </div>
                              </div>
                              @endforeach
                             
                              <?php } ?>
                           </div>
                           <?php 
                            }
                              $i++; ?>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="ribbons-wrapper">
                     <div class="ribbon">
                        <span class="ribbon5">देश विदेश</span>
                        <?php $i = 1;?>
                        <div class="row cat-box">
                           @foreach($centernews as $cn)
                           <?php if($i==1) { ?>
                           <div class="col-md-5 pd-l-cat-4 cat-left">
                              <a href="single_news.php" class="news-box-link">
                                 <h4>{{$cn->blog_title}}</h4>
                              </a>
                              <img src="uploads/{{$cn->Saved_image}}" class="w-100">
                           </div>
                           <?php } ?>
                           <?php  if($i==2) 
                            { ?>
                           <div class="col-md-7 pd-cat-4">
                              
                              <?php
                                 if($i==2) { 
                                 ?>
                             @foreach($completeblog as $cb)
                              <div class="row">
                                 <div class="col-4">
                                    <img src="uploads/{{$cb->Saved_image}}" class="w-100">
                                 </div>
                                 <div class="col-8 pl-0">
                                    <a href="single_news.php" class="news-box-link">
                                       <h4>{{$cb->blog_title}}</h4>
                                    </a>
                                 </div>
                              </div>
                              @endforeach
                             
                              <?php } ?>
                           </div>
                           <?php 
                            }
                              $i++; ?>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="widget-container live-update">
               <div class="live-update-heading">
                  <h2>लाइव अपडेट</h2>
               </div>
               <div class="live-update-container">
                  <div class="content" id="scrollbar">
                     @foreach($sidenews as $rn)
                     <ul>
                        <li data-tb-region-item="">
                           <a title="{{$rn->page_title}}" href="single_news.php">
                              <div class="live-list-group">
                                 <h4>{{$rn->updated_at->format("H:i A")}}</h4>
                                 <p>{{$rn->blog_title}}</p>
                              </div>
                           </a>
                        </li>
                     </ul>
                     @endforeach
                  </div>
               </div>
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
                  <div class="form-group">
                     <input type="text" class="form-control" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                     <input type="email" class="form-control" name="email" placeholder="Enter Email">
                  </div>
                  <button type="submit" class="btn">Subscribe</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
      <section class="section-top-space">
         <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                 @foreach($videos as $video)
                  <div class="col-md-4 mb-3">
                    <div class="news_outer">
                    <a href="https://www.youtube.com/embed/rtkLHNmMalQ" target="_blank">
                    <iframe class="news_video" src="{{$video->Video_link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>{{$video->Video_title}}</p>
                    </a>
                    </div>
                  </div>
                  
                  @endforeach
                </div>
              </div>
            </div>
         </div>
      </section>
      </div>

      @include('news_web.footer')
      
   </body>
</html>