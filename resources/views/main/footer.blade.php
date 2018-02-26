<div class="container">
	<div class="row">
		<div class="col-lg-2"><a href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}" alt="logo" /></a></div>
		<div class="col-lg-10">
			<ul class="nav navbar-nav">
				@foreach (\App\Menu::where('menu_name', 'main_menu')->get() as $link) 
				<li><a href="{{ url($link->url) }}" title="{{ $link->title }}">{{ $link->title }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>

