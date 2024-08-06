<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etude;

class EtudeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudes = Etude::latest()->get();

        return view('etudes.index', [ 'etudes' => $etudes ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etudes = Etude::all();

        return view('etudes.create', [ 'etudes' => $etudes ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numerotationE' => 'required|string',
            'idInputE' => 'required|string',
            'libelleE' => 'required|string',
            'etudeAssocieeE' => 'required|string'
        ]);

        $etude = Etude::create([
            'numerotationE' => $request->input('numerotationE'),
            'idInputE' => $request->input('idInputE'),
            'libelleE' => $request->input('libelleE'),
            'etudeAssocieeE' => $request->input('etudeAssocieeE')
        ]);

        return redirect()->route('etudes.index')->with('success', 'Etude created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etude $etude)
    {
        return view('etudes.show', [ 'etude' => $etude ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etude $etude)
    {
        return view('etudes.edit', [ 'etude' => $etude ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etude $etude)
    {
        $request->validate([
            'numerotationE' => 'required|string',
            'idInputE' => 'required|string',
            'libelleE' => 'required|string',
            'etudeAssocieeE' => 'required|string'
        ]);

        $etude->update([
            'numerotationE' => $request->input('numerotationE'),
            'idInputE' => $request->input('idInputE'),
            'libelleE' => $request->input('libelleE'),
            'etudeAssocieeE' => $request->input('etudeAssocieeE')
        ]);

        return redirect()->route('etudes.index')->with('success', 'Etude updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etude $etude)
    {
        $etude->delete();

        return redirect()->route('etudes.index')->with('success', 'Etude deleted successfully');
    }
}