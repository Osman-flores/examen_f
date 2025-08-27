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
        Schema::create('_appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('duration');
            $table->date('date');
            $table->string('treatment');
            $table->string('reason');
            $table->string('name_client');
            $table->string('number_client');


            $table->intenger('patients_id')->unsigned();
            $table->foreign('patients_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade'); 
            
            $table->intenger('dentists_id')->unsigned();
            $table->foreign('dentists_id')->references('id')->on('dentists')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_appointments');
    }
};
