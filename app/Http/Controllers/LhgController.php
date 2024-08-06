<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lhg;
use Illuminate\Support\Facades\DB;

class LhgController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function lhg()
    {
        $nextId = $this->getNextUnevaluatedId();
        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('info', 'Toutes les études LHG ont été analysées.');
        }
        return view('analyst-lhg-analyse', ['nextId' => $nextId]);
    }

    public function getData()
    {
        $lhgs = DB::table('lhgs')
            ->select('id', 'numArticle', 'pagePdf', 'nomSupport', 'audience', 'equivalentPub', 'moisRetombee', 'typeSupport', 'famillePresse')
            ->get();

        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'Louvre Hotel Group')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'Louvre Hotel Group')
            ->get();

        $nextId = $this->getNextUnevaluatedId();

        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('info', 'Toutes les études LHG ont été analysées.');
        }
    
        $lhg = Lhg::find($nextId);
    
        return view('analyst-lhg-analyse', compact('lhgs', 'communiques', 'etudes', 'lhg', 'nextId'));
    }

    public function store_lhg(Request $request, $id)
    {
        $request->validate([
            'numArticle',
            'pagePdf',
            'nomSupport',
            'audience',
            'equivalentPub',
            'moisRetombee',
            'typeSupport',
            'famillePresse',
            'poidsLhg' => 'required',
            'citationInvestissement' => 'required',
            'citationLhg' => 'required',
            'theme' => 'required',
            'repriseMessage' => 'required',
            'repriseCP' => 'required',
            'tonaliteTraitement' => 'required',
            'mentionFederico' => 'required',
            'imageFederico' => 'required',
            'paroleRepresentant' => 'required',
            'paroleOpinion' => 'required',
            'actualiteLhg' => 'required',
            'identificationRetombee' => 'required',
            'selectionVerbatim' => 'required',
        ]);

        $lhg = Lhg::find($id);

        $lhg->numArticle = $request->input('numArticle');
        $lhg->pagePdf = $request->input('pagePdf');
        $lhg->nomSupport = $request->input('nomSupport');
        $lhg->audience = $request->input('audience');
        $lhg->equivalentPub = $request->input('equivalentPub');
        $lhg->moisRetombee = $request->input('moisRetombee');
        $lhg->typeSupport = $request->input('typeSupport');
        $lhg->famillePresse = $request->input('famillePresse');
        $lhg->poidsLhg = $request->input('poidsLhg');
        $lhg->citationInvestissement = $request->input('citationInvestissement');
        $lhg->citationLhg = implode('/', $request->input('citationLhg'));
        $lhg->theme = implode('/', $request->input('theme'));
        $lhg->repriseMessage = implode('/', $request->input('repriseMessage'));
        $lhg->repriseCP = implode('/', $request->input('repriseCP'));
        $lhg->tonaliteTraitement = $request->input('tonaliteTraitement');
        $lhg->mentionFederico = $request->input('mentionFederico');
        $lhg->imageFederico = implode('/', $request->input('imageFederico'));
        $lhg->paroleRepresentant = implode('/', $request->input('paroleRepresentant'));
        $lhg->paroleOpinion = implode('/', $request->input('paroleOpinion'));
        $lhg->actualiteLhg = $request->input('actualiteLhg');
        $lhg->identificationRetombee = $request->input('identificationRetombee');
        $lhg->selectionVerbatim = $request->input('selectionVerbatim');

        $lhg->statut='analysée';

        $lhg->save();

        $nextId = $this->getNextUnevaluatedId();

        if ($nextId === null) {
            return redirect('/analyst-dashboard')->with('success', 'Toutes les études LHG ont été analysées.');
        }

        return redirect("/analyst-lhg-analyse?id={$nextId}")->with('success', 'Réponses enregistrées avec succès');
    }

    private function getNextUnevaluatedId()
    {
        $nextLhg = Lhg::where('statut', '!=', 'analysée')
                      ->orderBy('id', 'asc')
                      ->first();

        return $nextLhg ? $nextLhg->id : null;
    }

    public function show_lhg()
    {
        $lhg = Lhg::all();

        return view('analyst-lhg-list_analyses', compact('lhg'));
    }

    public function edit_lhg($id)
    {
        $lhg = Lhg::findOrFail($id);
        
        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'Louvre Hotel Group')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'Louvre Hotel Group')
            ->get();
        
        return view('analyst-lhg-edit_analyse', compact('lhg', 'communiques', 'etudes'));
    }

    public function update_lhg(Request $request, $id)
    {
        $lhg = Lhg::find($id);

        $lhg->numArticle = $request->input('numArticle');
        $lhg->pagePdf = $request->input('pagePdf');
        $lhg->nomSupport = $request->input('nomSupport');
        $lhg->audience = $request->input('audience');
        $lhg->equivalentPub = $request->input('equivalentPub');
        $lhg->moisRetombee = $request->input('moisRetombee');
        $lhg->typeSupport = $request->input('typeSupport');
        $lhg->famillePresse = $request->input('famillePresse');
        $lhg->poidsLhg = $request->input('poidsLhg');
        $lhg->citationInvestissement = $request->input('citationInvestissement');
        $lhg->citationLhg = implode('/', $request->input('citationLhg'));
        $lhg->theme = implode('/', $request->input('theme'));
        $lhg->repriseMessage = implode('/', $request->input('repriseMessage'));
        $lhg->repriseCP = implode('/', $request->input('repriseCP'));
        $lhg->tonaliteTraitement = $request->input('tonaliteTraitement');
        $lhg->mentionFederico = $request->input('mentionFederico');
        $lhg->imageFederico = implode('/', $request->input('imageFederico'));
        $lhg->paroleRepresentant = implode('/', $request->input('paroleRepresentant'));
        $lhg->paroleOpinion = implode('/', $request->input('paroleOpinion'));
        $lhg->actualiteLhg = $request->input('actualiteLhg');
        $lhg->identificationRetombee = $request->input('identificationRetombee');
        $lhg->selectionVerbatim = $request->input('selectionVerbatim');

        $lhg->statut='analysée';

        $lhg->save();

        return redirect('/analyst-lhg-list_analyses')->with('success', 'Réponses modifiées avec succès');
    }

    public function duplicate_lhg($id)
    {
        $lhg = Lhg::findOrFail($id);
        
        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'Louvre Hotel Group')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'Louvre Hotel Group')
            ->get();

        return view('analyst-lhg-duplicate_analyse', compact('lhg', 'communiques', 'etudes'));
    }
}