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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string("immatricule",20)->unique();
            $table->string("modele",20)->unique();
            $table->integer("nbr_place");
            $table->integer("nbr_port");
            $table->integer("nbr_CV");
            $table->string("photo");
            $table->integer("kilometrage");
            $table->string("carburant",10);
            $table->double("prix",11,3);
            $table->integer('status')->default($value=0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};
