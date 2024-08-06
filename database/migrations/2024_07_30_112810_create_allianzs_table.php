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
        Schema::create('allianzs', function (Blueprint $table) {
            $table->id();

            $table->text('numArticle')->nullable();
            $table->text('refRetombées')->nullable();
            $table->text('page')->nullable();
            $table->text('nomSupport')->nullable();
            $table->text('dateRetombee')->nullable();
            $table->text('moisRetombee')->nullable();
            $table->text('audience')->nullable();
            $table->text('typeSupport')->nullable();
            $table->text('famillePresse')->nullable();

            $table->text('theme')->nullable();
            $table->text('tonalite')->nullable();
            $table->text('repriseMessage')->nullable();
            $table->text('paroleRepresentant')->nullable();
            $table->text('autreRepresentant')->nullable();
            $table->text('paroleOpinion')->nullable();
            $table->text('autreOpinion')->nullable();
            $table->text('repriseCP')->nullable();
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
        Schema::dropIfExists('allianzs');
    }
};