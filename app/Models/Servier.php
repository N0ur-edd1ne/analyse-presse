<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servier extends Model
{
    use HasFactory;

    protected $fillable = [
        'refPdf',
        'numArticle',
        'numPage',
        'nomSupport',
        'typeSource',
        'source',
        'programme',
        'media',
        'dateRetombee',
        'dateLivraison',
        'pays',
        'auteur',
        'tonalite2',
        'surface',
        'eae',
        'eaePondere',
        'contact',
        'visiteurUnique1',
        'pageVue',
        'duree',
        'debut',
        'fin',
        'nombrePage',
        'nombreMot',
        'like',
        'commentaire',
        'highlight',
        'extrait',
        'url',
        'categorie',
        'langue',
        'socialShare',
        'twitterAime',
        'twitterAbonne',
        'twitterStatut',
        'viewCount',
        'mediaScore',
        'typeContenu',
        'diffusion',
        'audienceMoyenne',
        'tirage',
        'visiteurUnique2',

        'citation',
        'typePresse',
        'famillePresse',
        'tonalite',
        'attributImage',
        'theme',
        'repriseCP',
        'paroleRepresentant',
        'autreRepresentant',
        'paroleOpinion',
        'autreOpinion',
        'actualite',
        'verbatim',

        'analystAssociee',
        'etudeAssociee',
        'date_fin',
        'statut',
    ];
}