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
        Schema::create('dentits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('record');
            $table->string('address');
            $table->string('gender');
            $table->string('age');
            $table->string('P_Birth');
            $table->string('Nationality');
            $table->string('Email');
            $table->string('Allergies');
            $table->string('telephone');
            $table->string('Speciality');
            $table->string('Ethnicity');
            $table->string('Country');
            $table->string('Municipality');
            $table->string('speciality');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dentits');
    }
};
