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
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->string('car_review');
            $table->foreignId('car_type');
            $table->string('car_image');
            $table->Integer('car_passenger');
            $table->Integer('car_gate');
            $table->Integer('car_rent');
           
            // $table->foreign('car_type')->references('car_id')->on('brand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
