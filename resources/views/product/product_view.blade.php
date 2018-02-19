@extends('layouts.app_without_sidebar')

@section('header')
	@include('main.header');
@endsection

@section('menu')
	@include('main.menu');
@endsection


@section('content')
	<div class="breadcrumbs">Home / </div>
	<div class="product_left col-lg-6"></div>
	<div class="product_right col-lg-6">
		<div class="product_title"><h2>{{ $product[0]->title }}</h2></div>
		<div class="product_sku">{{ $product[0]->articul }}</div>
		<div class="product_price">{{ $product[0]->sell_price }}</div>
		<div class="product_tocart"><button type="button" class="btn btn-default">В корзину</button></div>
		<div class="product_whishlist"><button type="button" class="btn btn-default">Отложить</button></div>
		
		
		<div class="product_characters">
			<h3>Характеристики товара</h3>
			{{ $product[0]->category }}<br>
			{{ $product[0]->old_price }}<br>
			{{ $product[0]->sid }}<br>
			{{ $product[0]->images }}<br>
			{{ $product[0]->description }}<br>
		</div>
		
		<div class="product_info_seller">
			<h3>Информация о продавце</h3>
			<div class="product_seller_title">Название компании:</div>
			<div class="product_seller_city">Город:</div>
			<div class="product_seller_works">График работы:</div>
			<div class="product_seller_rating">Рейтинг продавца:</div>
			<div class="product_seller_link">Адрес магазина:</div>
		</div>
		
		<?php //echo '<pre>';print_r($product); echo '</pre>';?>
	</div>
	
	<div class="product_banners">
		<ul>
			<li class="col-lg-3">
				<div class="product_banner_circle"></div>
				<div class="product_banner_title"><h3>Как выбрать размер</h3></div>
				<div class="product_banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra</div>
			</li>
			<li class="col-lg-3">
				<div class="product_banner_circle"></div>
				<div class="product_banner_title"><h3>Доставка</h3></div>
				<div class="product_banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra</div>
			</li>
			<li class="col-lg-3">
				<div class="product_banner_circle"></div>
				<div class="product_banner_title"><h3>Оплата</h3></div>
				<div class="product_banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra</div>
			</li>
			<li class="col-lg-3">
				<div class="product_banner_circle"></div>
				<div class="product_banner_title"><h3>Гарантия</h3></div>
				<div class="product_banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra</div>
			</li>
		</ul>
	</div>
	
@endsection

@section('footer')
	@include('main.footer');
@endsection
