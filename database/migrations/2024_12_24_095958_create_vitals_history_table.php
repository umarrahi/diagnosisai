<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitals_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->constrained('personal_info')->onDelete('cascade');
            $table->float('bmi', 5, 2)->nullable(); // Calculated
            $table->string('blood_pressure');
            $table->float('glucose_level', 5, 2);
            $table->enum('glucose_type', ['Random', 'Fasting']);
            $table->integer('heart_rate');
            $table->integer('spo2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vitals_history');
    }
};
