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
        Schema::create('account', function (Blueprint $table) {
            $table->id("a_id");
            $table->string('f_name', 50);
            $table->string("l_name", 50);
            $table->string('e_mail', 100);
            $table->rememberToken();
            $table->foreignId('p_id')->default(1);
            $table->string('password', 255);

            $table->foreign('p_id')->references('p_id')->on('privilege');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
