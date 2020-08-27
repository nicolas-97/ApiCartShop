<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('cart_id')->references('id')->on('carts');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products__carts');
    }
}
