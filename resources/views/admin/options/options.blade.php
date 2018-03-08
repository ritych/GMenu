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
    <h2>{{ trans('admin/option/message.title') }}</h2>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">{{ trans('admin/option/message.th2') }}</th>
                <th class="text-center">{{ trans('admin/option/message.th3') }}</th>
                <th class="text-center">{{ trans('admin/option/message.th4') }}</th>
            </tr>
        </thead>
    @foreach ($options as $option)
        <tr>
            <td class="text-center">{{ $option->oid }}</td>
            <td class="text-center">{{ $option->name }}</td>
            <td class="text-center">{{ $option->aname }}</td>
            <td class="text-center"><a href="{{ url('admin/option/edit/'.$option->oid) }}">{{ trans('message.edit') }}</a><a style="margin-left:10px;" href="{{ url('admin/option/delete/'.$option->oid) }}">{{ trans('message.delete') }}</a></td>
            
        </tr>
    @endforeach
    </table>
    {{ $options->links() }}
    <a class="btn btn-default" href="{{ url('admin/option/create') }}" role="button">{{ trans('admin/option/message.create_new') }}</a>
</div>
@endsection

@section('footer')
    @include('main.footer');
@endsection
