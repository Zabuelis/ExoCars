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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id('m_id');
            $table->foreignId('a_id');
            $table->foreignId('c_id');
            $table->date('date');
            $table->time('time');

            $table->foreign('a_id')->references('a_id')->on('accounts');
            $table->foreign('c_id')->references('c_id')->on('car_listings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meetings');
    }
};
