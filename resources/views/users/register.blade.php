@extends('layouts.master')
@section('content')
<h1>Register:</h1>
<form action="{{route('register')}}" method="POST">
	@csrf
	<div class="form-group">
		<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" class="form-control" id="email">
	</div>
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control" id="name">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" class="form-control" id="password">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection