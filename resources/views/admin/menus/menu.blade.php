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
	<h2>Список меню</h2>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr class="info text-center">
				<th class="text-center">#</th>
				<th class="text-center">Заголовок</th>
				<th class="text-center">Имя меню</th>
				<th class="text-center">Путь</th>
				<th class="text-center">Описание</th>
				<th class="text-center">Операции</th>
			</tr>
		</thead>
	@foreach ($menus as $menu)
		<tr>
			<td class="text-center">{{ $menu->mid }}</td>
			<td class="text-center">{{ $menu->title }}</td>
			<td class="text-center">{{ $menu->menu_name }}</td>
			<td class="text-center">{{ $menu->url }}</td>
			<td class="text-center">{{ $menu->description }}</td>
			<td class="text-center"><a href="{{ url('admin/menu/edit/'.$menu->mid) }}">Изменить</a><a style="margin-left:10px;" href="{{ url('admin/menu/delete/'.$menu->mid) }}">Удалить</a></td>
			
		</tr>
	@endforeach
	</table>
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
