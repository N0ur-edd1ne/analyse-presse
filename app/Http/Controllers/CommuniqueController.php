<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Communique;

class CommuniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $communiques = Communique::latest()->get();

        return view('communiques.index', [ 'communiques' => $communiques ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $communiques = Communique::all();

        return view('communiques.create', [ 'communiques' => $communiques ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'numerotationC' => 'required|string',
        'idInputC' => 'required|string',
        'libelleC' => 'required|string',
        'etudeAssocieeC' => 'required|string'
    ]);

    $communique = Communique::create([
        'numerotationC' => $request->input('numerotationC'),
        'idInputC' => $request->input('idInputC'),
        'libelleC' => $request->input('libelleC'),
        'etudeAssocieeC' => $request->input('etudeAssocieeC')
    ]);

    return redirect()->route('communiques.index')->with('success', 'Communique created successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(Communique $communique)
    {
        return view('communiques.show', [ 'communique' => $communique ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Communique $communique)
    {
        return view('communiques.edit', [ 'communique' => $communique ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Communique $communique)
    {
        $request->validate([
            'numerotationC' => 'required|string',
            'idInputC' => 'required|string',
            'libelleC' => 'required|string',
            'etudeAssocieeC' => 'required|string'
        ]);

        $communique->update([
            'numerotationC' => $request->input('numerotationC'),
            'idInputC' => $request->input('idInputC'),
            'libelleC' => $request->input('libelleC'),
            'etudeAssocieeC' => $request->input('etudeAssocieeC')
        ]);

        return redirect()->route('communiques.index')->with('success', 'Communique updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Communique $communique)
    {
        $communique->delete();

        return redirect()->route('communiques.index')->with('success', 'Communique deleted successfully');
    }
}