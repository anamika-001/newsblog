@extends('Admin.adminpanel')

@section('content')


    <section>  
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category</a></li>
        <li class="active">Edit Category</li>
      </ol>
    </section>
    @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
            </div>
            @endif

    <!-- Main content -->
    <section class="content">
      <div class="row justify-content-center">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{action('Admin\BlogController@update',[$blogs->id])}}" enctype="multipart/form-data" method="post">
              @csrf
              <div class="box-body">
                          
                  <select class="form-control" name="category_id" required>
                  <option>Select category</option>
                    @foreach ($categories as $key => $category)
                        <option value="{{ $category->id }}"}}> 
                            {{ $category->title }} 
                        </option>
                    @endforeach 
                  </select>
                  <br>
                  <select class="form-control" name="state_id" required>
                  <option>Select State</option>
                  @foreach ($states as  $state)
                      <option value="{{ $state->id }}"}}> 
                          {{ $state->state_name}} 
                      </option>
                  @endforeach 
                  </select>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Title</label>
                    <input type="text" value="{{$blogs->page_title}}" name="page_title" class="form-control" id="exampleInputEmail1" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Description</label>
                    <input type="text" value="{{$blogs->page_description}}" name="page_description" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Meta Description</label>
                    <input type="text" value="{{$blogs->page_meta_description}}" name="page_meta_description" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Keywords</label>
                    <input type="text" value="{{$blogs->page_title}}" name="page_keywords" class="form-control" id="exampleInputEmail1" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">BLog title</label>
                    <input type="text" value="{{$blogs->blog_title}}" name="blog_title" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog description</label>
                    <input type="text" value="{{$blogs->blog_description}}" name="blog_description" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Posted By</label>
                    <input type="text" value="{{$blogs->posted_by}}" name="posted_by" class="form-control" id="exampleInputPassword1" >                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Blog Image</label>
                    <input type="file" src="{{asset($blogs->blog_image)}}" name="blog_image" id="exampleInputFile">
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              
              </div>
            </form>
          </div>
        </div>
        
      </div>
      <!-- /.row -->
    </section>

@endsection