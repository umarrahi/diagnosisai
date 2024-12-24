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
        Schema::create('sleep_mood', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->constrained('personal_info')->onDelete('cascade');
            $table->enum('sleep_duration', ['More than 6 Hours', 'Less than 6 Hours']);
            $table->enum('sleep_disturbance', ['Yes', 'No', 'Maybe']);
            $table->enum('feeling_sad', ['Yes', 'No', 'Maybe']);
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
        Schema::dropIfExists('sleep_mood');
    }
};
