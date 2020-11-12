@extends('layouts.master')
@section('content')
<h1>Edit User : {{$user->name}}</h1>
<form action="{{route('users.update', $user->id)}}" method="POST">
	@csrf
	@method('PUT')
	<div class="form-group">
	  <label for="email">Email</label>
	  <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email">
	</div>
	<div class="form-group">
	  <label for="name">@lang('label.name')</label>
	  <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name">
	</div>
	<div class="form-group">
	  <label for="password">Password</label>
	  <input type="password" name="password" class="form-control" id="password">
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection