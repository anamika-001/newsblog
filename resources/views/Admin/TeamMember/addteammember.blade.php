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
  <div class=" text-center"><h3><strong>Add Team Member</strong></h3></div>
  <div class="login-box-body">
    <form action="{{url('/Admin/storeteammember')}}" method="post">
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
            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Member name">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>
        <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <small class="text-danger">{{ $errors->first('email') }}</small>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <small class="text-danger">{{ $errors->first('password') }}</small>
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-xs-6">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Add Team Member</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    
    <!-- /.social-auth-links -->

   

  </div>
  <!-- /.login-box-body -->
</div>


@endsection