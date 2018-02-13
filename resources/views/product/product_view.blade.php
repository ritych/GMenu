@extends('layouts.app_without_sidebar')

@section('header')
<div class="container"><div class="row">
	<div class="col-lg-2">
		<div class="logo"><img src="{{asset('images/logo.png')}}" alt="logo" /></div>
	</div>
	<div class="col-lg-2">
		<div class="phone">
			<span class="phone_number">+7 (xxx) xxx-xx-xx</span>
			<a href="/">позвоните мне</a>
		</div>
	</div>
	<div class="col-lg-2">
		<div class="city">
			<select class="form-control">
				<option>Москва</option>
				<option>Москва</option>
				<option>Москва</option>
			</select>
		</div>
	</div>
	<div class="col-lg-3">	
		<div class="search">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Укажите что хотите найти">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</div>
	</div>
	<div class="col-lg-1">
		<div class="cart"><i class="fa fa-heart"></i><i class="fa fa-shopping-cart"></i></div>
	</div>
	<div class="col-lg-2">	
		<div class="login">
			@if (Route::has('login'))
				<div class="top-right links">
					@auth
						<a href="{{ url('/home') }}">Home</a>
					@else
						<a href="{{ route('login') }}">Login</a>
						<a href="{{ route('register') }}">Register</a>
					@endauth
				</div>
			@endif
		</div>
	</div>
</div></div>
@endsection

@section('menu')
<div class="container">
	<ul class="nav nav-justified">
		@foreach ($category as $link) 
			<li><a href="{{ url('/catalog/'.$link->cid) }}" title="{{ $link->title }}">{{ $link->title }}</a></li>
		@endforeach
	</ul>
</div>
@endsection

@section('content')
	<?php echo '<pre>';print_r($product); ?>
@endsection

@section('footer')
<div class="container">
	<div class="row">
		<div class="col-lg-2"><img src="{{asset('images/logo.png')}}" alt="logo" /></div>
		<div class="col-lg-10">
			<ul class="nav navbar-nav">
				@foreach ($menu as $link) 
				<li><a href="{{ $link->url }}" title="{{ $link->title }}">{{ $link->title }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection
