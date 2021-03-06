<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('nid');
			$table->string('category');//Категория
			$table->string('sku')->unique();//Артикул
			$table->unsignedInteger('sell_price');//Цена продажи
			$table->unsignedInteger('old_price');//Старая цена
			$table->integer('sid');//Shop ID 
			$table->string('images');//serialize images
			$table->longText('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
