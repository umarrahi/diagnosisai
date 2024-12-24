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
        Schema::create('family_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->constrained('personal_info')->onDelete('cascade');
            $table->integer('no_of_kids');
            $table->enum('feeling_sad_past_months', ['Yes', 'No']);
            $table->enum('appetite_disturbance', ['Yes', 'No', 'Maybe']);
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
        Schema::dropIfExists('family_info');
    }
};
