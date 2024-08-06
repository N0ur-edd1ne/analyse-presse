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
            $table->string('numArticle');
            $table->string('nomSupport');
            $table->string('dateRetombee');
            $table->string('citation');
            $table->string('typePresse');
            $table->string('famillePresse');
            $table->string('tonalite');
            $table->string('attributImage');
            $table->string('theme');
            $table->string('repriseCP');
            $table->string('paroleRepresentant');
            $table->string('autreRepresentant');
            $table->string('paroleOpinion');
            $table->string('autreOpinion');
            $table->string('actualite');
            $table->string('verbatim');
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
