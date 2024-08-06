<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allianz extends Model
{
    use HasFactory;

    protected $fillable = [
        'numArticle',
        'refRetombées',
        'page',
        'nomSupport',
        'dateRetombee',
        'moisRetombee',
        'audience',
        'typeSupport',
        'famillePresse',

        'theme',
        'tonalite',
        'repriseMessage',
        'paroleRepresentant',
        'autreRepresentant',
        'paroleOpinion',
        'autreOpinion',
        'repriseCP',
        'actualite',
        'verbatim',

        'analystAssociee',
        'etudeAssociee',
        'date_fin',
        'statut',
    ];
}