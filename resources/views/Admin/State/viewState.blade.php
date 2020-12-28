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
      <th scope="col">State Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php $Count=1 ?>
  @foreach($states as $state)
    <tr>
      <th scope="row">{{$Count}}</th>
      <td scope="row">{{$state->state_name}}</td>
      <td scope="row">{{$state->description}}</td>
      
      <td>
        <a href = 'editstate/{{ $state->id }}' type="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa fa-edit"></i></a>
        <a href = 'destroystate/{{ $state->id }}' class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa fa-trash"></i></a>
      </td>
    </tr>
    <?php $Count++ ?>
  @endforeach   
  </tbody>
</table>
@endsection