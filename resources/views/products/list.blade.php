@extends('layouts.master')
@section('content')
<h1>
	<p>
		<div class="container">
			<div class="form-control">
				<input type="text" name="email" value="âsaa">
				<label for="email">Email</label>
				<form action="{{ route('users.store') }}" method="POST" class="">
					<button type="submit">Add</button>
				</form>
			</div>
		</div>
	</p>
</h1>
@endsection