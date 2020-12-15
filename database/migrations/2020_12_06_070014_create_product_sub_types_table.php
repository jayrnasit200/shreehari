<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSubTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sub_types', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('type_id');
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('size_type')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_id')->references('id')->on('product_types');
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
        Schema::dropIfExists('product_sub_types');
    }
}
