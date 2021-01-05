@extends('Admin.adminpanel')
@section('stylesheets')

<link rel="stylesheet" href="css/select2.min.css">
@endsection

@section('content')


    <section>  
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category</a></li>
        <li class="active">Add Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row justify-content-center">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Category</h3>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
            </div>
            @endif
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('Admin/storeblog')}}" enctype="multipart/form-data" method="post">
            
           @csrf
              <div class="box-body">
                          
                  <select class="form-control" name="category_id">
                  <option>Select category</option>
                    @foreach ($categories as $key => $category)
                        <option value="{{ $category->id }}"}}> 
                            {{ $category->title }} 
                        </option>
                    @endforeach 
                  </select>
                  <br>
                  <select class="form-control" name="state_id">
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
                    <input type="text" name="blog_url" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Title</label>
                    <input type="text" name="page_title" class="form-control" id="exampleInputEmail1" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Description</label>
                    <textarea type="text" name="page_description" class="form-control" id="exampleInputEmail1" ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Meta Description</label>
                    <textarea type="text" name="page_meta_description" class="form-control" id="exampleInputEmail1" ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Keywords</label>
                    <input type="text" name="page_keywords" class="form-control" id="exampleInputEmail1" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog title</label>
                    <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Description</label>
                    <textarea  type="text" name="blog_description" class="form-control" id="exampleInputEmail1" > </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">highlight 1</label>
                    <input  type="text" name="highlight1" class="form-control" id="exampleInputEmail1" > 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">highlight 2</label>
                    <input  type="text" name="highlight2" class="form-control" id="exampleInputEmail1" > 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">highlight 3</label>
                    <input  type="text" name="highlight3" class="form-control" id="exampleInputEmail1" > 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">highlight 4</label>
                    <input  type="text" name="highlight4" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Posted By</label>
                    <input type="text" name="posted_by" class="form-control" id="exampleInputPassword1"   >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Blog Image</label>
                    <input type="file" class="form-control" accept="image/*" name="blog_image" class="form-control-file" value="Upload"/>
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

@section('scripts')

<script src="js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection