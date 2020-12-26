@extends('Admin.adminpanel')
@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Video Title</th>
      <th scope="col">Video Link</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $Count=1 ?>
  @foreach($videos as $video)
    <tr>
      <th scope="row">{{$Count}}</th>
      <td scope="row">{{$video->video_title}}</td>
      <td scope="row">{{$video->video_link}}</td>
      <td>
        <a href = 'editvideo/{{ $video->id }}' type="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa fa-edit"></i></a>
        <a href = 'destroyvideo/{{ $video->id }}' class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa fa-trash"></i></a>
      </td>
    </tr>
    <?php $Count++ ?>
  @endforeach   
  </tbody>
</table>
@endSection