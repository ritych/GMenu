@extends('layouts.app_without_sidebar')

@section('adminmenu')
	@include('admin.admin_menu');
@endsection

@section('header')
	@include('main.header');
@endsection

@section('content')
<div class="col-lg-12">
	<h2>Список товаров</h2>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr class="info text-center">
				<th class="text-center">#</th><th class="text-center select-all"><input type="checkbox"></th><th class="text-center">Заголовок</th><th class="text-center">Автор</th><th class="text-center">Статус</th><th class="text-center">Дата создания</th><th class="text-center">Магазин</th><th class="text-center">Операции</th>
			</tr>
		</thead>
	@foreach ($products as $product)
		<tr>
			<td class="text-center">{{ $product->nid }}</td>
			<td class="text-center"><input id="edit-product-{{ $product->nid }}" name="nodes[{{ $product->nid }}]" value="{{ $product->nid }}" class="form-checkbox" type="checkbox"></td>
			<td class="text-center"><a href="{{ url('product/'.$product->nid) }}">{{ $product->title }}</a></td>
			<td class="text-center">admin</td>
			<td class="text-center">{{ ($product->status ? 'опубликовано' : 'не опубликовано') }}</td>
			<td class="text-center">{{ $product->created_at }}</td>
			<td class="text-center">Ссылка на магазин</td>
			<td class="text-center"><a href="{{ url('product/edit/'.$product->nid) }}">изменить</a><a style="margin-left:10px;" href="{{ url('product/delete/'.$product->nid) }}">удалить</a></td>
		</tr>
	@endforeach
	</table>
	{{ $products->links() }}
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
