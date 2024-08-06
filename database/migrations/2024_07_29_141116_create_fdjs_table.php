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
        Schema::create('fdjs', function (Blueprint $table) {
            $table->id();
            
            $table->text('numUnique')->nullable();
            $table->text('analyse')->nullable();
            $table->text('numRetombee')->nullable();
            $table->text('nomSupport')->nullable();
            $table->text('source')->nullable();
            $table->text('famillePresse')->nullable();
            $table->text('typeMedias')->nullable();
            $table->text('repartitionRegions')->nullable();
            $table->text('moisRetombee')->nullable();

            $table->text('audience')->nullable();
            $table->text('equivalentPub')->nullable();

            $table->text('surface')->nullable();
            $table->text('eae')->nullable();
            $table->text('eaePondere')->nullable();
            $table->text('contact')->nullable();
            $table->text('dureeSeconde')->nullable();
            $table->text('dureeHeure')->nullable();
            $table->text('extrait')->nullable();
            $table->text('categorie')->nullable();

            $table->text('themeAbordes')->nullable();
            $table->text('angleRetombee')->nullable();
            $table->text('tonaliteRetombees')->nullable();
            $table->text('attributImage')->nullable();
            $table->text('discoursGroupe')->nullable();
            $table->text('autreParole')->nullable();
            $table->text('discoursOpinion')->nullable();
            $table->text('actualite')->nullable();
            $table->text('verbatim')->nullable();
            $table->text('identificationRetombee')->nullable();

            $table->string('analystAssociee');
            $table->string('etudeAssociee');
            $table->text('date_fin');
            $table->string('statut')->default('importée');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fdjs');
    }
};