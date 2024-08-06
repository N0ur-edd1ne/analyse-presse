<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Lhg;

class LhgImport implements ToCollection
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
            $Lhg = Lhg::updateOrCreate(
                ['id' => $row[0]],
                [
                    'numArticle' => $row[1],
                    'pagePdf' => $row[2],
                    'nomSupport' => $row[3],
                    'audience' => $row[4],
                    'equivalentPub' => $row[5],
                    'moisRetombee' => $row[6],
                    'typeSupport' => $row[7],
                    'famillePresse' => $row[8],
                    'poidsLhg' => $row[9],
                    'citationInvestissement' => $row[10],
                    'citationLhg' => $row[11],

                    'theme' => $row[12],
                    'repriseMessage' => $row[13],
                    'repriseCP' => $row[14],
                    'tonaliteTraitement' => $row[15],
                    'mentionFederico' => $row[16],
                    'imageFederico' => $row[17],
                    'paroleRepresentant' => $row[18],
                    'paroleOpinion' => $row[19],
                    'actualiteLhg' => $row[20],
                    'identificationRetombee' => $row[21],
                    'selectionVerbatim' => $row[22],
                    
                    'analystAssociee' => $this->additionalData['analystAssociee'],
                    'etudeAssociee' => $this->additionalData['etudeAssociee'],
                    'date_fin' => $this->additionalData['date_fin'],
                    'statut' => $this->additionalData['statut']
                ]
            );
        }
    }
}