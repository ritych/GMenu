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
	<h2>Редактировать страницу</h2>
	<form action="{{ url('admin/category/edit/submit') }}" method="POST" >
		{{ csrf_field() }}
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Название:</span>
				<input name="title" type="text" class="form-control" id="title" value="{{ $category[0]->title }}">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Вес:</span>
				<input name="weight" type="text" class="form-control" id="weight" value="{{ $category[0]->weight }}">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Родитель:</span>
				<input name="parent" type="text" class="form-control" id="parent" value="{{ $category[0]->parent }}">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Описание:</span>
				<textarea name="description" class="form-control" rows="5" id="description">{{ $category[0]->description }}</textarea>
			</div>
		</div>
		<button type="submit" class="btn btn-default">Сохранить</button>
		<input name="cid" type="hidden" class="form-control" id="cid" value="{{ $id }}">
	</form>
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
