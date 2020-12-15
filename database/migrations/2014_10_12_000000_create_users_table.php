<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', ['1', '2','3'])->default('3');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        // Role
        // '1'='admin';
        // '2'='vendor';
        // '3'='customar';
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@shreehari.net',
                'role'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'vendor',
               'email'=>'vendor@shreehari.net',
                'role'=>'2',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@shreehari.net',
                'role'=>'3',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            
        DB::table('users')->insert($value);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
