@extends('Admin.adminpanel')

@section('content')


    <section>  
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Video</a></li>
        <li class="active">Edit Video </li>
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
              <h3 class="box-title">Edit Video</h3>
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
            <form role="form" action="{{action('Admin\VideoController@update',[$videos->id])}}" class="form-inline">
              <div class="box-body" >
                <div class="form-group" style="padding:10px;">
                  <label for="exampleInputEmail1">Video Title</label>
                  <input type="text" value="{{$videos->Video_title}}" name="video_title" class="form-control" id="exampleInputEmail1">
                </div>
               
                <div class="form-group" style="padding:10px;">
                  <label for="exampleInputEmail1">Video Link</label>
                  <input type="text" value="{{$videos->Video_link}}" name="video_link" class="form-control" id="exampleInputEmail1">
                </div>
               </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        
        </div>
       
      </div>
      <!-- /.row -->
    </section>

@endsection