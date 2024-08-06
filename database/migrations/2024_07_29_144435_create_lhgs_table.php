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
        Schema::create('lhgs', function (Blueprint $table) {
            $table->id();

            $table->text('numArticle')->nullable();
            $table->text('pagePdf')->nullable();
            $table->text('nomSupport')->nullable();
            $table->text('audience')->nullable();
            $table->text('equivalentPub')->nullable();
            $table->text('moisRetombee')->nullable();
            $table->text('typeSupport')->nullable();
            $table->text('famillePresse')->nullable();
            $table->text('poidsLhg')->nullable();
            $table->text('citationInvestissement')->nullable();
            $table->text('citationLhg')->nullable();

            $table->text('theme')->nullable();
            $table->text('repriseMessage')->nullable();
            $table->text('repriseCP')->nullable();
            $table->text('tonaliteTraitement')->nullable();
            $table->text('mentionFederico')->nullable();
            $table->text('imageFederico')->nullable();
            $table->text('paroleRepresentant')->nullable();
            $table->text('paroleOpinion')->nullable();
            $table->text('actualiteLhg')->nullable();
            $table->text('identificationRetombee')->nullable();
            $table->text('selectionVerbatim')->nullable();
            
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
        Schema::dropIfExists('lhgs');
    }
};