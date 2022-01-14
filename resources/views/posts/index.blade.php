@extends('layouts.app') @section('content')
 <div class="row">
 <div class="col-sm-12">
 <div class="full-right">
     <h2 style="text-align:center;">CRUD Articles Database TP</h2>
     <br>
   </div>
</div>
</div> 

@if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
 @endif

<table class="table table-bordered" style="width:80%;position:absolute;left:12%;height:4em;" >
  <tr>
     <th width="50px">No</th>
     <th>Title</th>
     <th>Body</th>
     <th width="140px" class="text-center">
       <a href="{{route('posts.create')}}" class="btn btn-success">
         <i class="bi bi-plus"></i>
      </a>
   </th>
</tr>
<?php $no=1; ?>
@foreach ($post as $key => $value)
<tr>
   <td>{{$no++}}</td>
   <td>{{ $value->title }}</td>
   <td>{{ $value->body }}</td>
   <td>
      <a class="btn btn-info" href="{{route('posts.show',$value->id)}}">
         <i class="bi bi-microsoft" style="color:white"></i></a>
      <a class="btn btn-primary" href="{{route('posts.edit',$value->id)}}">
         <i class="bi bi-pencil"></i></a>
   {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy',$value->id],'style'=>'display:inline']) !!}
           <button type="submit" style="display: inline;" class="btn btn-danger">
           <i class="bi bi-trash" ></i> </button>
    {!! Form::close() !!} 
  </td>
</tr> 
@endforeach
</table> 
@endsection
