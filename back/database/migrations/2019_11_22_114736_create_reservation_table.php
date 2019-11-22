<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('voiture_id');
            $table->integer('date_deb')->nullable();
            $table->integer('date_fin')->nullable();
            $table->timestamps('heure_deb')->nullable();
            $table->timestamps('heure_deb')->nullable();
            $table->string('lieu_depart')->nullable();
            $table->string('lieu_arrive')->nullable();
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
        Schema::dropIfExists('reservation');
    }
}
