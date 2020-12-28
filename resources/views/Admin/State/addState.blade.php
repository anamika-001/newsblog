@extends('Admin.adminpanel')

@section('content')


    <section>  
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category</a></li>
        <li class="active">Add States</li>
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
              <h3 class="box-title">Add States</h3>
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
            <form role="form" action="{{url('Admin/storestate')}}" class="form-inline">
              <div class="box-body" >
                <div class="form-group" style="padding:10px;">
                  <label for="exampleInputEmail1">State Name</label>
                  <input type="text" name="state_name" class="form-control" id="exampleInputEmail1" >
                </div>
               
                <div class="form-group" style="padding:10px;">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" name="description" class="form-control" id="exampleInputEmail1" >
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