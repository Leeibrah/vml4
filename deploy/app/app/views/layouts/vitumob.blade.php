<!doctype html>
<html>
	<head>
		<title>
		    @section('title')
	        	VituMob
	        @show
    	</title>
		<meta charset='utf-8'>
		<link rel='stylesheet' href="{{ asset('css/vitumob.css') }}">
		    @yield('css')

		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
		<style>
			table form { margin-bottom: 0; }
			form ul { margin-left: 0; list-style: none; }
			.error { color: red; font-style: italic; }
			body { padding-top: 20px; }
		</style>

	</head>

	<body>


		<div class="container">

			<div id=social>
			    <span><a href="https://www.facebook.com/vitumob" title="Facebook" target="_blank"><img width=24 height=24 src="{{ asset('images/facebook.jpg') }}"></a></span>
			    <span><a href="https://www.twitter.com/vitumob" title="Twitter" target="_blank"><img width=24 height=24 src="{{ asset('images/twitter.png') }}"></a></span>
			</div>

			<div id="nav-bar">

			<span><a href="{{ Functions::host() }}/orders">orders</a></span>
			<span><a href="{{ Functions::host() }}/cart">cart</a></span>
			<span><a href="{{ Functions::host() }}/contacts">contact</a></span>

			</div>

			<div id="header"><a href="{{ Functions::host() }}"><img id="logo" src="{{ asset('images/logo.png') }}" width="400"></a></div>

			@if (Session::has('message'))
				<div class="flash alert">
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif

			@yield('main')

		</div>

	</body>
	  @include('partials.javascript')
      @yield('js') <!-- page-specific javascript-->

</html>