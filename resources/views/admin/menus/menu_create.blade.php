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
	<h2>Создать пункт меню</h2>
	<form action="{{ url('admin/menu/create/submit') }}" method="POST" >
		{{ csrf_field() }}
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Название:</span>
				<input name="title" type="text" class="form-control" id="title">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Ссылка:</span>
				<input name="url" type="text" class="form-control" id="url">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Имя меню:</span>
				<input name="menu_name" type="text" class="form-control" id="menu_name">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Описание:</span>
				<textarea name="description" class="form-control" rows="5" id="description"></textarea>
			</div>
		</div>
		<button type="submit" class="btn btn-default">Создать</button>
	</form>
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
