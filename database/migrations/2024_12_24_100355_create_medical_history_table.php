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
        Schema::create('medical_history', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key
            $table->foreignId('personal_info_id')->constrained('personal_info')->onDelete('cascade');
            $table->text('medication')->nullable(); // Creates the "medication" column
            $table->text('multivitamins')->nullable(); // Creates the "multivitamins" column
            $table->json('past_medical_history'); // JSON column for multiple options
            $table->timestamps(); // Adds "created_at" and "updated_at" columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_history');
    }
};
