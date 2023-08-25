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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('price');
            $table->string('image')->nullable();
            $table->string('shop', 50);
            $table->integer('calories')->nullable();
            $table->float('proteins')->nullable();
            $table->float('fats')->nullable();
            $table->float('carbohydrates')->nullable();
            $table->float('sugar')->nullable();
            $table->float('fiber')->nullable();
            $table->float('salt')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
};
