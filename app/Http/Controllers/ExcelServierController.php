<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ServierImport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class ExcelServierController extends Controller
{
    public function index()
    {
        $analysts = User::where('type', 'analyst')->get();
        return view('excel-servier.index', compact('analysts'));
    }

    public function importExcelData(Request $request)
    {
        $request->validate([
            'import_file' => 'required|file',
            'analystAssociee' => 'required|exists:users,id',
            'etudeAssociee' => 'required|string',
            'date_fin' => 'required|string',
            'statut' => 'string|nullable',
        ]);

        $analyst = User::findOrFail($request->input('analystAssociee'));

        $additionalData = [
            'analystAssociee' => $analyst->username,
            'etudeAssociee' => $request->input('etudeAssociee'),
            'date_fin' => $request->input('date_fin'),
            'statut' => 'importée',
        ];

        Excel::import(new ServierImport($additionalData), $request->file('import_file'));

        return redirect()->back()->with('status', 'Data Imported Successfully.');
    }
}