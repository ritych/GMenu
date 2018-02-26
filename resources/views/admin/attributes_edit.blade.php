@extends('layouts.app_without_sidebar')

@section('adminmenu')
	@include('admin.admin_menu');
@endsection

@section('content')
<div class="col-lg-12">
	@include('common.errors')
	<h2>Редактировать атрибут</h2>
	<form action="{{ url('admin/attribute/edit/submit') }}" method="POST" >
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Название:</label>
			<input name="title" type="text" class="form-control" id="title" value="{{ $attribute[0]->name }}">
		</div>
		<div class="form-group">
			<label for="description">Описание:</label>
			<textarea name="description" class="form-control" rows="5" id="description">{{ $attribute[0]->description }}</textarea>
		</div> 
		
		<button type="submit" class="btn btn-default">Сохранить</button>
		<input name="aid" type="hidden" class="form-control" id="aid" value="{{ $id }}">
	</form>
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
