@extends('Admin.adminpanel')

@section('content')


    <section>  
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category</a></li>
        <li class="active">edit Category</li>
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
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{action('Admin\StateController@update',[$details->id])}}" class="form-inline">
            @csrf
              <div class="box-body" >
                <div class="form-group" style="padding:10px;">
                  <label for="exampleInputEmail1">State Name</label>
                  <input type="text" value="{{$details->state_name}}" name="state_name" class="form-control" id="exampleInputEmail1" placeholder="Enter state">
                </div>
               
                <div class="form-group" style="padding:10px;">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" value="{{$details->description}}" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
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