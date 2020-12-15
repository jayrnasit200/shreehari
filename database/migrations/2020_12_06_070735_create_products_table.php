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
            $table->string('model_number')->unique();
            $table->string('name');
            $table->integer('categories_id');
            $table->integer('subcategories_id');
            $table->text('shot_description');
            $table->text('description');
            $table->text('image');
            $table->string('price');
            $table->string('discount');
            $table->string('discount_price');
            $table->string('sell_price');
            $table->integer('type_id');
            $table->integer('sub_types')->nullable();
            $table->enum('status', ['enable', 'disable'])->default('enable');
            $table->integer('vedor_id');
            $table->enum('verify', ['Yes', 'No'])->default('No');

            $table->foreign('vedor_id')->references('id')->on('users');
            $table->foreign('categories_id')->references('id')->on('Categories');
            $table->foreign('subcategories_id')->references('id')->on('subcategories');
            $table->foreign('type_id')->references('id')->on('product_types');
            $table->foreign('sub_types')->references('id')->on('product_sub_types');

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
