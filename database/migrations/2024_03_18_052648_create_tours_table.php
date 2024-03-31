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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('night')->nullable();
            $table->string('days')->nullable();
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('age')->nullable();
            $table->string('daterange')->nullable();
            $table->string('exception')->nullable();
            $table->string('category')->nullable();
            $table->tinyInteger('status')->default('1')->comment('1=> Active , 0=>Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
