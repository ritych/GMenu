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
	<h2>{{ trans('admin/menu/message.edit_menu') }}</h2>
	<form action="{{ url('admin/menu/edit/submit') }}" method="POST" >
		{{ csrf_field() }}
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">{{ trans('admin/menu/message.th2') }}:</span>
				<input name="title" type="text" class="form-control" id="title" value="{{ $menu[0]->title }}">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">{{ trans('admin/menu/message.th4') }}:</span>
				<input name="url" type="text" class="form-control" id="url" value="{{ $menu[0]->url }}">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">{{ trans('admin/menu/message.th3') }}:</span>
				<input name="menu_name" type="text" class="form-control" id="menu_name" value="{{ $menu[0]->menu_name }}">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">{{ trans('admin/menu/message.th5') }}:</span>
				<textarea name="description" class="form-control" rows="5" id="description">{{ $menu[0]->description }}</textarea>
			</div>
		</div>
		<button type="submit" class="btn btn-default">{{ trans('message.submit') }}</button>
		<input name="mid" type="hidden" class="form-control" id="mid" value="{{ $id }}">
	</form>
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
