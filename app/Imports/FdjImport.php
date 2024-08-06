<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Fdj;

class FdjImport implements ToCollection
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
            $Fdj = Fdj::updateOrCreate(
                ['id' => $row[0]],
                [
                    'numUnique' => $row[1],
                    'analyse' => $row[2],
                    'numRetombee' => $row[3],
                    'nomSupport' => $row[4],
                    'source' => $row[5],
                    'famillePresse' => $row[6],
                    'typeMedias' => $row[7],
                    'repartitionRegions' => $row[8],
                    'moisRetombee' => $row[9],

                    'audience' => $row[10],
                    'equivalentPub' => $row[11],

                    'surface' => $row[12],
                    'eae' => $row[13],
                    'eaePondere' => $row[14],
                    'contact' => $row[15],
                    'dureeSeconde' => $row[16],
                    'dureeHeure' => $row[17],
                    'extrait' => $row[18],
                    'categorie' => $row[19],

                    'themeAbordes' => $row[20],
                    'angleRetombee' => $row[21],
                    'tonaliteRetombees' => $row[22],
                    'attributImage' => $row[23],
                    'discoursGroupe' => $row[24],
                    'autreParole' => $row[25],
                    'discoursOpinion' => $row[26],
                    'actualite' => $row[27],
                    'verbatim' => $row[28],
                    'identificationRetombee' => $row[29],

                    'analystAssociee' => $this->additionalData['analystAssociee'],
                    'etudeAssociee' => $this->additionalData['etudeAssociee'],
                    'date_fin' => $this->additionalData['date_fin'],
                    'statut' => $this->additionalData['statut']
                ]
            );
        }
    }
}