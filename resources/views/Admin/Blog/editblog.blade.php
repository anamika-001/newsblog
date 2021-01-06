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
                    <label for="exampleInputEmail1">Blog Url</label>
                    <input type="text" name="blog_url" value="{{$blogs->blog_url}}" class="form-control" id="exampleInputEmail1" >
                    <small class="text-danger">{{ $errors->first('blog_url') }}</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Title</label>
                    <input type="text" value="{{$blogs->page_title}}" name="page_title" class="form-control" id="exampleInputEmail1" >
                    <small class="text-danger">{{ $errors->first('page_title') }}</small>

                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Description</label>
                    <textarea type="text" name="page_description" class="form-control" id="exampleInputEmail1" >{{$blogs->page_description}}</textarea>
                    <small class="text-danger">{{ $errors->first('page_description') }}</small>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Meta Description</label>
                    <textarea type="text" name="page_meta_description" class="form-control" id="exampleInputEmail1" >{{$blogs->page_meta_description}}</textarea>
                    <small class="text-danger">{{ $errors->first('page_meta_description') }}</small>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Keywords</label>
                    <input type="text" value="{{$blogs->page_title}}" name="page_keywords" class="form-control" id="exampleInputEmail1" >
                    <small class="text-danger">{{ $errors->first('page_keywords') }}</small>

                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Title</label>
                    <input type="text" value="{{$blogs->blog_title}}" name="blog_title" class="form-control" id="exampleInputEmail1" >
                    <small class="text-danger">{{ $errors->first('blog_title') }}</small>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Description</label>
                    <textarea type="text" name="blog_description" class="form-control" id="exampleInputEmail1" >{{$blogs->blog_description}}</textarea>
                    <small class="text-danger">{{ $errors->first('blog_description') }}</small>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">highlight 1</label>
                    <input  type="text" name="highlight1"  value="{{$blogs->highlight1}}" class="form-control" id="exampleInputEmail1" > 
                    <small class="text-danger">{{ $errors->first('highlight1') }}</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">highlight 2</label>
                    <input  type="text" name="highlight2"  value="{{$blogs->highlight2}}" class="form-control" id="exampleInputEmail1" > 
                    <small class="text-danger">{{ $errors->first('highlight2') }}</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">highlight 3</label>
                    <input  type="text" name="highlight3"  value="{{$blogs->highlight3}}" class="form-control" id="exampleInputEmail1" >
                    <small class="text-danger">{{ $errors->first('highlight3') }}</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">highlight 4</label>
                    <input  type="text" name="highlight4"  value="{{$blogs->highlight4}}" class="form-control" id="exampleInputEmail1" >
                    <small class="text-danger">{{ $errors->first('highlight4') }}</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Posted By</label>
                    <input type="text" value="{{$blogs->posted_by}}"  name="posted_by" class="form-control" id="exampleInputPassword1" > 
                    <small class="text-danger">{{ $errors->first('highlight1') }}</small>
             
                                   </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Blog Image</label>
                    <input type="file" src="{{asset($blogs->blog_image)}}" name="blog_image" id="exampleInputFile">
                    <small class="text-danger">{{ $errors->first('blog_image') }}</small>
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