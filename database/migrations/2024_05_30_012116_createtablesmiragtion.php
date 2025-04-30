<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createtablesmiragtion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Migration pour la table livres
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('titre_Livre');
            $table->text('description_Livre');
            $table->double('prix_Livre');
            $table->string('ISBN_Livre');
            $table->string('image_Livre');
            $table->unsignedBigInteger('Categorie_id');
            $table->unsignedBigInteger('Auteur_id');
            $table->timestamps();

            $table->foreign('Categorie_id')->references('id')->on('categories');
            $table->foreign('Auteur_id')->references('id')->on('auteurs');
        });

        // Migration pour la table users
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });

        // Migration pour la table cart
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('book_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('livres');
        });

        // Migration pour la table payment
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
