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
        Schema::create('patients', function (Blueprint $table) {
              $table->increments("id");
            $table->string ('name',255 );
            $table->string ('identification',20)->unique();
            $table->string ('p_Birth',255);
            $table->integer ('age');
            $table->string ('addres',255);   
            $table->string ('sex',10);
            $table->string ('nationality',100);
            $table->string ('ethnicity',100);
            $table->string ('telephone',15);
            $table->string ('departament',255);
            $table->string ('responsible',45);
            $table->string ('country',255);
            $table->string ('mail',255);
            $table->string ('municipality',100);
            $table->string ('marital_status',20);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
