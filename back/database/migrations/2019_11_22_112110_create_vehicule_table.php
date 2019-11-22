<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('categorie_id');
            $table->string('marque')->nullable();
            $table->string('modele')->nullable();
            $table->string('couleur')->nullable();
            $table->integer('nb_place')->nullable();
            $table->integer('nb_porte')->nullable();
            $table->string('consommation')->nullable();
            $table->boolean('est_disponible')->nullable();
            $table->double('prix_heure')->nullable();
            $table->double('prix_kilometrage')->nullable();
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
        Schema::dropIfExists('vehicule');
    }
}
