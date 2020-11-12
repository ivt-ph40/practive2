@extends('layouts.master')
@section('content')
<h1>HomePage</h1>
<p>Welcome {{\Auth::user()->name}}</p>
<form action="{{route('logout')}}" method="POST">
	@csrf
	<button type="submit" class="btn btn-primary">Logout</button>
</form>
@endsection