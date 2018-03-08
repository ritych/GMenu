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
    <h2>{{ trans('admin/category/message.title') }}</h2>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">{{ trans('admin/category/message.th2') }}</th>
                <th class="text-center">{{ trans('admin/category/message.th3') }}</th>
                <th class="text-center">{{ trans('admin/category/message.th4') }}</th>
                <th class="text-center">{{ trans('admin/category/message.th5') }}</th>
                <th class="text-center">{{ trans('admin/category/message.th6') }}</th>
            </tr>
        </thead>
    @foreach ($categories as $category)
        <tr>
            <td class="text-center">{{ $category->cid }}</td>
            <td class="text-center">{{ $category->title }}</td>
            <td class="text-center">{{ $category->description }}</td>
            <td class="text-center">{{ $category->weight }}</td>
            <td class="text-center">{{ $category->parent }}</td>
            <td class="text-center"><a href="{{ url('admin/category/edit/'.$category->cid) }}">{{ trans('message.edit') }}</a><a style="margin-left:10px;" href="{{ url('admin/category/delete/'.$category->cid) }}">{{ trans('message.delete') }}</a></td>
        </tr>
    @endforeach
    </table>
    {{ $categories->links() }}
    <a class="btn btn-default" href="{{ url('admin/category/create') }}" role="button">{{ trans('admin/category/message.create_new') }}</a>
</div>
@endsection

@section('footer')
    @include('main.footer');
@endsection
