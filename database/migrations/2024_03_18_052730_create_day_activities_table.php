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
        Schema::create('day_activities', function (Blueprint $table) {
            $table->id();
            $table->string('tour_id')->nullable();
            $table->string('day_id')->nullable();
            $table->string('activity')->nullable();
            $table->string('description')->nullable();
            $table->text('image1')->nullable();
            $table->text('image2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_activities');
    }
};
