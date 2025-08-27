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
        Schema::create('_treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('cost');
            $table->string('payment_status');
            $table->string('name_doctor');
            $table->string('area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_treatments');
    }
};
