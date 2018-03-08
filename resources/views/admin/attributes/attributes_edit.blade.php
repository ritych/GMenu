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
	<h2>{{ trans('admin/attribute/message.edit_attr') }}</h2>
	<form action="{{ url('admin/attribute/edit/submit') }}" method="POST" >
    {{ csrf_field() }}
    <div class="form-group">
    	<div class="input-group">
        <span class="input-group-addon">{{ trans('admin/attribute/message.th2') }}:</span>
        <input name="title" type="text" class="form-control" id="title" value="{{ $attribute[0]->name }}">
    	</div>
    </div>
    <div class="form-group">
    	<div class="input-group">
        <span class="input-group-addon">{{ trans('admin/attribute/message.th3') }}:</span>
        <textarea name="description" class="form-control" rows="5" id="description">{{ $attribute[0]->description }}</textarea>
    	</div>
    </div> 
    
    <button type="submit" class="btn btn-default">{{ trans('message.edit') }}</button>
    <input name="aid" type="hidden" class="form-control" id="aid" value="{{ $id }}">
	</form>
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
