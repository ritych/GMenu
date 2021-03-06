@extends('layouts.app_without_sidebar')

@section('adminmenu')
	@include('admin.admin_menu');
@endsection

@section('header')
	@include('main.header');
@endsection

@section('menu')
	@include('main.menu');
@endsection


@section('content')
	<div class="breadcrumbs">Home / </div>
	<div class="product_left col-lg-6">
		<div class="product_image_block">
			<div class="product_image_main col-lg-9">
				<img src="{{asset('images/product.png')}}" alt="" />
			</div>
			<div class="product_image_slider col-lg-3">
				<div class="up_arrow"><img src="{{asset('images/up.png')}}" alt="" /></div>
				<ul>
					<li><img src="{{asset('images/small_p1.png')}}" alt="" /></li>
					<li><img src="{{asset('images/small_p2.png')}}" alt="" /></li>
					<li><img src="{{asset('images/small_p3.png')}}" alt="" /></li>
					<li><img src="{{asset('images/small_p4.png')}}" alt="" /></li>
				</ul>
				<div class="down_arrow"><img src="{{asset('images/down.png')}}" alt="" /></div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="product_image_description">
			<h3>{{ trans('product.description') }}</h3>
			<div class="product_image_description_text">{{ $product[0]->description }}</div>
		</div>
	</div>
	
	<div class="product_right col-lg-6">
		<div class="product_title"><h2>{{ $product[0]->title }}</h2></div>
		<div class="product_sku">{{ trans('product.sku') }}: {{ $product[0]->sku }}</div>
		<div class="product_price">{{ trans('product.prcie') }}: {{ $product[0]->sell_price }}</div>
		<div class="product_tocart"><button type="button" class="btn btn-default">{{ trans('product.tocart') }}</button></div>
		<div class="product_whishlist"><button type="button" class="btn btn-default">{{ trans('product.wishlist') }}</button></div>
		
		
		<div class="product_characters">
			<h3>{{ trans('product.characters') }}</h3>
			<table class="table">
				<tr><td>{{ trans('product.metal') }}:</td><td class="text-right">Золото Au 585</td></tr>
				<tr><td>{{ trans('product.insert') }}:</td><td class="text-right">Бриллиант - 1 шт., 0.21 карат, 3 группа цвета, 5 чистота, 57 граней, огранка круглая</td></tr>
				<tr><td>{{ trans('product.colection') }}:</td><td class="text-right">Зеркальный блеск</td></tr>
				<tr><td>{{ trans('product.manufacturer') }}:</td><td class="text-right">Российский Завод</td></tr>
				<tr><td>{{ trans('product.metal_color') }}:</td><td class="text-right">Белый</td></tr>
			</table>
			{{ $product[0]->category }}
			{{ $product[0]->old_price }}
			{{ $product[0]->sid }}
			{{ $product[0]->images }}
		</div>
		
		<div class="product_info_seller">
			<h3>{{ trans('product.seller_info') }}</h3>
			<div class="product_seller_title">{{ trans('product.seller_title') }}:</div>
			<div class="product_seller_city">{{ trans('product.seller_city') }}:</div>
			<div class="product_seller_works">{{ trans('product.seller_works') }}:</div>
			<div class="product_seller_rating">{{ trans('product.seller_raiting') }}:</div>
			<div class="product_seller_link">{{ trans('product.seller_adres') }}:</div>
		</div>
	</div>
	
	<div class="product_banners col-lg-12">
		<ul>
			<li class="col-lg-3">
				<div class="product_banner_circle"><span></span></div>
				<div class="product_banner_title"><h3>{{ trans('product.choose_size') }}</h3></div>
				<div class="product_banner_text">{{ trans('product.lorem') }}</div>
			</li>
			<li class="col-lg-3">
				<div class="product_banner_circle"><span></span></div>
				<div class="product_banner_title"><h3>{{ trans('product.delivery') }}</h3></div>
				<div class="product_banner_text">{{ trans('product.lorem') }}</div>
			</li>
			<li class="col-lg-3">
				<div class="product_banner_circle"><span></span></div>
				<div class="product_banner_title"><h3>{{ trans('product.payment') }}</h3></div>
				<div class="product_banner_text">{{ trans('product.lorem') }}</div>
			</li>
			<li class="col-lg-3">
				<div class="product_banner_circle"><span></span></div>
				<div class="product_banner_title"><h3>{{ trans('product.waranty') }}</h3></div>
				<div class="product_banner_text">{{ trans('product.lorem') }}</div>
			</li>
		</ul>
	</div>
	
@endsection

@section('footer')
	@include('main.footer');
@endsection
