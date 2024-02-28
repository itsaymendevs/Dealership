<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('brand_models', function (Blueprint $table) {
            $table->id();

            // 1: general
            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();


            $table->bigInteger('brandId')->unsigned()->nullable();
            $table->foreign('brandId')->references('id')->on('brands')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('brand_models');
    }
};
