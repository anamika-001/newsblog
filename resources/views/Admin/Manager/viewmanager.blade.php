@extends('Admin.adminpanel')
@section('content')
<table class="table">
@if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
            </div>
            @endif
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Manager name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $Count=1 ?>
  @foreach($managers as $manager)
  
    <tr>
      <th scope="row">{{$Count}}</th>
      <td scope="row">{{$manager->name}}</td>
      <td scope="row">{{$manager->email}}</td>
      <td scope="row">{{$manager->password}}</td>
      <td>
        <!-- <a href = 'editmanager/{{ $manager->id }}' type="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa fa-edit"></i></a> -->
        <a href = 'destroymanager/{{ $manager->id }}' class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa fa-trash"></i></a>
      </td>
    </tr>
    <?php $Count++ ?>
  @endforeach   
  </tbody>
</table>
@endSection