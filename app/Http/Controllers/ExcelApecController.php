<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ApecImport;
use App\Models\User;

class ExcelApecController extends Controller
{
    public function index()
    {
        $analysts = User::where('type', 'analyst')->get();
        return view('excel-apec.index', compact('analysts'));
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

        Excel::import(new ApecImport($additionalData), $request->file('import_file'));

        return redirect()->back()->with('status', 'Data Imported Successfully.');
    }
}