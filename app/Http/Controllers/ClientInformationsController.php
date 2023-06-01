<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientInformationsController extends Controller
{
    public function clientInformations(){
        $informations =  DB::table('entitephysique as ep')
            ->join('contrat as c', 'ep.id_entite_physique', '=', 'c.id_entite_physique')
            ->join('article as a', 'c.id_contrat', '=', 'a.id_contrat')
            ->where('c.type_contrat', '=', 'PREPAID')
            ->where('a.remise' , '=', 0)
            ->get();
        return view('clientInformations', ['informations' => $informations]);
    }
    public function updateArticlesDiscount()
    { DB::table('entitephysique as ep')
        ->join('contrat as c', 'ep.id_entite_physique', '=', 'c.id_entite_physique')
        ->join('article as a', 'c.id_contrat', '=', 'a.id_contrat')
        ->where('c.type_contrat', '=', 'PREPAID')
        ->where('a.remise' , '=', 0)
        ->update(['a.remise',10]);       
    }
}
