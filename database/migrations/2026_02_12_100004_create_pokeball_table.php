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
        Schema::create('pokeball', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('species');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('hp');
            $table->integer('attack');
            $table->integer('defense');
            $table->string('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokeball');
    }
};
