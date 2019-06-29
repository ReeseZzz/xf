<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ay_cases', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('business_id')->default(0);
            $table->string('title');
            $table->string('address');
            $table->string('product');
            $table->string('image');
            $table->text('content');
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
        Schema::dropIfExists('ay_cases');
    }
}
