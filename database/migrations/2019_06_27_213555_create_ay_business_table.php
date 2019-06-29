<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ay_business', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('business_id')->default(0);
            $table->string('title');
            $table->text('content');
            $table->tinyInteger('sort_num');
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
        Schema::dropIfExists('ay_business');
    }
}
