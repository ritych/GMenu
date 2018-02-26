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
	<h2>Редактировать опцию</h2>
	<form action="{{ url('admin/option/edit/submit') }}" method="POST" >
		{{ csrf_field() }}
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Название</span>
				<input name="title" type="text" class="form-control" id="title" value="{{ $option[0]->name }}">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Атрибут:</span>
				<input name="attr" class="form-control" id="attr" value="{{ \App\ProductAttribute::where('aid', $option[0]->aid)->get()[0]->name }}" disabled>
			</div> 
		</div>
		<button type="submit" class="btn btn-default">Сохранить</button>
		<input name="oid" type="hidden" class="form-control" id="oid" value="{{ $option[0]->oid }}">
	</form>
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
