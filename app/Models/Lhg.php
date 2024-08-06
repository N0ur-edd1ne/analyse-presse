<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lhg extends Model
{
    use HasFactory;

    protected $fillable = [
        'numArticle',
        'pagePdf',
        'nomSupport',
        'audience',
        'equivalentPub',
        'moisRetombee',
        'typeSupport',
        'famillePresse',

        'poidsLhg',
        'citationInvestissement',
        'citationLhg',
        'theme',
        'repriseMessage',
        'repriseCP',
        'tonaliteTraitement',
        'mentionFederico',
        'imageFederico',
        'paroleRepresentant',
        'paroleOpinion',
        'actualiteLhg',
        'identificationRetombee',
        'selectionVerbatim',

        'analystAssociee',
        'etudeAssociee',
        'date_fin',
        'statut',
    ];
}