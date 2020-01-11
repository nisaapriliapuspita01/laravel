<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrammediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grammedia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_buku')->unique();
            $table->string('nama_pembeli')->nullable();
            $table->integer('harga_buku')->nullable();
            $table->date('tanggal_membeli')->nullable();
            $table->boolean('status')->default(1);
            
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
        Schema::dropIfExists('grammedia');
    }
}
