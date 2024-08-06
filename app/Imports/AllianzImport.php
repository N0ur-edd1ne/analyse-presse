<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Allianz;

class AllianzImport implements ToCollection
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
            $Allianz = Allianz::updateOrCreate(
                ['id' => $row[0]],
                [
                    'numArticle' => $row[1],
                    'refRetombées' => $row[2],
                    'page' => $row[3],
                    'nomSupport' => $row[4],
                    'dateRetombee' => $row[5],
                    'moisRetombee' => $row[6],
                    'audience' => $row[7],
                    'typeSupport' => $row[8],
                    'famillePresse' => $row[9],

                    'theme' => $row[10],
                    'tonalite' => $row[11],
                    'repriseMessage' => $row[12],
                    'paroleRepresentant' => $row[13],
                    'autreRepresentant' => $row[14],
                    'paroleOpinion' => $row[15],
                    'autreOpinion' => $row[16],
                    'repriseCP' => $row[17],
                    'actualite' => $row[18],
                    'verbatim' => $row[19],
                    
                    'analystAssociee' => $this->additionalData['analystAssociee'],
                    'etudeAssociee' => $this->additionalData['etudeAssociee'],
                    'date_fin' => $this->additionalData['date_fin'],
                    'statut' => $this->additionalData['statut']
                ]
            );
        }
    }
}