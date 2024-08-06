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
        Schema::create('cpetudes', function (Blueprint $table) {
            $table->string('idInputC');
            $table->string('idInputE');

            // Définir les clés étrangères
            $table->foreign('idInputC')->references('idInputC')->on('communiques')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idInputE')->references('idInputE')->on('etudes')->onDelete('cascade')->onUpdate('cascade');

            // Définir la clé primaire composite
            $table->primary(['idInputC', 'idInputE']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpetudes');
    }
};