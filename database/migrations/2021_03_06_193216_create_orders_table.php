<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('invoice_number');
            $table->integer('products_id');
            $table->integer('user_addresses_id');
            $table->integer('vendor_id');
            $table->integer('payment_id');
            $table->enum('payment',['padding','success']);
            $table->text('comments_about_your_order')->nullable();
            $table->enum('status',['padding','success'])->default('padding');
            $table->enum('vendor_notification',['padding','success'])->default('padding');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('products_id')->references('id')->on('products');
            $table->foreign('user_addresses_id')->references('id')->on('user_addresses');
            $table->foreign('vendor_id')->references('id')->on('users');
            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
