<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperherosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superheros', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fullName');
            $table->integer('strength');
            $table->integer('speed');
            $table->integer('durability');
            $table->integer('power');
            $table->integer('combat');
            $table->string('race');
            $table->string('height/0');
            $table->string('height/1');
            $table->string('weight/0');
            $table->string('weight/1');
            $table->string('eyeColor');
            $table->string('hairColor');
            $table->string('publisher');
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
        Schema::dropIfExists('superheros');
    }
}
