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
      <th scope="col">Member Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $Count=1 ?>
  @foreach($members as $member)
  
    <tr>
      <th scope="row">{{$Count}}</th>
      <td scope="row">{{$member->name}}</td>
      <td scope="row">{{$member->email}}</td>
      <td scope="row">{{$member->password}}</td>
      <td>
        <!-- <a href = 'editmember/{{ $member->id }}' type="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa fa-edit"></i></a> -->
        <a href = 'destroyteammember/{{ $member->id }}' class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa fa-trash"></i></a>
      </td>
    </tr>
    <?php $Count++ ?>
  @endforeach   
  </tbody>
</table>
@endSection