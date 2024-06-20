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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('serie_bac');
            $table->string('annee_bac');
            $table->float('moyenne_bac');
            $table->string('montion_bac');
            $table->string('dernier_diplome');
            $table->string('annee_diplome');
            $table->string('specialite');
            $table->string('nom_etab');
            $table->string('status');
            $table->text('cv');
            $table->text('lettre_motivation');
            $table->text('file_derneier_diplome');
            $table->text('carteNT');
            $table->text('releve_note');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};
