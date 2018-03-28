@extends('layouts.app_without_sidebar')

@section('adminmenu')
    @include('admin.admin_menu');
@endsection

@section('header')
    @include('main.header');
@endsection

@section('content')
<div class="col-lg-12">
    <h2>{{ trans('admin/product/message.title') }}</h2>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center select-all"><input type="checkbox"></th>
                <th class="text-center">{{ trans('admin/product/message.th3') }}</th>
                <th class="text-center">{{ trans('admin/product/message.th4') }}</th>
                <th class="text-center">{{ trans('admin/product/message.th5') }}</th>
                <th class="text-center">{{ trans('admin/product/message.th6') }}</th>
                <th class="text-center">{{ trans('admin/product/message.th7') }}</th>
                <th class="text-center">{{ trans('admin/product/message.th8') }}</th>
            </tr>
        </thead>
    @foreach ($products as $product)
        <tr>
            <td class="text-center">{{ $product->nid }}</td>
            <td class="text-center"><input id="edit-product-{{ $product->nid }}" name="nodes[{{ $product->nid }}]" value="{{ $product->nid }}" class="form-checkbox" type="checkbox"></td>
            <td class="text-center"><a href="{{ url('product/'.$product->nid) }}">{{ $product->title }}</a></td>
            <td class="text-center">admin</td>
            <td class="text-center">{{ ($product->status ? trans('admin/page/message.published') : trans('admin/page/message.unpublished')) }}</td>
            <td class="text-center">{{ $product->created_at }}</td>
            <td class="text-center">link to seller</td>
            <td class="text-center"><a href="{{ url('admin/product/edit/'.$product->nid) }}">{{ trans('message.edit') }}</a><a style="margin-left:10px;" href="{{ url('admin/product/delete/'.$product->nid) }}">{{ trans('message.delete') }}</a></td>
        </tr>
    @endforeach
    </table>
    {{ $products->links() }}
    <a class="btn btn-default" href="{{ url('admin/product/create') }}" role="button">{{ trans('admin/product/message.create_new') }}</a>
</div>
@endsection

@section('footer')
    @include('main.footer');
@endsection
