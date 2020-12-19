@extends('Admin.adminpanel')

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
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('Admin/storeblog')}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">type</label>
                  <input type="text" name="type" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">text area</label>
                  <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="image" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         

          

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>

@endsection