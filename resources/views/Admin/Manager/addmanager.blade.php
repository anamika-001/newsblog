@extends('Admin.adminpanel')

@section('content')

  <!-- Google Font -->
  

<div class="login-box">
  <div class="login-logo">
  <a href="#" class="logo">
       <img src="../../dist/img/logo.png" alt="logo" class="img-fluid" style="width:40%;">
      
    </a>
  </div>
  <!-- /.login-logo -->
  <div class=" text-center"><h3><strong>Add Manager</strong></h3></div>
  <div class="login-box-body">
    <form action="{{url('/Admin/storemanager')}}" method="POST">
        @csrf
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
            </div>
            @endif
        <div class="form-group has-feedback">
            <input type="text" class="form-control" name="name" placeholder="Manager name">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-xs-5">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Add Manager</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    
    <!-- /.social-auth-links -->

   

  </div>
  <!-- /.login-box-body -->
</div>


@endsection