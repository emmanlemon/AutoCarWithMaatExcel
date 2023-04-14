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
        Schema::create('auto_cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_code')->unique();
            $table->string('car_name');
            $table->string('car_type');
            $table->string('car_model');
            $table->string('car_prize');
            $table->string('year_release'); 
            $table->string('monthly');
            $table->string('year_coverage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto_cars');
    }
};
