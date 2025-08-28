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
            $table->string('name');
            $table->string('record');
            $table->string('address');
            $table->string('gender');
            $table->string('age');
            $table->string('p_Birth');
            $table->string('nationality');
            $table->string('email');
            $table->string('allergies');
            $table->string('telephone');
            $table->string('speciality');
            $table->string('ethnicity');
            $table->string('country');
            $table->string('municipality');
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
