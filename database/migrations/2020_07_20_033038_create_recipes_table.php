<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('recipe_id');
            $table->integer('creator_id');
            $table->text('recipe_name');
            $table->text('recipe_image');
            $table->text('recipe');
            $table->text('material_1');
            $table->text('material_2')->nullable();
            $table->text('material_3')->nullable();
            $table->text('material_4')->nullable();
            $table->text('material_5')->nullable();
            $table->text('material_6')->nullable();
            $table->text('material_7')->nullable();
            $table->text('material_8')->nullable();
            $table->text('material_9')->nullable();
            $table->text('material_10')->nullable();
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
        Schema::dropIfExists('recipes');
    }
}
