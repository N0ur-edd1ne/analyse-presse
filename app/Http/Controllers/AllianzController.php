<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Allianz;


class AllianzController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function allianz()
    {
        $nextId = $this->getNextUnevaluatedId();
        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('info', 'Toutes les études Allianz ont été analysées.');
        }
        return view('analyst-allianz-analyse', ['nextId' => $nextId]);
    }

    public function getData()
    {
        $allianzs = DB::table('allianzs')
            ->select('id', 'numArticle', 'nomSupport', 'dateRetombee', 'moisRetombee', 'audience', 'typeSupport', 'famillePresse')
            ->get();

        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'Allianz France')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'Allianz France')
            ->get();

        $nextId = $this->getNextUnevaluatedId();

        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('info', 'Toutes les études Allianz ont été analysées.');
        }
        
        $allianz = Allianz::find($nextId);
        
        return view('analyst-allianz-analyse', compact('allianzs', 'communiques', 'etudes', 'allianz', 'nextId'));
    }

    public function store_allianz(Request $request, $id)
    {
        $request->validate([
            'numArticle',
            'nomSupport',
            'dateRetombee',
            'moisRetombee',
            'audience',
            'typeSupport',
            'famillePresse',
            'theme' => 'required|array',
            'tonaliteTraitement' => 'required',
            'repriseMessage' => 'required|array',
            'paroleRepresentant' => 'required|array',
            'paroleOpinion' => 'required|array',
            'repriseCP' => 'required|array',
            'actualiteAlz' => 'required',
            'verbatim' => 'required',
        ]);

        $allianz = Allianz::find($id);

        $allianz->numArticle = $request->input('numArticle');
        $allianz->nomSupport = $request->input('nomSupport');
        $allianz->dateRetombee = $request->input('dateRetombee');
        $allianz->moisRetombee = $request->input('moisRetombee');
        $allianz->audience = $request->input('audience');
        $allianz->typeSupport = $request->input('typeSupport');
        $allianz->famillePresse = $request->input('famillePresse');
        $allianz->theme = implode('/', $request->input('theme'));
        $allianz->tonaliteTraitement = $request->input('tonaliteTraitement');
        $allianz->repriseMessage = implode('/', $request->input('repriseMessage'));
        $allianz->paroleRepresentant = implode('/', $request->input('paroleRepresentant'));
        $allianz->paroleOpinion = implode('/', $request->input('paroleOpinion'));
        $allianz->repriseCP = implode('/', $request->input('repriseCP'));
        $allianz->actualiteAlz = $request->input('actualiteAlz');
        $allianz->verbatim = $request->input('verbatim');

        $allianz->statut='analysée';

        $allianz->save();

        $nextId = $this->getNextUnevaluatedId();

        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('success', 'Toutes les études Allianz ont été analysées.');
        }

        return redirect("/analyst-allianz-analyse?id={$nextId}")->with('success', 'Réponses enregistrées avec succès');
    }

    private function getNextUnevaluatedId()
    {
        $nextAllianz = Allianz::where('statut', '!=', 'analysée')
                      ->orderBy('id', 'asc')
                      ->first();

        return $nextAllianz ? $nextAllianz->id : null;
    }

    public function show_allianz()
    {
        $allianz = Allianz::all();

        return view('analyst-allianz-list_analyses', compact('allianz'));
    }

    public function edit_allianz($id)
    {
        $allianz = Allianz::findOrFail($id);
        
        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'Allianz France')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'Allianz France')
            ->get();
        
        return view('analyst-allianz-edit_analyse', compact('allianz', 'communiques', 'etudes'));
    }

    public function update_allianz(Request $request, $id)
    {
        $allianz = Allianz::find($id);

        $allianz->numArticle = $request->input('numArticle');
        $allianz->nomSupport = $request->input('nomSupport');
        $allianz->dateRetombee = $request->input('dateRetombee');
        $allianz->moisRetombee = $request->input('moisRetombee');
        $allianz->audience = $request->input('audience');
        $allianz->typeSupport = $request->input('typeSupport');
        $allianz->famillePresse = $request->input('famillePresse');
        $allianz->theme = implode('/', $request->input('theme'));
        $allianz->tonaliteTraitement = $request->input('tonaliteTraitement');
        $allianz->repriseMessage = implode('/', $request->input('repriseMessage'));
        $allianz->paroleRepresentant = implode('/', $request->input('paroleRepresentant'));
        $allianz->paroleOpinion = implode('/', $request->input('paroleOpinion'));
        $allianz->repriseCP = implode('/', $request->input('repriseCP'));
        $allianz->actualiteAlz = $request->input('actualiteAlz');
        $allianz->verbatim = $request->input('verbatim');

        $allianz->statut='analysée';

        $allianz->save();

        return redirect('/analyst-allianz-list_analyses')->with('success', 'Réponses modifiées avec succès');
    }

    public function duplicate_allianz($id)
    {
        $allianz = Allianz::findOrFail($id);
        
        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'Allianz France')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'Allianz France')
            ->get();

        return view('analyst-allianz-duplicate_analyse', compact('allianz', 'communiques', 'etudes'));
    }
}