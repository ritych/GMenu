<div class="container">
	<div class="row">
		<div class="col-lg-2"><a href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}" alt="logo" /></a></div>
		<div class="col-lg-10">
			<ul class="nav navbar-nav">
				@foreach ($menu as $link) 
				<li><a href="{{ $link->url }}" title="{{ $link->title }}">{{ $link->title }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>

