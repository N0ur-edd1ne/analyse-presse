<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Servier;

class ServierImport implements ToCollection
{
    protected $additionalData;

    public function __construct(array $additionalData)
    {
        $this->additionalData = $additionalData;
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            $Servier = Servier::updateOrCreate(
                ['id' => $row[0]],
                [
                    'refPdf' => $row[1],
                    'numArticle' => $row[2],
                    'numPage' => $row[3],
                    'nomSupport' => $row[4],
                    'typeSource' => $row[5],
                    'source' => $row[6],
                    'programme' => $row[7],
                    'media' => $row[8],
                    'dateRetombee' => $row[9],
                    'dateLivraison' => $row[10],
                    'pays' => $row[11],
                    'auteur' => $row[12],
                    'tonalite2' => $row[13],
                    'surface' => $row[14],
                    'eae' => $row[15],
                    'eaePondere' => $row[16],
                    'contact' => $row[17],
                    'visiteurUnique1' => $row[18],
                    'pageVue' => $row[19],
                    'duree' => $row[20],
                    'debut' => $row[21],
                    'fin' => $row[22],
                    'nombrePage' => $row[23],
                    'nombreMot' => $row[24],
                    'like' => $row[25],
                    'commentaire' => $row[26],
                    'highlight' => $row[27],
                    'extrait' => $row[28],
                    'url' => $row[29],
                    'categorie' => $row[30],
                    'langue' => $row[31],
                    'socialShare' => $row[32],
                    'twitterAime' => $row[33],
                    'twitterAbonne' => $row[34],
                    'twitterStatut' => $row[35],
                    'viewCount' => $row[36],
                    'mediaScore' => $row[37],
                    'typeContenu' => $row[38],
                    'diffusion' => $row[39],
                    'audienceMoyenne' => $row[40],
                    'tirage' => $row[41],
                    'visiteurUnique2' => $row[42],

                    'citation' => $row[43],
                    'typePresse' => $row[44],
                    'famillePresse' => $row[45],
                    'tonalite' => $row[46],
                    'attributImage' => $row[47],
                    'theme' => $row[48],
                    'repriseCP' => $row[49],
                    'paroleRepresentant' => $row[50],
                    'autreRepresentant' => $row[51],
                    'paroleOpinion' => $row[52],
                    'autreOpinion' => $row[53],
                    'actualite' => $row[54],
                    'verbatim' => $row[55],

                    'analystAssociee' => $this->additionalData['analystAssociee'],
                    'etudeAssociee' => $this->additionalData['etudeAssociee'],
                    'date_fin' => $this->additionalData['date_fin'],
                    'statut' => $this->additionalData['statut']
                ]
            );
        }
    }
}