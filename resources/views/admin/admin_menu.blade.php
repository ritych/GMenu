@if (Route::has('login'))
	@auth
<section class="admin_section">	
<div class="container">
	<ul class="admin-menu sf-menu">
		<li>
			<a href="{{ url('/admin/content') }}" >Содержимое</a>
			<ul>
				<li>
					<a href="{{ url('/admin/page') }}">Страницы</a>
					<ul>
						<li><a href="{{ url('/admin/page/create') }}">Создать</a></li>
					</ul>
				</li>
				<li>
					<a href="{{ url('/admin/product') }}">Товары</a>
					<ul>
						<li><a href="{{ url('/admin/product/create') }}">Создать</a></li>
					</ul>
				</li>
				<li>
					<a href="{{ url('/admin/menu') }}">Меню</a>
					<ul>
						<li><a href="{{ url('/admin/menu/create') }}">Создать</a></li>
					</ul>
				</li>
				<li>
					<a href="{{ url('/admin/options') }}">Опции</a>
					<ul>
						<li><a href="{{ url('/admin/option/create') }}">Создать</a></li>
					</ul>
				</li>
				<li>
					<a href="{{ url('/admin/attributes') }}">Аттрибуты</a>
					<ul>
						<li><a href="{{ url('/admin/attribute/create') }}">Создать</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<a href="/">Магазины</a>
			<ul>
				<li><a href="/">Создать</a></li>
				<li><a href="/">Список</a></li>
			</ul>
		</li>
		<li>
			<a href="/">Пользователи</a>
			<ul>
				<li><a href="/">Создать</a></li>
				<li><a href="/">Список</a></li>
			</ul>
		</li>
		<li>
			<a href="/">Заказы</a>
			<ul>
				<li><a href="/">Список</a></li>
			</ul>
		</li>
		<li>
			<a href="/">Сообщения</a>
			<ul>
				<li><a href="/">Создать</a></li>
				<li><a href="/">Список</a></li>
			</ul>
		</li>
		<li>
			<a href="/">Реклама</a>
			<ul>
				<li><a href="/">Создать</a></li>
				<li><a href="/">Список</a></li>
			</ul>
		</li>
		<li>
			<a href="/">Настройки</a>
			<ul>
				<li><a href="/">Создать</a></li>
				<li><a href="/">Список</a></li>
			</ul>
		</li>
		<li><a href="{{ url('/logout') }}">Выход</a></li>
	</ul>
	<script>
	jQuery(document).ready(function(){
		jQuery('ul.admin-menu').superfish({
			speed: 'fast'
		});
	});
	</script>
</div>	
</section>	
	@endauth	
@endif

