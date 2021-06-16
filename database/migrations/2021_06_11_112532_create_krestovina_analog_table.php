<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKrestovinaAnalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krestovina_analog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('krestovina_id')->constrained('krestoviny')->cascadeOnDelete();
            $table->foreignId('analog_id')->constrained('analog')->cascadeOnDelete();
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
        Schema::dropIfExists('krestovina_analog');
    }
}
