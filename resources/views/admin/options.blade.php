@extends('layouts.app_without_sidebar')

@section('adminmenu')
	@include('admin.admin_menu');
@endsection

@section('content')
<div class="col-lg-12">
	<h2>Список опций</h2>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr class="info text-center">
				<th class="text-center">#</th>
				<th class="text-center">Заголовок</th>
				<th class="text-center">Имя атрибута</th>
				<th class="text-center">Операции</th>
			</tr>
		</thead>
	@foreach ($options as $option)
		<tr>
			<td class="text-center">{{ $option->oid }}</td>
			<td class="text-center">{{ $option->name }}</td>
			<td class="text-center">{{ $option->aname }}</td>
			<td class="text-center"><a href="{{ url('option/edit/'.$option->oid) }}">изменить</a><a style="margin-left:10px;" href="{{ url('option/delete/'.$option->oid) }}">удалить</a></td>
			
		</tr>
	@endforeach
	</table>
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
