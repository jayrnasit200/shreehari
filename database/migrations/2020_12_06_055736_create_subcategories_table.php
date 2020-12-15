<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('subcategories');
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->integer('categories_id');
            $table->string('name');
            $table->text('image')->nullable();
            // $table->timestamps();
            

            $table->foreign('categories_id')->references('id')->on('Categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
