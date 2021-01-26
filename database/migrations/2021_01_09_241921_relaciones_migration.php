<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('idperfil')->unsigned();
            $table->foreign('idperfil')->references('id')->on('perfiles');
        });

        Schema::table('alumnos', function (Blueprint $table) {
            $table->integer('idgeneracion')->unsigned();
            $table->foreign('idgeneracion')->references('id')->on('generaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacion');
    }
}
