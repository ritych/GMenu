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
    <h2>{{ trans('admin/menu/message.title') }}</h2>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">{{ trans('admin/menu/message.th2') }}</th>
                <th class="text-center">{{ trans('admin/menu/message.th3') }}</th>
                <th class="text-center">{{ trans('admin/menu/message.th4') }}</th>
                <th class="text-center">{{ trans('admin/menu/message.th5') }}</th>
                <th class="text-center">{{ trans('admin/menu/message.th6') }}</th>
            </tr>
        </thead>
    @foreach ($menus as $menu)
        <tr>
            <td class="text-center">{{ $menu->mid }}</td>
            <td class="text-center">{{ $menu->title }}</td>
            <td class="text-center">{{ $menu->menu_name }}</td>
            <td class="text-center">{{ $menu->url }}</td>
            <td class="text-center">{{ $menu->description }}</td>
            <td class="text-center"><a href="{{ url('admin/menu/edit/'.$menu->mid) }}">{{ trans('message.edit') }}</a><a style="margin-left:10px;" href="{{ url('admin/menu/delete/'.$menu->mid) }}">{{ trans('message.delete') }}</a></td>
            
        </tr>
    @endforeach
    </table>
    <a class="btn btn-default" href="{{ url('admin/menu/create') }}" role="button">{{ trans('admin/menu/message.create_new') }}</a>
</div>
@endsection

@section('footer')
    @include('main.footer');
@endsection
