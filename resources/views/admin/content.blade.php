@extends('layouts.app_without_sidebar')

@section('adminmenu')
	@include('admin.admin_menu');
@endsection

@section('content')
<div class="col-lg-12">
	<h2>Список материалов</h2>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr class="info text-center">
				<th class="text-center">#</th><th class="text-center select-all"><input type="checkbox"></th><th class="text-center">Заголовок</th><th class="text-center">Тип</th><th class="text-center">Автор</th><th class="text-center">Статус</th><th class="text-center">Дата создания</th><th class="text-center">Операции</th>
			</tr>
		</thead>
	@foreach ($pages as $page)
		<tr>
			<td class="text-center">{{ $page->nid }}</td>
			<td class="text-center"><input id="edit-page-{{ $page->nid }}" name="nodes[{{ $page->nid }}]" value="{{ $page->nid }}" class="form-checkbox" type="checkbox"></td>
			<td class="text-center"><a href="{{ url('page/'.$page->nid) }}">{{ $page->title }}</a></td>
			<td class="text-center">{{ $page->type }}</td>
			<td class="text-center">admin</td>
			<td class="text-center">{{ ($page->status ? 'опубликовано' : 'не опубликовано') }}</td>
			<td class="text-center">{{ $page->created_at }}</td>
			<td class="text-center"><a href="{{ url($page->type.'/edit/'.$page->nid) }}">изменить</a><a style="margin-left:10px;" href="{{ url($page->type.'/delete/'.$page->nid) }}">удалить</a></td>
		</tr>
	@endforeach
	</table>
	{{ $pages->links() }}
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
