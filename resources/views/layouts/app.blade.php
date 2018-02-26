<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Shop</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<script src="{{ asset('js/app.js') }}" ></script>
		<script src="{{ asset('js/superfish.js') }}" ></script>
		<script src="{{ asset('js/hoverIntent.js') }}" ></script>
		<script src="{{ asset('js/supersubs.js') }}" ></script>
    </head>
    <body>
		<header>
			@yield('adminmenu')
			@yield('header')
		</header>
		
		@yield('menu')
		
		<section class="advrt">@yield('advrt')</section>
		<main>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<aside class="sidebar">@yield('sidebar')</aside>
					</div>
					<div class="col-lg-9">
						<section class="content">@yield('content')</section>
					</div>
				</div>	
			</div>
		</main>
		<footer>
			@yield('footer')
		</footer>
    </body>
	@yield('scripts')
</html>
