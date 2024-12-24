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
        Schema::create('lifestyle_energy', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->constrained('personal_info')->onDelete('cascade');
            $table->enum('job_role', ['Student', 'Professional', 'Self-employed', 'Retired']);
            $table->enum('happy_with_job', ['Yes', 'No', 'Maybe']);
            $table->enum('low_energy', ['Yes', 'No']);
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
        Schema::dropIfExists('lifestyle_energy');
    }
};
