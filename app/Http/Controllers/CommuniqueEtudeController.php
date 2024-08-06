<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Communique;
use App\Models\Etude;
use Illuminate\Support\Facades\DB;

class CommuniqueEtudeController extends Controller
{
    public function index()
    {
        $communiques = Communique::with('etudes')->get();
        $etudes = Etude::with('communiques')->get();

        return view('cpetudes.index', compact('communiques', 'etudes'));
    }

    public function getRelatedStudy(Request $request)
    {
        $communiqueId = $request->communiqueId;
        $etudeName = $request->etude;

        $etude = DB::table('cpetudes')
            ->join('communiques', 'cpetudes.idInputC', '=', 'communiques.idInputC')
            ->join('etudes', 'cpetudes.idInputE', '=', 'etudes.idInputE')
            ->select('etudes.idInputE', 'etudes.libelleE')
            ->where('cpetudes.idInputC', $communiqueId)
            ->where('etudes.etudeAssocieeE', '=', $etudeName)
            ->where('communiques.etudeAssocieeC', '=', $etudeName)
            ->first();

        if ($etude) {
            return response()->json($etude);
        }

        return response()->json(['message' => 'Étude non trouvée.'], 404);
    }

    public function getRelatedCommunique(Request $request)
    {
        $etudeId = $request->etudeId;
        $etudeName = $request->etudeName;

        $communique = DB::table('cpetudes')
            ->join('etudes', 'cpetudes.idInputE', '=', 'etudes.idInputE')
            ->join('communiques', 'cpetudes.idInputC', '=', 'communiques.idInputC')
            ->select('communiques.idInputC', 'communiques.libelleC')
            ->where('cpetudes.idInputE', $etudeId)
            ->where('communiques.etudeAssocieeC', '=', $etudeName)
            ->where('etudes.etudeAssocieeE', '=', $etudeName)
            ->first();

        if ($communique) {
            return response()->json($communique);
        }

        return response()->json(['message' => 'Communiqué non trouvé.'], 404);
    }

    public function associateStudyToCommunique(Request $request)
    {
        $request->validate([
            'communiqueIdInput' => 'required|exists:communiques,idInputC',
            'etudeIdInput' => 'required|exists:etudes,idInputE',
        ]);

        $communique = Communique::where('idInputC', $request->communiqueIdInput)->first();
        $etude = Etude::where('idInputE', $request->etudeIdInput)->first();

        if ($communique && $etude) {
            $exists = DB::table('cpetudes')->where([
                ['idInputC', '=', $request->communiqueIdInput],
                ['idInputE', '=', $request->etudeIdInput]
            ])->exists();

            if (!$exists) {
                DB::table('cpetudes')->insert([
                    'idInputC' => $request->communiqueIdInput,
                    'idInputE' => $request->etudeIdInput,
                ]);

                return redirect()->back()->with('status', 'Association ajoutée avec succès.');

            } else {
                return redirect()->back()->with('status', 'L\'association existe déjà.');
            }
        }
        return redirect()->back()->with('status', 'Association impossible.');
    }
}