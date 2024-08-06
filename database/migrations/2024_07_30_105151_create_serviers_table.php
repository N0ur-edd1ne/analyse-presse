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
        Schema::create('serviers', function (Blueprint $table) {
            $table->id();

            $table->text('refPdf')->nullable();
            $table->text('numArticle')->nullable();
            $table->text('numPage')->nullable();
            $table->text('nomSupport')->nullable();
            $table->text('typeSource')->nullable();
            $table->text('source')->nullable();
            $table->text('programme')->nullable();
            $table->text('media')->nullable();
            $table->text('dateRetombee')->nullable();
            $table->text('dateLivraison')->nullable();
            $table->text('pays')->nullable();
            $table->text('auteur')->nullable();
            $table->text('tonalite2')->nullable();
            $table->text('surface')->nullable();
            $table->text('eae')->nullable();
            $table->text('eaePondere')->nullable();
            $table->text('contact')->nullable();
            $table->text('visiteurUnique1')->nullable();
            $table->text('pageVue')->nullable();
            $table->text('duree')->nullable();
            $table->text('debut')->nullable();
            $table->text('fin')->nullable();
            $table->text('nombrePage')->nullable();
            $table->text('nombreMot')->nullable();
            $table->text('like')->nullable();
            $table->text('commentaire')->nullable();
            $table->text('highlight')->nullable();
            $table->text('extrait')->nullable();
            $table->text('url')->nullable();
            $table->text('categorie')->nullable();
            $table->text('langue')->nullable();
            $table->text('socialShare')->nullable();
            $table->text('twitterAime')->nullable();
            $table->text('twitterAbonne')->nullable();
            $table->text('twitterStatut')->nullable();
            $table->text('viewCount')->nullable();
            $table->text('mediaScore')->nullable();
            $table->text('typeContenu')->nullable();
            $table->text('diffusion')->nullable();
            $table->text('audienceMoyenne')->nullable();
            $table->text('tirage')->nullable();
            $table->text('visiteurUnique2')->nullable();

            $table->text('citation')->nullable();
            $table->text('typePresse')->nullable();
            $table->text('famillePresse')->nullable();
            $table->text('tonalite')->nullable();
            $table->text('attributImage')->nullable();
            $table->text('theme')->nullable();
            $table->text('repriseCP')->nullable();
            $table->text('paroleRepresentant')->nullable();
            $table->text('autreRepresentant')->nullable();
            $table->text('paroleOpinion')->nullable();
            $table->text('autreOpinion')->nullable();
            $table->text('actualite')->nullable();
            $table->text('verbatim')->nullable();

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
        Schema::dropIfExists('serviers');
    }
};