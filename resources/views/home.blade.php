@extends('layouts.app')

@section('adminmenu')
	@include('admin.admin_menu');
@endsection

@section('header')
	@include('main.header');
@endsection

@section('advrt')
<div class="container">
	<img src="{{asset('images/advrt.png')}}" alt="logo" />
</div>
@endsection

@section('menu')
	@include('main.menu');
@endsection

@section('content')
<div class="catalog_grid">
	<div class="catalog_filter">
		<div class="form-group">
			<label class="control-label" for="select_sorting">сортировать по</label>
			<select class="form-control" id="select_sorting">
				<option>по цене</option>
				<option>по названию</option>
			</select>
		</div>	
	</div>
	<ul class="catalog_products">
		@foreach ($products as $product) 
			<li>
				<img src="{{asset('images/logo.png')}}" alt="logo" />
				<div class="catalog_product_title"><a href="{{url('/product/'.$product->nid)}}">{{ $product->title }}</a></div>
				<div class="catalog_product_sell_price">{{$product->sell_price }}</div>
				<div class="catalog_product_tocart"><button type="button" class="btn btn-default">Заказать</button></div>
			</li>
		@endforeach
		<div class="clear"></div>
	</ul>
</div>	
@endsection

@section('sidebar')
	<h3 class="block_title">Категории</h3>
	<ul class="nav">
		@foreach (\App\Category::all() as $link) 
			<li><a href="{{ url('/catalog/'.$link->cid) }}" title="{{ $link->title }}">{{ $link->title }}</a></li>
		@endforeach
	</ul>
	<!--*********************-->
	<h3 class="block_title">Цена</h3>
	<div class="row">
		<div class="col-lg-6"><input type="text" class="form-control" placeholder="От"></div>
		<div class="col-lg-6"><input type="text" class="form-control" placeholder="До"></div>
	</div>
	<?php // echo '<pre>';print_r($options);echo '</pre>'; ?>
	<!--*********************-->
	<h3 class="block_title">Размер</h3>
		<ul class="attributes_options">
		@foreach ($options as $option) 
			@if ($option->aid==1)
				<li>{{ $option->name }}</li>
			@endif
		@endforeach
		</ul>
	<!--*********************-->
	<h3 class="block_title">Пол</h3>
		<ul class="attributes_options">
		@foreach ($options as $option) 
			@if ($option->aid==2)
				<li>{{ $option->name }}</li>
			@endif
		@endforeach
		</ul>
	<!--*********************-->
	<h3 class="block_title">Металл</h3>
		<ul class="attributes_options">
		@foreach ($options as $option) 
			@if ($option->aid==3)
				<li>{{ $option->name }}</li>
			@endif
		@endforeach
		</ul>
	<!--*********************-->
	<h3 class="block_title">Цвет</h3>
		<ul class="attributes_options">
		@foreach ($options as $option) 
			@if ($option->aid==4)
				<li>{{ $option->name }}</li>
			@endif
		@endforeach
		</ul>
	<!--*********************-->
	<h3 class="block_title">Состав</h3>
		<ul class="attributes_options">
		@foreach ($options as $option) 
			@if ($option->aid==5)
				<li>{{ $option->name }}</li>
			@endif
		@endforeach
		</ul>
@endsection

@section('footer')
	@include('main.footer');
@endsection
