<?php
use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
use App\Menu;
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
		
    }
}
