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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->dateTime("date_debut");
            $table->dateTime("date_fin");
            $table->string("saisson",10)->default($value=(''));


            $table->unsignedBigInteger('voiture_id');
            $table->foreign('voiture_id')->references('id')->on("voitures");

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on("clients");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
