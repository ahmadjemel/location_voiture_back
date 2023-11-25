








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

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->integer("cin")->unique();
            $table->string("nom",10);
            $table->string("prenom",10);
            $table->integer("age");
            $table->integer("tel");
            $table->string("adresse",30);
            $table->string("email",80)->unique();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
