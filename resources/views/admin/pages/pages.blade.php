@extends('layouts.app_without_sidebar')

@section('adminmenu')
    @include('admin.admin_menu');
@endsection

@section('header')
    @include('main.header');
@endsection

@section('content')
<div class="col-lg-12">
    <h2>{{ trans('admin/page/message.title') }}</h2>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center select-all"><input type="checkbox" title="checkbox"></th>
                <th class="text-center">{{ trans('admin/page/message.th3') }}</th>
                <th class="text-center">{{ trans('admin/page/message.th4') }}</th>
                <th class="text-center">{{ trans('admin/page/message.th5') }}</th>
                <th class="text-center">{{ trans('admin/page/message.th6') }}</th>
                <th class="text-center">{{ trans('admin/page/message.th7') }}</th>
            </tr>
        </thead>
    @foreach ($pages as $page)
        <tr>
            <td class="text-center">{{ $page->nid }}</td>
            <td class="text-center"><input id="edit-page-{{ $page->nid }}" name="nodes[{{ $page->nid }}]" value="{{ $page->nid }}" class="form-checkbox" type="checkbox"></td>
            <td class="text-center"><a href="{{ url('page/'.$page->nid) }}">{{ $page->title }}</a></td>
            <td class="text-center">admin</td>
            <td class="text-center">{{ ($page->status ? trans('admin/page/message.published') : trans('admin/page/message.unpublished')) }}</td>
            <td class="text-center">{{ $page->created_at }}</td>
            <td class="text-center"><a href="{{ url('admin/page/edit/'.$page->nid) }}">{{ trans('message.edit') }}</a><a style="margin-left:10px;" href="{{ url('admin/page/delete/'.$page->nid) }}">{{ trans('message.delete') }}</a></td>
        </tr>
    @endforeach
    </table>
    {{ $pages->links() }}
    <a class="btn btn-default" href="{{ url('admin/page/create') }}" role="button">{{ trans('admin/page/message.create_new') }}</a>
</div>
@endsection

@section('footer')
    @include('main.footer');
@endsection
