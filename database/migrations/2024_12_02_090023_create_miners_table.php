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
        Schema::create('miners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('description')->nullable();
            $table->string('hash')->nullable(); //Hash Rate (TH/s)
            $table->string('power')->nullable(); //Power Consumption (kW)
            $table->string('weight')->nullable(); //Weight (kg)
            $table->string('cooling')->nullable();
            $table->string('temp')->nullable(); //Water Temp (°C)
            $table->string('price')->nullable(); //Average Price ($)
            $table->string('revenue')->nullable(); //Revenue per 10 kWh (BTC)
            $table->string('url')->nullable(); //URL to buy this miner
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miners');
    }
};