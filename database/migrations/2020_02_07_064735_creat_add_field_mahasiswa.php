<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatAddFieldMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswas', function ( $table) {
            //
            $table->unsignedBigInteger('id_dosen')->after('nim')->nullable();
            $table->foreign('id_dosen')->references('id')
            ->on('dosens')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswas', function ( $table) {

            $table->dropColumn('id_dosen');
        });
    }
}
