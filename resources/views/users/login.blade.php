@extends('layouts.master')
@section('content')
<h1>Login User:</h1>
<form action="{{route('login')}}" method="POST">
	@csrf
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
	</div>
	<div class="form-group">
		<label for="pass">Password</label>
		<input type="password" name="password" class="form-control" id="pass" value="{{old('password')}}">
	</div>
	@if(session()->has('fail'))
		<p style="color: red">{{session()->get('fail')}}</p>
	@endif
	<button type="submit" class="btn btn-primary">Sign in</button>
</form>

@endsection