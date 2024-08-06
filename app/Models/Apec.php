<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apec extends Model
{
    use HasFactory;

    protected $fillable = [
        'numArticle',
        'numPage',
        'idRetombee',
        'titre',
        'sousTitre',
        'resume',
        'nomSupport',
        'idSupport',
        'emission',
        'date',
        'dateEdition',
        'dateDisposition',
        'typeMedias',
        'auteur',
        'fanion',
        'tonalite',
        'tags',
        'familleMedia',
        'mediaArticle',
        'theme',
        'panorama',
        'nomPanorama',
        'heure',
        'duree',
        'nombreCaractere',
        'cibleEditoriale',
        'tarifPublicitaire',
        'thematiqueSupport',
        'zoneSupport',
        'region',
        'pays',
        'visiteurUnique',
        'typeSite',
        'lecteurAuditeur',
        'periodicite',
        'diffusion',
        'audience',
        'lienWeb',
        'lienStreaming',
        'lienPdf',
        'famillePresse',
        'delegationRegionale',

        'themeDeveloppe',
        'repriseCP',
        'repriseEtude',
        'Representant',
        'relaisOpinion',
        'teneurArticle',
        'repriseMessage',
        'epaisseurMediatique',
        'actualiteRetombee',
        'selectionVerbatim',
        'identificationRetombee',
        'gillesGateau',

        'analystAssociee',
        'etudeAssociee',
        'date_fin',
        'statut',
    ];
}
