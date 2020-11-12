@extends('layouts.master')
@section('content')
<h1>Create User:</h1>
<form action="{{route('users.store')}}" method="POST">
	@csrf
	<div class="form-group">
		<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email">
		@if ($errors->has('email'))
			<p style="color: red">{{ $errors->first('email') }}
		@endif
	</div>
		<label for="name">@lang('label.user.name')</label>
		<input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">
		@if ($errors->has('name'))
			<p style="color: red">{{ $errors->first('name') }}
		@endif
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" value="{{ old('password') }}" class="form-control" id="password">
		@if ($errors->has('password'))
			<p style="color: red">{{ $errors->first('password') }}
		@endif
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection