<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_listings', function (Blueprint $table) {
            $table->id('c_id');
            $table->string('model', 50);
            $table->integer('mileage');
            $table->string('comments', 255);
            $table->integer('make_year');
            $table->string('color', 20);
            $table->integer('price');
            $table->string('imgPath', 255);
            $table->string('manufacturer', 50);
            $table->double('displacement');
            $table->integer('power');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_listings');
    }
};
