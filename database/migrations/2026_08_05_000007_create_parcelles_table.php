<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('parcelles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menage_id')->constrained('menages')->cascadeOnDelete();
<<<<<<< HEAD
            $table->unsignedInteger('nombre_pieds')->nullable();
            $table->unsignedSmallInteger('annee_mise_en_place')->nullable();
            $table->string('etat_verger')->nullable();
=======

            $table->unsignedInteger('nombre_pieds')->nullable();
            $table->unsignedSmallInteger('annee_mise_en_place')->nullable();
            $table->string('etat_verger')->nullable();

>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->json('polygone')->nullable();
            $table->enum('mode_positionnement', ['automatique', 'manuel'])->nullable();
<<<<<<< HEAD
            
=======

>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parcelles');
    }
};
