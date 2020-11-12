@extends('layouts.master')
@section('content')
<h1>List Users: </h1>
@if(session()->has('message'))
	<div class="alert alert-success" role="alert">
  {{session()->get('message')}}
	</div>
@endif
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>

      <td>
      	<a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a>
      	<a href="{{route('users.show', $user->id)}}" class="btn btn-success">Show</a>
      	<form action="{{route('users.delete', $user->id)}}" method="POST">
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