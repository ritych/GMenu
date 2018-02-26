<nav>
<div class="container">
	<ul class="nav nav-justified">
		@foreach (\App\Category::all() as $link) 
			<li><a href="{{ url('/catalog/'.$link->cid) }}" title="{{ $link->title }}">{{ $link->title }}</a></li>
		@endforeach
	</ul>
</div>
</nav>