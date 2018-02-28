@extends('layouts.app_without_sidebar')

@section('adminmenu')
	@include('admin.admin_menu');
@endsection

@section('header')
	@include('main.header');
@endsection

@section('content')
<div class="col-lg-12">
	@include('common.errors')
	<h2>Список категорий</h2>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr class="info text-center">
				<th class="text-center">#</th>
				<th class="text-center">Заголовок</th>
				<th class="text-center">Описание</th>
				<th class="text-center">Вес</th>
				<th class="text-center">Родитель</th>
				<th class="text-center">Операции</th>
			</tr>
		</thead>
	@foreach ($categories as $category)
		<tr>
			<td class="text-center">{{ $category->cid }}</td>
			<td class="text-center">{{ $category->title }}</td>
			<td class="text-center">{{ $category->description }}</td>
			<td class="text-center">{{ $category->weight }}</td>
			<td class="text-center">{{ $category->parent }}</td>
			<td class="text-center"><a href="{{ url('admin/category/edit/'.$category->cid) }}">Изменить</a><a style="margin-left:10px;" href="{{ url('admin/category/delete/'.$category->cid) }}">Удалить</a></td>
			
		</tr>
	@endforeach
	</table>
	{{ $categories->links() }}
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
