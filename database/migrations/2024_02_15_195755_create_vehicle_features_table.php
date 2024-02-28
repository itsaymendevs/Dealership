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
        Schema::create('vehicle_features', function (Blueprint $table) {
            $table->id();


            // 1: general
            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();


            // 1.2: featureAvailable
            $table->boolean('isAvailable')->nullable()->default(false);





            // 1.3: vehicle
            $table->bigInteger('vehicleId')->unsigned()->nullable();
            $table->foreign('vehicleId')->references('id')->on('vehicles')->onDelete('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('vehicle_features');
    }
};
