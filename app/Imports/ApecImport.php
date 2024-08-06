<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Apec;

class ApecImport implements ToCollection
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
            $Apec = Apec::updateOrCreate(
                ['id' => $row[0]],
                [
                    'numArticle' => $row[1],
                    'numPage' => $row[2],
                    'idRetombee' => $row[3],
                    'titre' => $row[4],
                    'sousTitre' => $row[5],
                    'resume' => $row[6],
                    'nomSupport' => $row[7],
                    'idSupport' => $row[8],
                    'emission' => $row[9],
                    'date' => $row[10],
                    'dateEdition' => $row[11],
                    'dateDisposition' => $row[12],
                    'typeMedias' => $row[13],
                    'auteur' => $row[14],
                    'fanion' => $row[15],
                    'tonalite' => $row[16],
                    'tags' => $row[17],
                    'familleMedia' => $row[18],
                    'mediaArticle' => $row[19],
                    'theme' => $row[20],
                    'panorama' => $row[21],
                    'nomPanorama' => $row[22],
                    'heure' => $row[23],
                    'duree' => $row[24],
                    'nombreCaractere' => $row[25],
                    'cibleEditoriale' => $row[26],
                    'tarifPublicitaire' => $row[27],
                    'thematiqueSupport' => $row[28],
                    'zoneSupport' => $row[29],
                    'region' => $row[30],
                    'pays' => $row[31],
                    'visiteurUnique' => $row[32],
                    'typeSite' => $row[33],
                    'lecteurAuditeur' => $row[34],
                    'periodicite' => $row[35],
                    'diffusion' => $row[36],
                    'audience' => $row[37],
                    'lienWeb' => $row[38],
                    'lienStreaming' => $row[39],
                    'lienPdf' => $row[40],
                    'famillePresse' => $row[41],
                    'delegationRegionale' => $row[42],

                    'themeDeveloppe' => $row[43],
                    'repriseCP' => $row[44],
                    'repriseEtude' => $row[45],
                    'Representant' => $row[46],
                    'relaisOpinion' => $row[47],
                    'teneurArticle' => $row[48],
                    'repriseMessage' => $row[49],
                    'epaisseurMediatique' => $row[50],
                    'actualiteRetombee' => $row[51],
                    'selectionVerbatim' => $row[52],
                    'identificationRetombee' => $row[53],
                    'gillesGateau' => $row[54],

                    'analystAssociee' => $this->additionalData['analystAssociee'],
                    'etudeAssociee' => $this->additionalData['etudeAssociee'],
                    'date_fin' => $this->additionalData['date_fin'],
                    'statut' => $this->additionalData['statut']
                ]
            );
        }
    }
}