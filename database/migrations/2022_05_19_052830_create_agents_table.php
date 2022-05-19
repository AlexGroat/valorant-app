<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('bio');
            $table->unsignedBigInteger('role_id');
            $table->string('ability_1_title');
            $table->text('ability_1_description');
            $table->string('ability_2_title');
            $table->text('ability_2_description');
            $table->string('ability_3_title');
            $table->text('ability_3_description');
            $table->string('ultimate_title');
            $table->text('ultimate_description');
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
};
