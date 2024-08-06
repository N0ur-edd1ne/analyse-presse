<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fdj extends Model
{
    use HasFactory;

    protected $table = 'fdjs';

    protected $fillable = [
        'numUnique',
        'analyse',
        'numRetombee',
        'nomSupport',
        'source',
        'famillePresse',
        'typeMedias',
        'repartitionRegions',
        'moisRetombee',

        'audience',
        'equivalentPub',

        'surface',
        'eae',
        'eaePondere',
        'contact',
        'dureeSeconde',
        'dureeHeure',
        'extrait',
        'categorie',

        'themeAbordes',
        'angleRetombee',
        'tonaliteRetombees',
        'attributImage',
        'discoursGroupe',
        'autreParole',
        'discoursOpinion',
        'actualite',
        'verbatim',
        'identificationRetombee',
        
        'analystAssociee',
        'etudeAssociee',
        'date_fin',
        'statut',
    ];
}