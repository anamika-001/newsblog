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
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category_url</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $Count=1 ?>
  @foreach($categories as $category)
    <tr>
      <th scope="row">{{$Count}}</th>
      <td scope="row">{{$category->title}}</td>
     
      <td scope="row">{{$category->description}}</td>
      <td scope="row">{{$category->category_url}}</td>
      <td>
        <a href = 'editcategory/{{ $category->id }}' type="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa fa-edit"></i></a>
        <a href = 'destroycategory/{{ $category->id }}' class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa fa-trash"></i></a>
      </td>
    </tr>
    <?php $Count++ ?>
  @endforeach   
  </tbody>
</table>
@endSection