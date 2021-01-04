
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
                           <li><a href="{{ url($category->category_url)}}">{{$category->title}}</a></li>
                          
                           @endforeach 
                        </ul>
                       
                     </div>
                     <a class="navbar-brand" href="{{url('/index')}}"><img src="assets/img/logo.png" class="nav-logo"></a>
                  </nav>
               </div>
            </div>
         </div>

</section>