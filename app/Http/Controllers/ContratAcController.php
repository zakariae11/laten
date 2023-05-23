<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ContratAcController extends Controller
{
    // Lister contrat
    public function listerContratAC()
    {
        $contrats = DB::table('contrat as c1')
            ->select('c1.*')
            ->join('contrat as c2', 'c1.numero_contrat', '=', 'c2.numero_contrat')
            ->where('c1.statut_contrat', '=', 'AC')
            ->where('c2.statut_contrat', '=', 'AC')
            ->where('c1.version_contrat', '<>', 'c2.version_contrat')
            ->distinct()
            ->get();

        return view('contrat.contratAC', ['contrats' => $contrats]);
    }

    public function suppContrat()
    {
        $contrats = DB::table('contrat as c1')
            ->join('contrat as c2', 'c1.numero_contrat', '=', 'c2.numero_contrat')
            ->select('c1.*')
            ->where('c1.statut_contrat', '=', 'AC')
            ->where('c2.statut_contrat', '=', 'AC')
            ->where('c1.version_contrat', '<>', 'c2.version_contrat')
            ->whereRaw('TIMESTAMPDIFF(DAY, c1.date_demarrage, NOW()) > TIMESTAMPDIFF(DAY, c2.date_demarrage, NOW())')
            ->get();
        return view('contrat.removeContrat', ['contrats' => $contrats]);
    } 
}
