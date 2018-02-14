@extends('layouts.app_without_sidebar')

@section('header')
	@include('main.header');
@endsection

@section('menu')
	@include('main.menu');
@endsection

@section('content')
	<?php echo '<pre>';print_r($product); ?>
@endsection

@section('footer')
	@include('main.footer');
@endsection
