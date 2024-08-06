<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Apec;

class ApecController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function apec()
    {
        $nextId = $this->getNextUnevaluatedId();
        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('info', 'Toutes les études APEC ont été analysées.');
        }
        return view('analyst-apec-analyse', ['nextId' => $nextId]);
    }

    public function getData()
    {
        $apecs = DB::table('apecs')
            ->select('id', 'numArticle', 'nomSupport', 'audience', 'date', 'typeMedias', 'famillePresse', 'delegationRegionale')
            ->get();

        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'APEC')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'APEC')
            ->get();

        $nextId = $this->getNextUnevaluatedId();

        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('info', 'Toutes les études APEC ont été analysées.');
        }
    
        $apec = Apec::find($nextId);
    
        return view('analyst-apec-analyse', compact('apecs', 'communiques', 'etudes', 'apec', 'nextId'));
    }

    public function store_apec(Request $request, $id)
    {
        $request->validate([
            'numArticle',
            'nomSupport',
            'audience',
            'date',
            'typeMedias',
            'famillePresse',
            'delegationRegionale',
            'themeDeveloppe' => 'required|array',
            'repriseCP' => 'required|array',
            'repriseEtude' => 'required|array',
            'Representant' => 'required|array',
            'relaisOpinion' => 'required|array',
            'teneurArticle' => 'required',
            'repriseMessage' => 'required|array',
            'epaisseurMediatique' => 'required',
            'actualiteRetombee' => 'required',
            'selectionVerbatim' => 'required',
            'identificationRetombee' => 'required',
            'gillesGateau' => 'required'
        ]);

        $apec = Apec::find($id);

        $apec->numArticle = $request->input('numArticle');
        $apec->nomSupport = $request->input('nomSupport');
        $apec->audience = $request->input('audience');
        $apec->date = $request->input('date');
        $apec->typeMedias = $request->input('typeMedias');
        $apec->famillePresse = $request->input('famillePresse');
        $apec->delegationRegionale = $request->input('delegationRegionale');
        $apec->themeDeveloppe = implode('/', $request->input('themeDeveloppe'));
        $apec->repriseCP = implode('/', $request->input('repriseCP'));
        $apec->repriseEtude = implode('/', $request->input('repriseEtude'));
        $apec->Representant = implode('/', $request->input('Representant'));
        $apec->relaisOpinion = implode('/', $request->input('relaisOpinion'));
        $apec->teneurArticle = $request->input('teneurArticle');
        $apec->repriseMessage = implode('/', $request->input('repriseMessage'));
        $apec->epaisseurMediatique = $request->input('epaisseurMediatique');
        $apec->actualiteRetombee = $request->input('actualiteRetombee');
        $apec->selectionVerbatim = $request->input('selectionVerbatim');
        $apec->identificationRetombee = $request->input('identificationRetombee');
        $apec->gillesGateau = $request->input('gillesGateau');

        $apec->statut='analysée';

        $apec->save();

        $nextId = $this->getNextUnevaluatedId();

        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('success', 'Toutes les études APEC ont été analysées.');
        }

        return redirect("/analyst-apec-analyse?id={$nextId}")->with('success', 'Réponses enregistrées avec succès');
    }

    private function getNextUnevaluatedId()
    {
        $nextApec = Apec::where('statut', '!=', 'analysée')
                      ->orderBy('id', 'asc')
                      ->first();

        return $nextApec ? $nextApec->id : null;
    }

    public function show_apec()
    {
        $apec = Apec::all();

        return view('analyst-apec-list_analyses', compact('apec'));
    }

    public function edit_apec($id)
    {
        $apec = Apec::findOrFail($id);
        
        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'APEC')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'APEC')
            ->get();
        
        return view('analyst-apec-edit_analyse', compact('apec', 'communiques', 'etudes'));
    }

    public function update_apec(Request $request, $id)
    {
        $apec = Apec::find($id);

        $apec->numArticle = $request->input('numArticle');
        $apec->nomSupport = $request->input('nomSupport');
        $apec->audience = $request->input('audience');
        $apec->date = $request->input('date');
        $apec->typeMedias = $request->input('typeMedias');
        $apec->famillePresse = $request->input('famillePresse');
        $apec->delegationRegionale = $request->input('delegationRegionale');
        $apec->themeDeveloppe = implode('/', $request->input('themeDeveloppe'));
        $apec->repriseCP = implode('/', $request->input('repriseCP'));
        $apec->repriseEtude = implode('/', $request->input('repriseEtude'));
        $apec->Representant = implode('/', $request->input('Representant'));
        $apec->relaisOpinion = implode('/', $request->input('relaisOpinion'));
        $apec->teneurArticle = $request->input('teneurArticle');
        $apec->repriseMessage = implode('/', $request->input('repriseMessage'));
        $apec->epaisseurMediatique = $request->input('epaisseurMediatique');
        $apec->actualiteRetombee = $request->input('actualiteRetombee');
        $apec->selectionVerbatim = $request->input('selectionVerbatim');
        $apec->identificationRetombee = $request->input('identificationRetombee');
        $apec->gillesGateau = $request->input('gillesGateau');

        $apec->statut='analysée';

        $apec->save();

        return redirect('/analyst-apec-list_analyses')->with('success', 'Réponses modifiées avec succès');
    }

    public function duplicate_apec($id)
    {
        $apec = Apec::findOrFail($id);
        
        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'APEC')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'APEC')
            ->get();

        return view('analyst-apec-duplicate_analyse', compact('apec', 'communiques', 'etudes'));
    }
}