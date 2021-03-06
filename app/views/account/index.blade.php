@extends('layouts.scaffold')

{{-- Web site Title --}}
@section('title')
@parent
:: Account
@stop

{{-- New Laravel 4 Feature in use --}}
@section('styles')
@parent
body {
	background: #f2f2f2;
}
@stop

{{-- Content --}}
@section('main')
<div class="page-header">
	<h1>Edit your settings</h1>
</div>
<form method="post" action="" class="form-horizontal">


	<!-- Name -->
	<div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
		<label class="control-label" for="name">Name</label>
		<div class="controls">
			<input type="text" name="name" id="name" value="{{ Request::old('name', $user->name) }}" />
			{{ $errors->first('name') }}
		</div>
	</div>
	<!-- ./ name -->

	<!-- Email -->
	<div class="control-group {{ $errors->has('email') ? 'error' : '' }}">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<input type="text" name="email" id="email" value="{{ Request::old('email', $user->email) }}" />
			{{ $errors->first('email') }}
		</div>
	</div>
	<!-- ./ email -->

	<!-- Mobile Number -->
	<div class="control-group {{ $errors->has('phone') ? 'error' : '' }}">
		<label class="control-label" for="phone">Mobile Number</label>
		<div class="controls">
			<input type="text" name="phone" id="phone" value="{{ Request::old('phone', $user->phone) }}" />
			{{ $errors->first('phone') }}
		</div>
	</div>
	<!-- ./ phone -->

	<!-- Password -->
	<div class="control-group {{ $errors->has('password') ? 'error' : '' }}">
		<label class="control-label" for="password">Password</label>
		<div class="controls">
			<input type="password" name="password" id="password" value="" />
			{{ $errors->first('password') }}
		</div>
	</div>
	<!-- ./ password -->

	<!-- Password Confirm -->
	<div class="control-group {{ $errors->has('password_confirmation') ? 'error' : '' }}">
		<label class="control-label" for="password_confirmation">Password Confirm</label>
		<div class="controls">
			<input type="password" name="password_confirmation" id="password_confirmation" value="" />
			{{ $errors->first('password_confirmation') }}
		</div>
	</div>
	<!-- ./ password confirm -->

	<!-- Update button -->
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">Update</button>
		</div>
	</div>
	<!-- ./ update button -->
</form>
@stop
