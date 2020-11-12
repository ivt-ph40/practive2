@extends('layouts.master')
@section('content')
<h1>User Detail :</h1>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$user->name}}</h5>
    <p class="card-text">{{$user->email}}</p>
    <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit Info</a>
  </div>
</div>
<h1>List Posts : </h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($user->posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td>
      <td>
      	<a href="#" class="btn btn-primary">Edit</a>
      	<a href="#" class="btn btn-success">Show</a>
      	<form action="#" method="POST">
      		@csrf
      		@method('DELETE')
      		<button type="submit" class="btn btn-danger">Delete</button>
      		
      	</form>
    	</td>
    </tr>
    @endforeach
  </tbody>
</table>
<h1>List Comments : </h1>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($user->comments as $comment)
    <tr>
      <th scope="row">{{$comment->id}}</th>
      <td>{{$comment->content}}</td>
      <td>
      	<a href="#" class="btn btn-primary">Edit</a>
      	<a href="#" class="btn btn-success">Show</a>
      	<form action="#" method="POST">
      		@csrf
      		@method('DELETE')
      		<button type="submit" class="btn btn-danger">Delete</button>
      		
      	</form>
    	</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection