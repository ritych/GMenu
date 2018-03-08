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
	<h2>{{ trans('admin/attribute/message.title') }}</h2>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr class="info text-center">
				<th class="text-center">#</th>
				<th class="text-center">{{ trans('admin/attribute/message.th2') }}</th>
				<th class="text-center">{{ trans('admin/attribute/message.th3') }}</th>
				<th class="text-center">{{ trans('admin/attribute/message.th4') }}</th>
			</tr>
		</thead>
	@foreach ($attributes as $attribute)
		<tr>
			<td class="text-center">{{ $attribute->aid }}</td>
			<td class="text-center">{{ $attribute->name }}</td>
			<td class="text-center">{{ $attribute->description }}</td>
			<td class="text-center"><a href="{{ url('admin/attribute/edit/'.$attribute->aid) }}">{{ trans('message.edit') }}</a><a style="margin-left:10px;" href="{{ url('admin/attribute/delete/'.$attribute->aid) }}">{{ trans('message.delete') }}</a></td>
			
		</tr>
	@endforeach
	</table>
	{{ $attributes->links() }}
	<a class="btn btn-default" href="{{ url('admin/attribute/create') }}" role="button">{{ trans('admin/attribute/message.create_new') }}</a>
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
