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
		
		Menu::create(['title' => 'Каталог', 'description' => '', 'menu_name' => 'main_menu', 'weight' => '0', 'parent' => '0', 'url' => 'front']);
		Menu::create(['title' => 'Услуги', 'description' => '', 'menu_name' => 'main_menu', 'weight' => '0', 'parent' => '0', 'url' => 'front']);
		Menu::create(['title' => 'Контакты', 'description' => '', 'menu_name' => 'main_menu', 'weight' => '0', 'parent' => '0', 'url' => 'front']);
		Menu::create(['title' => 'О проекте', 'description' => '', 'menu_name' => 'main_menu', 'weight' => '0', 'parent' => '0', 'url' => 'front']);
		
		Node::create(['nid' => '1', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '1', 'category' => '1', 'articul' => 'art12345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => '1']);
		Node::create(['nid' => '2', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '2', 'category' => '1', 'articul' => 'art22345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => '1']);
		Node::create(['nid' => '3', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '3', 'category' => '1', 'articul' => 'art32345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => '1']);
		Node::create(['nid' => '4', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '4', 'category' => '1', 'articul' => 'art42345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => '1']);
		Node::create(['nid' => '5', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '5', 'category' => '1', 'articul' => 'art52345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => '1']);
		Node::create(['nid' => '6', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '6', 'category' => '1', 'articul' => 'art62345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => '1']);
		Node::create(['nid' => '7', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '7', 'category' => '1', 'articul' => 'art72345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => '1']);
		Node::create(['nid' => '8', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '8', 'category' => '1', 'articul' => 'art82345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => '1']);
		Node::create(['nid' => '9', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '9', 'category' => '1', 'articul' => 'art92345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => '1']);
		Node::create(['nid' => '10', 'title' => 'Test product', 'type' => 'product', 'uid' => '1', 'body' => '', 'status' => '1']);
		Product::create(['nid' => '10', 'category' => '1', 'articul' => 'art102345', 'sell_price' => '1500', 'old_price' => '1750', 'sid' => '1', 'images' => '1', 'description' => '1']);
		
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
