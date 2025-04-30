<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuteursTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */ 
    public function up()
    {
        Schema::create('auteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_auteur');
            $table->string('prenom_auteur');
            $table->date('datenaissance_auteur');
            $table->string('pays_auteur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auteurs');
    }
}
