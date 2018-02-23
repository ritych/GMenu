@include('admin.admin_menu')
<div class="container"><div class="row">
	<div class="col-lg-2">
		<div class="logo"><a href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}" alt="logo" /></a></div>
	</div>
	<div class="col-lg-2">
		<div class="phone">
			<span class="phone_number">+7 (xxx) xxx-xx-xx</span>
			<a href="/">позвоните мне</a>
		</div>
	</div>
	<div class="col-lg-2">
		<div class="city">
			<select class="form-control">
				<option>Москва</option>
				<option>Москва</option>
				<option>Москва</option>
			</select>
		</div>
	</div>
	<div class="col-lg-3">	
		<div class="search">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Укажите что хотите найти">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</div>
	</div>
	<div class="col-lg-1">
		<div class="cart"><i class="fa fa-heart"></i><i class="fa fa-shopping-cart"></i></div>
	</div>
	<div class="col-lg-2">	
		<div class="login">
			@if (Route::has('login'))
				<div class="top-right links">
					@auth
						<a href="{{ url('/profile') }}">Профиль</a>
						<a href="{{ url('/logout') }}">Выход</a>
					@else
						<a href="{{ route('login') }}">Вход</a>
						<a href="{{ route('register') }}">Регистрация</a>
					@endauth
				</div>
			@endif
		</div>
	</div>
</div></div>

