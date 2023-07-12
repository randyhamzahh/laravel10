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
        Schema::create('campaigne', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('title');
            $table->text('story');
            $table->date('begin');
            $table->date('end');
            $table->integer('target');
            $table->integer('earned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigne');
    }
};