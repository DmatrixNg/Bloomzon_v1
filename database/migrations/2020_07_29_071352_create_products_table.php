<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->longText('product_description');
            $table->string('product_type')->default('seller');
            $table->string('product_meta')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('sub_category_id')->unsigned()->nullable();
            $table->string('avatars')->default('["avatar.png"]');
            $table->integer('product_price');
            $table->string('product_color')->nullable();
            $table->integer('minimum_order_quantity')->nullable();
            $table->integer('product_sales_price')->nullable();
            $table->integer('stock_level')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('product_currency')->nullable();
            $table->boolean('is_bloomzon_product')->default(false);
            $table->integer('seller_id')->unsigned();
            $table->integer('bought_count')->nullable();
            $table->timestamps();
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
