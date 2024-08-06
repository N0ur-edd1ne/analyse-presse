<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servier;
use Illuminate\Support\Facades\DB;

class ServierController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function servier()
    {
        return view('analyst-servier-analyse');
    }

    public function getData()
    {
        $serviers = DB::table('serviers')
            ->select('id', 'numArticle', 'nomSupport', 'dateRetombee')
            ->get();

        $communiques = DB::table('communiques')
            ->select('numerotationC', 'idInputC', 'libelleC', 'etudeAssocieeC')
            ->where('etudeAssocieeC', 'Servier')
            ->get();

        $etudes = DB::table('etudes')
            ->select('numerotationE', 'idInputE', 'libelleE', 'etudeAssocieeE')
            ->where('etudeAssocieeE', 'Servier')
            ->get();

        // Assuming we want to pass the first Servier record to the view
        $servier = $serviers->first();

        return view('analyst-servier-analyse', compact('serviers', 'communiques', 'etudes', 'servier'));
    }

    public function store_servier(Request $request, $id)
    {
        $request->validate([
            'numArticle',
            'nomSupport',
            'dateRetombee',
            'citation' => 'required|array',
            'typePresse' => 'required',
            'famillePresse' => 'required',
            'tonalite' => 'required',
            'attributImage' => 'required|array',
            'theme' => 'required|array',
            'repriseCP' => 'required|array',
            'paroleRepresentant' => 'required|array',
            'autreRepresentant' => 'required',
            'paroleOpinion' => 'required|array',
            'autreOpinion' => 'required',
            'actualite' => 'required',
            'verbatim' => 'required'
        ]);

        $servier = Servier::find($id);

        $servier->numArticle = $request->input('numArticle');
        $servier->nomSupport = $request->input('nomSupport');
        $servier->dateRetombee = $request->input('dateRetombee');
        $servier->citation = implode('/', $request->input('citation'));
        $servier->typePresse = $request->input('typePresse');
        $servier->famillePresse = $request->input('famillePresse');
        $servier->tonalite = $request->input('tonalite');
        $servier->attributImage = implode('/', $request->input('attributImage')); 
        $servier->theme = implode('/', $request->input('theme'));
        $servier->repriseCP = implode('/', $request->input('repriseCP'));
        $servier->paroleRepresentant = implode('/', $request->input('paroleRepresentant')); 
        $servier->autreRepresentant = $request->input('autreRepresentant');
        $servier->paroleOpinion = implode('/', $request->input('paroleOpinion'));
        $servier->autreOpinion = $request->input('autreOpinion');
        $servier->actualite = $request->input('actualite');
        $servier->verbatim = $request->input('verbatim');

        $servier->statut='analysée';

        $servier->save();

        return redirect('/analyst-servier-list_analyses')->with('success', 'Réponses enregistrées avec succès');
    }

    public function show_servier()
    {
        $data = Servier::all();

        return view('analyst-servier-list_analyses', compact('data'));
    }

    public function edit_servier($id)
    {
        $data = Servier::findOrFail($id);

        return view('analyst-servier-edit_analyse', compact('data'));
    }

    public function update_servier(Request $request, $id)
    {
        $servier = Servier::find($id);

        $servier->numArticle = $request->input('numArticle');
        $servier->nomSupport = $request->input('nomSupport');
        $servier->dateRetombee = $request->input('dateRetombee');
        $servier->citation = implode('/', $request->input('citation'));
        $servier->typePresse = $request->input('typePresse');
        $servier->famillePresse = $request->input('famillePresse');
        $servier->tonalite = $request->input('tonalite');
        $servier->attributImage = implode('/', $request->input('attributImage')); 
        $servier->theme = implode('/', $request->input('theme'));
        $servier->repriseCP = implode('/', $request->input('repriseCP'));
        $servier->paroleRepresentant = implode('/', $request->input('paroleRepresentant')); 
        $servier->autreRepresentant = $request->input('autreRepresentant');
        $servier->paroleOpinion = implode('/', $request->input('paroleOpinion'));
        $servier->autreOpinion = $request->input('autreOpinion');
        $servier->actualite = $request->input('actualite');
        $servier->verbatim = $request->input('verbatim');

        $servier->statut='analysée';

        $servier->save();

        return redirect('/analyst-servier-list_analyses')->with('success', 'Réponses modifiées avec succès');
    }

    public function duplicate_servier($id)
    {
        $data = Servier::find($id)->replicate();

        return view('analyst-servier-duplicate_analyse', compact('data'));
    }
}