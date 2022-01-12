<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->bigIncrements('c_id'); #auto increment field
            $table->string('c_title');#string field
            $table->longText('c_description');#enum field with options all countries in config/_countryesArray.php
            $table->string('c_thumb');#float field
            $table->float('c_price');
            $table->string('c_series');
            $table->date('c_saledate');
            $table->string('c_type');
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
        Schema::dropIfExists('comics');
    }
}
