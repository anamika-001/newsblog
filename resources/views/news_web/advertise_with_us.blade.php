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
           <div class="container">
             <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                  <div class="form">
        <div class="contact-info order-2 order-md-1">
            <h3 class="title">Let's get in touch</h3>
            <p class="text"> Contact us with the following details. and fillup the form with the details. </p>
            <div class="info">
                <div class="social-information"> <i class="fa fa-map-marker"></i>
                    <p>Newdelhi, India</p>
                </div>
                <div class="social-information"> <i class="fa fa-envelope-o"></i>
                    <p>contact@news100.com</p>
                </div>
                <div class="social-information"> <i class="fa fa-mobile-phone"></i>
                    <p>+91 8965230147</p>
                </div>
            </div>
            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons"> <a href="#"> <i class="fa fa-facebook-f"></i> </a> <a href="#"> <i class="fa fa-twitter"></i> </a> <a href="#"> <i class="fa fa-instagram"></i> </a> <a href="#"> <i class="fa fa-linkedin"></i> </a> </div>
            </div>
        </div>
        <div class="contact-info-form order-1 order-md-2"> <span class="circle one"></span> <span class="circle two"></span>
            <form action="{{url('/advertise')}}" method="post">
            @csrf
            @if(Session::has('success'))
                     <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                        Session::forget('success');
                        @endphp
                     </div>
                     @endif
                <h3 class="title">Advertise With us</h3>
               
                <div class="social-input-containers"> <input type="text" name="name" class="input" placeholder="Name" />
                <small class="text-white">{{ $errors->first('name') }}</small> </div>
                <div class="social-input-containers"> <input type="email" name="email" class="input" placeholder="Email" /> 
                <small class="text-white">{{ $errors->first('email') }}</small></div>
                <div class="social-input-containers"> <input type="tel" name="phone" class="input" placeholder="Phone" /> 
                <small class="text-white">{{ $errors->first('phone') }}</small></div>
                <div class="social-input-containers textarea"> <textarea name="message" class="input" placeholder="Message"></textarea>
                <small class="text-white">{{ $errors->first('message') }}</small> </div> 
               
                <button type="submit" class="btn advertise_btn">Send</button>
            </form>
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