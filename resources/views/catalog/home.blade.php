@extends('layouts.app')

@section('header')
	@include('main.header');
@endsection

@section('advrt')
<div class="container">
	<img src="images/advrt.png" alt="logo" />
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
				<img src="images/logo.png" alt="logo" />
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
		@foreach ($category as $link) 
			<li><a href="{{ url('/catalog/'.$link->cid) }}" title="{{ $link->title }}">{{ $link->title }}</a></li>
		@endforeach
	</ul>
	<!--*********************-->
	<h3 class="block_title">Цена</h3>
	<div class="row">
		<div class="col-lg-6"><input type="text" class="form-control" placeholder="От"></div>
		<div class="col-lg-6"><input type="text" class="form-control" placeholder="До"></div>
	</div>
	<!--*********************-->
	<h3 class="block_title">Размер</h3>
	<!--*********************-->
	<h3 class="block_title">Пол</h3>
	<!--*********************-->
	<h3 class="block_title">Металл</h3>
	<!--*********************-->
	<h3 class="block_title">Цвет</h3>
	<!--*********************-->
	<h3 class="block_title">Состав</h3>
@endsection

@section('footer')
	@include('main.footer');
@endsection
