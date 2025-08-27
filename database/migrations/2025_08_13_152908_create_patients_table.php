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
            $table->String ('name',255 );
            $table->String ('identification',20)->unique();
            $table->String ('p_Birth',255);
            $table->integer ('age');
            $table->String ('addres',255);   
            $table->String ('sex',10);
            $table->String ('nationality',100);
            $table->String ('ethnicity',100);
            $table->String ('telephone',15);
            $table->String ('departament',255);
            $table->String ('responsible',45);
            $table->String ('country',255);
            $table->String ('mail',255);
            $table->String ('municipality',100);
            $table->String ('marital_status',20);


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
