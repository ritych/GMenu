@extends('layouts.app')

@section('adminmenu')
    @include('admin.admin_menu');
@endsection

@section('header')
    @include('main.header');
@endsection

@section('advrt')
<div class="container">
    <img src="{{asset('images/advrt.png')}}" alt="logo" />
</div>
@endsection

@section('menu')
    @include('main.menu');
@endsection

@section('content')
<div class="catalog_grid">
    <div class="catalog_filter">
        <div class="form-group">
            <label class="control-label" for="select_sorting">{{ trans('message.sorting') }}</label>
            <select class="form-control" id="select_sorting">
                <option>{{ trans('message.sorting_price') }}</option>
                <option>{{ trans('message.sorting_title') }}</option>
            </select>
        </div>    
    </div>
    <ul class="catalog_products">
        @foreach ($products as $product) 
            <li>
                <img src="{{asset('images/logo.png')}}" alt="logo" />
                <div class="catalog_product_title"><a href="{{url('/product/'.$product->nid)}}">{{ $product->title }}</a></div>
                <div class="catalog_product_sell_price">{{$product->sell_price }}</div>
                <div class="catalog_product_tocart"><button type="button" class="btn btn-default">{{ trans('message.submit') }}</button></div>
            </li>
        @endforeach
        <div class="clear"></div>
    </ul>
	{{ $products->links() }}
</div>    
@endsection

@section('sidebar')
    <h3 class="block_title">{{ trans('message.filter_category') }}</h3>
    <ul class="nav">
        @foreach (\App\Category::all() as $link) 
            <li><a href="{{ url('/catalog/'.$link->cid) }}" title="{{ $link->title }}">{{ $link->title }}</a></li>
        @endforeach
    </ul>
    <!--*********************-->
    <h3 class="block_title">{{ trans('message.filter_price') }}</h3>
    <div class="row">
        <div class="col-lg-6"><input type="text" class="form-control" placeholder="От"></div>
        <div class="col-lg-6"><input type="text" class="form-control" placeholder="До"></div>
    </div>
    <!--*********************-->
    <h3 class="block_title">{{ trans('message.filter_size') }}</h3>
    <ul class="attributes_options">
		@foreach ($options as $option)
            @if ($option->aid==1)
                <li>{{ $option->name }}</li>
            @endif
        @endforeach
    </ul>
    <!--*********************-->
    <h3 class="block_title">{{ trans('message.filter_gender') }}</h3>
        <ul class="attributes_options">
        @foreach ($options as $option) 
            @if ($option->aid==2)
                <li>{{ $option->name }}</li>
            @endif
        @endforeach
        </ul>
    <!--*********************-->
    <h3 class="block_title">{{ trans('message.filter_metal') }}</h3>
        <ul class="attributes_options">
        @foreach ($options as $option) 
            @if ($option->aid==3)
                <li>{{ $option->name }}</li>
            @endif
        @endforeach
        </ul>
    <!--*********************-->
    <h3 class="block_title">{{ trans('message.filter_color') }}</h3>
        <ul class="attributes_options">
        @foreach ($options as $option) 
            @if ($option->aid==4)
                <li>{{ $option->name }}</li>
            @endif
        @endforeach
        </ul>
    <!--*********************-->
    <h3 class="block_title">{{ trans('message.filter_composition') }}</h3>
        <ul class="attributes_options">
        @foreach ($options as $option) 
            @if ($option->aid==5)
                <li>{{ $option->name }}</li>
            @endif
        @endforeach
        </ul>
@endsection

@section('footer')
    @include('main.footer');
@endsection
