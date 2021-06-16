<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKrestovinyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krestoviny', function (Blueprint $table) {
            $table->id();
            $table->string('tiporazmer', 200);
            $table->string('catalog_num');
            $table->string('size');
            $table->string('stopornoe_kolco');
            $table->unsignedBigInteger('total_count')->nullable();
            $table->unsignedBigInteger('min_count')->nullable();
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
        Schema::dropIfExists('krestoviny');
    }
}
