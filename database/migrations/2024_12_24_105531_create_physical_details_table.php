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
        Schema::create('physical_details', function (Blueprint $table) {
            $table->id();
            $table->enum('marital_status', ['Single', 'Married', 'Divorced', 'Widowed']);
            $table->date('dob');
            $table->float('height', 5, 2);
            $table->float('weight', 5, 2);
            $table->enum('significant_weight_loss', ['Yes', 'No']);
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
        Schema::dropIfExists('physical_details');
    }
};