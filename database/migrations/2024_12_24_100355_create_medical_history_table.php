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
            $table->text('medication')->nullable(); // Creates the "medication" column
            $table->text('multivitamins')->nullable(); // Creates the "multivitamins" column
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