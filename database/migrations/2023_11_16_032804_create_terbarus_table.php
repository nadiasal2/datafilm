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
        Schema::create('terbarus', function (Blueprint $table) {
            $table->string('id'); 
            $table->string('judul'); 
            $table->string('tahun' ); 
            $table->string('genre');
            $table->string('sinopsis');
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
        Schema::dropIfExists('terbarus');
    }
};
