<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fdj;
use Illuminate\Support\Facades\DB;

class FdjController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function fdj()
    {
        $nextId = $this->getNextUnevaluatedId();
        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('info', 'Toutes les études FDJ ont été analysées.');
        }
        return view('analyst-fdj-analyse', ['nextId' => $nextId]);
    }

    public function getData()
    {
        $fdjs = DB::table('fdjs')
            ->select('id', 'numRetombee', 'nomSupport', 'audience', 'equivalentPub', 'moisRetombee', 'famillePresse', 'typeMedias', 'repartitionRegions')
            ->get();

        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'FDJ')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'FDJ')
            ->get();

        $nextId = $this->getNextUnevaluatedId();

        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('info', 'Toutes les études FDJ ont été analysées.');
        }

        $fdj = Fdj::find($nextId);

        return view('analyst-fdj-analyse', compact('fdjs', 'communiques', 'etudes', 'fdj', 'nextId'));
    }

    public function store_fdj(Request $request, $id)
    {
        $request->validate([
            'numRetombee',
            'nomSupport',
            'audience',
            'equivalentPub',
            'moisRetombee',
            'famillePresse',
            'typeMedias',
            'repartitionRegions',
            'themeAbordes' => 'required',
            'angleRetombee' => 'required',
            'tonaliteRetombees' => 'required',
            'attributImage' => 'required',
            'discoursGroupe' => 'required',
            'discoursOpinion' => 'required',
            'actualite' => 'required',
            'verbatim' => 'required',
            'identificationRetombee' => 'required'
        ]);

        $fdj = Fdj::find($id);

        $fdj->numRetombee = $request->input('numRetombee');
        $fdj->nomSupport = $request->input('nomSupport');
        $fdj->audience = $request->input('audience');
        $fdj->equivalentPub = $request->input('equivalentPub');
        $fdj->moisRetombee = $request->input('moisRetombee');
        $fdj->famillePresse = $request->input('famillePresse');
        $fdj->typeMedias = $request->input('typeMedias');
        $fdj->repartitionRegions = $request->input('repartitionRegions');
        $fdj->themeAbordes = implode('/', $request->input('themeAbordes'));
        $fdj->angleRetombee = implode('/', $request->input('angleRetombee'));
        $fdj->tonaliteRetombees = $request->input('tonaliteRetombees');
        $fdj->attributImage = implode('/', $request->input('attributImage'));
        $fdj->discoursGroupe = implode('/', $request->input('discoursGroupe'));
        $fdj->discoursOpinion = implode('/', $request->input('discoursOpinion'));
        $fdj->actualite = $request->input('actualite');
        $fdj->verbatim = $request->input('verbatim');
        $fdj->identificationRetombee = $request->input('identificationRetombee');

        $fdj->statut = 'analysée';

        $fdj->save();

        $nextId = $this->getNextUnevaluatedId();

        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('success', 'Toutes les études FDJ ont été analysées.');
        }

        return redirect("/analyst-fdj-analyse?id={$nextId}")->with('success', 'Réponses enregistrées avec succès');
    }

    private function getNextUnevaluatedId()
    {
        $nextFdj = Fdj::where('statut', '!=', 'analysée')
                      ->orderBy('id', 'asc')
                      ->first();

        return $nextFdj ? $nextFdj->id : null;
    }

    public function show_fdj()
    {
        $fdj = Fdj::all();

        return view('analyst-fdj-list_analyses', compact('fdj'));
    }

    public function edit_fdj($id)
    {
        $fdj = Fdj::findOrFail($id);

        return view('analyst-fdj-edit_analyse', compact('fdj'));
    }

    public function update_fdj(Request $request, $id)
    {
        $fdj = Fdj::find($id);

        $fdj->numRetombee = $request->input('numRetombee');
        $fdj->nomSupport = $request->input('nomSupport');
        $fdj->audience = $request->input('audience');
        $fdj->equivalentPub = $request->input('equivalentPub');
        $fdj->moisRetombee = $request->input('moisRetombee');
        $fdj->famillePresse = $request->input('famillePresse');
        $fdj->typeMedias = $request->input('typeMedias');
        $fdj->repartitionRegions = $request->input('repartitionRegions');
        $fdj->themeAbordes = implode('/', $request->input('themeAbordes'));
        $fdj->angleRetombee = implode('/', $request->input('angleRetombee'));
        $fdj->tonaliteRetombees = $request->input('tonaliteRetombees');
        $fdj->attributImage = implode('/', $request->input('attributImage'));
        $fdj->discoursGroupe = implode('/', $request->input('discoursGroupe'));
        $fdj->discoursOpinion = implode('/', $request->input('discoursOpinion'));
        $fdj->actualite = $request->input('actualite');
        $fdj->verbatim = $request->input('verbatim');
        $fdj->identificationRetombee = $request->input('identificationRetombee');

        $fdj->statut = 'analysée';

        $fdj->save();

        return redirect('/analyst-fdj-list_analyses')->with('success', 'Réponses modifiées avec succès');
    }

    public function duplicate_fdj($id)
    {
        $fdj = Fdj::find($id);

        return view('analyst-fdj-duplicate_analyse', compact('fdj'));
    }
}