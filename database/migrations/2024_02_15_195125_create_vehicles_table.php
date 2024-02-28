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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();

            // 1: general
            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();


            $table->text('imageFile')->nullable();
            $table->text('secondImageFile')->nullable();
            $table->text('thirdImageFile')->nullable();
            $table->text('fourthImageFile')->nullable();




            // 1.2: shortDescription - longDesc
            $table->text('shortDesc')->nullable();
            $table->text('longDesc')->nullable();





            // 1.3: buyPrice - offerPrice - sellPrice
            $table->double('buyPrice', 8, 2)->nullable()->default(0);
            $table->double('offerPrice', 8, 2)->nullable();
            $table->double('sellPrice', 8, 2)->nullable();




            // 1.4: isHidden - isSold
            $table->boolean('isHidden')->nullable()->default(false);
            $table->boolean('isSold')->nullable()->default(false);







            // 1.5: brand - model - year
            $table->integer('manufactureYear')->nullable();


            $table->bigInteger('brandId')->unsigned()->nullable();
            $table->foreign('brandId')->references('id')->on('brands')->onDelete('cascade');

            $table->bigInteger('brandModelId')->unsigned()->nullable();
            $table->foreign('brandModelId')->references('id')->on('brand_models')->onDelete('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('vehicles');
    }
};
