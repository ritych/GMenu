<?php
use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
use App\Menu;
use App\ProductOption;
use App\ProductAttribute;
use App\Node;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
		Category::create(['title' => 'Кольца', 'description' => '', 'weight' => '0', 'parent' => '0']);
		Category::create(['title' => 'Серьги', 'description' => '', 'weight' => '0', 'parent' => '0']);
		Category::create(['title' => 'Браслеты', 'description' => '', 'weight' => '0', 'parent' => '0']);
		Category::create(['title' => 'Цепи', 'description' => '', 'weight' => '0', 'parent' => '0']);
		Category::create(['title' => 'Броши', 'description' => '', 'weight' => '0', 'parent' => '0']);
		Category::create(['title' => 'Подвески и кулоны', 'description' => '', 'weight' => '0', 'parent' => '0']);
		Category::create(['title' => 'Колье', 'description' => '', 'weight' => '0', 'parent' => '0']);
		Category::create(['title' => 'Часы', 'description' => '', 'weight' => '0', 'parent' => '0']);
		
		Menu::create(['title' => 'Каталог', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'menu_name' => 'main_menu', 'weight' => '0', 'parent' => '0', 'url' => 'catalog']);
		Menu::create(['title' => 'Услуги', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'menu_name' => 'main_menu', 'weight' => '0', 'parent' => '0', 'url' => 'page/16']);
		Menu::create(['title' => 'Контакты', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'menu_name' => 'main_menu', 'weight' => '0', 'parent' => '0', 'url' => 'page/17']);
		Menu::create(['title' => 'О проекте', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'menu_name' => 'main_menu', 'weight' => '0', 'parent' => '0', 'url' => 'page/18']);
		
		Node::create(['nid' => '1', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '1', 'category' => '1', 'sku' => 'art12345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => 'Роскошное кольцо, выполненное из белого золота с бриллиантами, входит в коллекцию "Зеркальный блеск". Благодаря оригинальному креплению, центральный камень может свободно вращаться относительно своей оси, беспрерывно сверкая.']);
		Node::create(['nid' => '2', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '2', 'category' => '2', 'sku' => 'art22345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => 'Роскошное кольцо, выполненное из белого золота с бриллиантами, входит в коллекцию "Зеркальный блеск". Благодаря оригинальному креплению, центральный камень может свободно вращаться относительно своей оси, беспрерывно сверкая.']);
		Node::create(['nid' => '3', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '3', 'category' => '2', 'sku' => 'art32345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => 'Роскошное кольцо, выполненное из белого золота с бриллиантами, входит в коллекцию "Зеркальный блеск". Благодаря оригинальному креплению, центральный камень может свободно вращаться относительно своей оси, беспрерывно сверкая.']);
		Node::create(['nid' => '4', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '4', 'category' => '1', 'sku' => 'art42345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => 'Роскошное кольцо, выполненное из белого золота с бриллиантами, входит в коллекцию "Зеркальный блеск". Благодаря оригинальному креплению, центральный камень может свободно вращаться относительно своей оси, беспрерывно сверкая.']);
		Node::create(['nid' => '5', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '5', 'category' => '1', 'sku' => 'art52345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => 'Роскошное кольцо, выполненное из белого золота с бриллиантами, входит в коллекцию "Зеркальный блеск". Благодаря оригинальному креплению, центральный камень может свободно вращаться относительно своей оси, беспрерывно сверкая.']);
		Node::create(['nid' => '6', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '6', 'category' => '1', 'sku' => 'art62345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => 'Роскошное кольцо, выполненное из белого золота с бриллиантами, входит в коллекцию "Зеркальный блеск". Благодаря оригинальному креплению, центральный камень может свободно вращаться относительно своей оси, беспрерывно сверкая.']);
		Node::create(['nid' => '7', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '7', 'category' => '1', 'sku' => 'art72345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => 'Роскошное кольцо, выполненное из белого золота с бриллиантами, входит в коллекцию "Зеркальный блеск". Благодаря оригинальному креплению, центральный камень может свободно вращаться относительно своей оси, беспрерывно сверкая.']);
		Node::create(['nid' => '8', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '8', 'category' => '1', 'sku' => 'art82345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => 'Роскошное кольцо, выполненное из белого золота с бриллиантами, входит в коллекцию "Зеркальный блеск". Благодаря оригинальному креплению, центральный камень может свободно вращаться относительно своей оси, беспрерывно сверкая.']);
		Node::create(['nid' => '9', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '9', 'category' => '1', 'sku' => 'art92345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => 'Роскошное кольцо, выполненное из белого золота с бриллиантами, входит в коллекцию "Зеркальный блеск". Благодаря оригинальному креплению, центральный камень может свободно вращаться относительно своей оси, беспрерывно сверкая.']);
		Node::create(['nid' => '10', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '10', 'category' => '1', 'sku' => 'art102345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => 'Роскошное кольцо, выполненное из белого золота с бриллиантами, входит в коллекцию "Зеркальный блеск". Благодаря оригинальному креплению, центральный камень может свободно вращаться относительно своей оси, беспрерывно сверкая.']);
		
		
		
		Node::create(['nid' => '11', 'title' => 'Test page 1', 'type' => 'page', 'uid' => '1', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, metus et suscipit molestie, diam sapien consequat odio, nec gravida diam lectus in erat. Nunc suscipit lacus non ultrices lacinia. Vestibulum bibendum sem enim, at accumsan mauris imperdiet at. Proin pretium risus id fermentum pharetra. Nullam hendrerit viverra sapien, at hendrerit erat scelerisque ac. Praesent at mollis mi, eu finibus justo. Pellentesque imperdiet cursus ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'status' => '1']);
		Node::create(['nid' => '12', 'title' => 'Test page 2', 'type' => 'page', 'uid' => '1', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, metus et suscipit molestie, diam sapien consequat odio, nec gravida diam lectus in erat. Nunc suscipit lacus non ultrices lacinia. Vestibulum bibendum sem enim, at accumsan mauris imperdiet at. Proin pretium risus id fermentum pharetra. Nullam hendrerit viverra sapien, at hendrerit erat scelerisque ac. Praesent at mollis mi, eu finibus justo. Pellentesque imperdiet cursus ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'status' => '1']);
		Node::create(['nid' => '13', 'title' => 'Test page 3', 'type' => 'page', 'uid' => '1', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, metus et suscipit molestie, diam sapien consequat odio, nec gravida diam lectus in erat. Nunc suscipit lacus non ultrices lacinia. Vestibulum bibendum sem enim, at accumsan mauris imperdiet at. Proin pretium risus id fermentum pharetra. Nullam hendrerit viverra sapien, at hendrerit erat scelerisque ac. Praesent at mollis mi, eu finibus justo. Pellentesque imperdiet cursus ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'status' => '1']);
		Node::create(['nid' => '14', 'title' => 'Test page 4', 'type' => 'page', 'uid' => '1', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, metus et suscipit molestie, diam sapien consequat odio, nec gravida diam lectus in erat. Nunc suscipit lacus non ultrices lacinia. Vestibulum bibendum sem enim, at accumsan mauris imperdiet at. Proin pretium risus id fermentum pharetra. Nullam hendrerit viverra sapien, at hendrerit erat scelerisque ac. Praesent at mollis mi, eu finibus justo. Pellentesque imperdiet cursus ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'status' => '1']);
		Node::create(['nid' => '15', 'title' => 'Test page 5', 'type' => 'page', 'uid' => '1', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, metus et suscipit molestie, diam sapien consequat odio, nec gravida diam lectus in erat. Nunc suscipit lacus non ultrices lacinia. Vestibulum bibendum sem enim, at accumsan mauris imperdiet at. Proin pretium risus id fermentum pharetra. Nullam hendrerit viverra sapien, at hendrerit erat scelerisque ac. Praesent at mollis mi, eu finibus justo. Pellentesque imperdiet cursus ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'status' => '0']);
		
		Node::create(['nid' => '16', 'title' => 'Услуги', 'type' => 'page', 'uid' => '1', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, metus et suscipit molestie, diam sapien consequat odio, nec gravida diam lectus in erat. Nunc suscipit lacus non ultrices lacinia. Vestibulum bibendum sem enim, at accumsan mauris imperdiet at. Proin pretium risus id fermentum pharetra. Nullam hendrerit viverra sapien, at hendrerit erat scelerisque ac. Praesent at mollis mi, eu finibus justo. Pellentesque imperdiet cursus ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'status' => '1']);
		Node::create(['nid' => '17', 'title' => 'Контакты', 'type' => 'page', 'uid' => '1', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, metus et suscipit molestie, diam sapien consequat odio, nec gravida diam lectus in erat. Nunc suscipit lacus non ultrices lacinia. Vestibulum bibendum sem enim, at accumsan mauris imperdiet at. Proin pretium risus id fermentum pharetra. Nullam hendrerit viverra sapien, at hendrerit erat scelerisque ac. Praesent at mollis mi, eu finibus justo. Pellentesque imperdiet cursus ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'status' => '1']);
		Node::create(['nid' => '18', 'title' => 'О проекте', 'type' => 'page', 'uid' => '1', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, metus et suscipit molestie, diam sapien consequat odio, nec gravida diam lectus in erat. Nunc suscipit lacus non ultrices lacinia. Vestibulum bibendum sem enim, at accumsan mauris imperdiet at. Proin pretium risus id fermentum pharetra. Nullam hendrerit viverra sapien, at hendrerit erat scelerisque ac. Praesent at mollis mi, eu finibus justo. Pellentesque imperdiet cursus ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'status' => '1']);
		
		
		ProductAttribute::create(['name' => 'Размер']);
		ProductAttribute::create(['name' => 'Пол']);
		ProductAttribute::create(['name' => 'Металл']);
		ProductAttribute::create(['name' => 'Цвет']);
		ProductAttribute::create(['name' => 'Вставки']);
		
		ProductOption::create(['aid' => '1', 'name' => '13.0']);
		ProductOption::create(['aid' => '1', 'name' => '13.5']);
		ProductOption::create(['aid' => '1', 'name' => '14.0']);
		ProductOption::create(['aid' => '1', 'name' => '14.5']);
		ProductOption::create(['aid' => '1', 'name' => '15.0']);
		ProductOption::create(['aid' => '1', 'name' => '15.5']);
		ProductOption::create(['aid' => '1', 'name' => '16.0']);
		ProductOption::create(['aid' => '1', 'name' => '16.5']);
		ProductOption::create(['aid' => '1', 'name' => '17.0']);
		ProductOption::create(['aid' => '1', 'name' => '17.5']);
		ProductOption::create(['aid' => '1', 'name' => '18.0']);
		ProductOption::create(['aid' => '1', 'name' => '18.5']);
		ProductOption::create(['aid' => '1', 'name' => '19.0']);
		ProductOption::create(['aid' => '1', 'name' => '19.5']);
		
		ProductOption::create(['aid' => '2', 'name' => 'Мужской']);
		ProductOption::create(['aid' => '2', 'name' => 'Женский']);
		ProductOption::create(['aid' => '2', 'name' => 'Детский']);
		
		ProductOption::create(['aid' => '3', 'name' => 'Золото']);
		ProductOption::create(['aid' => '3', 'name' => 'Платина']);
		ProductOption::create(['aid' => '3', 'name' => 'Серебро']);
		
		ProductOption::create(['aid' => '4', 'name' => 'Белый']);
		ProductOption::create(['aid' => '4', 'name' => 'Позолоченный']);
		ProductOption::create(['aid' => '4', 'name' => 'Чернёный']);
		ProductOption::create(['aid' => '4', 'name' => 'Золочение']);
		
		ProductOption::create(['aid' => '5', 'name' => 'Агат']);
		ProductOption::create(['aid' => '5', 'name' => 'Авантюрин']);
		ProductOption::create(['aid' => '5', 'name' => 'Бриллиант']);
		ProductOption::create(['aid' => '5', 'name' => 'Аметист']);
		
		
    }
}
