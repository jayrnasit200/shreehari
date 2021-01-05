<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_configs', function (Blueprint $table) {
            $table->id();
             $table->text('option');
            $table->text('value');
        });

        $data = [
            ['option'=>'site_name','value'=>'sheehari'],
            ['option'=>'from_email_address','value'=>'sheehari2020@gmail.com'],
            ['option'=>'copyright_text','value'=>'Copyright © sheehari services. All rights reserved.'],
        ];
        DB::table('web_configs')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_configs');
    }
}
