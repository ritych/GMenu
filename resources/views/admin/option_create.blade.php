@extends('layouts.app_without_sidebar')

@section('adminmenu')
	@include('admin.admin_menu');
@endsection

@section('content')
<div class="col-lg-12">
	@include('common.errors')
	<h2>Создать опцию</h2>
	<form action="{{ url('admin/option/create/submit') }}" method="POST" >
		{{ csrf_field() }}
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Название:</span>
				<input name="title" type="text" class="form-control" id="title">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Атрибут:</span>
				<select name="attr" id="attr" class="form-control">
					@foreach ($attributes as $attribute)
					<option value="{{ $attribute->aid }}">{{ $attribute->name }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-default">Создать</button>
	</form>
</div>
@endsection

@section('footer')
	@include('main.footer');
@endsection
