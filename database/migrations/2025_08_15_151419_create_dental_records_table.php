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
        Schema::create('dental_records', function (Blueprint $table) {
            $table->incremets('id');
            $table->string('date');
            $table->string('treatment');
            $table->string('progress');
            $table->string('allergiances');
            
            $table->intenger('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patient')->onDelete('cascade')->onUpdate('cascade'); 
            
            $table->intenger('treatment_id')->unsigned();
            $table->foreign('treatment_id')->references('id')->on('treatment')->onDelete('cascade')->onUpdate('cascade'); 


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dental_records');
    }
};
