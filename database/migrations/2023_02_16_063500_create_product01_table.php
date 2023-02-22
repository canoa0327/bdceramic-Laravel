<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product01', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detail_idx', 10);
            $table->string('data1', 10);
            $table->string('data2', 10);
            $table->string('data3', 10);
            $table->string('data4', 10);
            $table->string('data5', 10);
            $table->string('title', 64);
            $table->longText('contents');
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
        Schema::dropIfExists('product01');
    }
}
