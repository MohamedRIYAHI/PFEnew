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
        Schema::create('preinscription', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('nom_arabe');
            $table->string('prenom');
            $table->string('prenom_arabe');
             $table->string('cne');
            $table->string('cin');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->text('photo')->nullable();
            $table->enum('sexe',['homme','femme'])->default('homme');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('adresse')->nullable();
            $table->string('lieu_naissance_arabe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preinscription');
    }
};
