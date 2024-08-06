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
        Schema::create('apecs', function (Blueprint $table) {
            $table->id();

            $table->text('numArticle')->nullable();
            $table->text('numPage')->nullable();
            $table->text('idRetombee')->nullable();
            $table->text('titre')->nullable();
            $table->text('sousTitre')->nullable();
            $table->text('resume')->nullable();
            $table->text('nomSupport')->nullable();
            $table->text('idSupport')->nullable();
            $table->text('emission')->nullable();
            $table->text('date')->nullable();
            $table->text('dateEdition')->nullable();
            $table->text('dateDisposition')->nullable();
            $table->text('typeMedias')->nullable();
            $table->text('auteur')->nullable();
            $table->text('fanion')->nullable();
            $table->text('tonalite')->nullable();
            $table->text('tags')->nullable();
            $table->text('familleMedia')->nullable();
            $table->text('mediaArticle')->nullable();
            $table->text('theme')->nullable();
            $table->text('panorama')->nullable();
            $table->text('nomPanorama')->nullable();
            $table->text('heure')->nullable();
            $table->text('duree')->nullable();
            $table->text('nombreCaractere')->nullable();
            $table->text('cibleEditoriale')->nullable();
            $table->text('tarifPublicitaire')->nullable();
            $table->text('thematiqueSupport')->nullable();
            $table->text('zoneSupport')->nullable();
            $table->text('region')->nullable();
            $table->text('pays')->nullable();
            $table->text('visiteurUnique')->nullable();
            $table->text('typeSite')->nullable();
            $table->text('lecteurAuditeur')->nullable();
            $table->text('periodicite')->nullable();
            $table->text('diffusion')->nullable();
            $table->text('audience')->nullable();
            $table->text('lienWeb')->nullable();
            $table->text('lienStreaming')->nullable();
            $table->text('lienPdf')->nullable();
            $table->text('famillePresse')->nullable();
            $table->text('delegationRegionale')->nullable();

            $table->text('themeDeveloppe')->nullable();
            $table->text('repriseCP')->nullable();
            $table->text('repriseEtude')->nullable();
            $table->text('Representant')->nullable();
            $table->text('relaisOpinion')->nullable();
            $table->text('teneurArticle')->nullable();
            $table->text('repriseMessage')->nullable();
            $table->text('epaisseurMediatique')->nullable();
            $table->text('actualiteRetombee')->nullable();
            $table->text('selectionVerbatim')->nullable();
            $table->text('identificationRetombee')->nullable();
            $table->text('gillesGateau')->nullable();

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
        Schema::dropIfExists('apecs');
    }
};