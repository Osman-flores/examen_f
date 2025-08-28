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
            $table->increments('id');
            $table->string('date');
            $table->string('treatment');
            $table->string('progress');
            $table->string('allergiances');
            
            $table->integer('patients_id')->unsigned();
            $table->foreign('patients_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade'); 
            
            $table->integer('treatments_id')->unsigned();
            $table->foreign('treatments_id')->references('id')->on('treatments')->onDelete('cascade')->onUpdate('cascade'); 


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
