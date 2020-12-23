@extends('SubAdmin.subadminpanel')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Category Id</th>
      <th scope="col">State Id</th>
      <th scope="col">Page Title</th>
      <th scope="col">Page Description</th>
      <th scope="col">Page Meta Description</th>
      <th scope="col">Page Keywords</th>
      <th scope="col">Blog Title</th>
      <th scope="col">Blog Description</th>
      <th scope="col">Blog Image</th>
      <th scope="col">Posted By</th>
      
      
    </tr>
  </thead>
  <tbody>
  <?php $Count=1 ?>
  @foreach($blogs as $blog)
    <tr>
      <th scope="row">{{$Count}}</th>
      <td scope="row">{{$blog->category_id}}</td>
      <td scope="row">{{$blog->state_id}}</td>
      <td scope="row">{{$blog->page_title}}</td>
      <td scope="row">{{$blog->page_description}}</td>
      <td scope="row">{{$blog->page_meta_description}}</td>
      <td scope="row">{{$blog->page_keywords}}</td>
      <td scope="row">{{$blog->blog_title}}</td>
      <td scope="row">{{$blog->blog_description}}</td>
      <td scope="row">{{$blog->blog_image}}</td>
      <td scope="row">{{$blog->posted_by}}</td>
      
      <td>
        <a href = 'editblog/{{ $blog->id }}' type="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa fa-edit"></i></a>
        <a href = 'destroyblog/{{ $blog->id }}' class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa fa-trash"></i></a>
      </td>
    </tr>
    <?php $Count++ ?>
  @endforeach   
  </tbody>
</table>
@endsection