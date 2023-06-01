<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EntitySocialeController extends Controller
{
    // Afficher Entity Sociale 
    public function indexEntitySociale(): View
    {


        $entitysociale = DB::table('entitysociale')->get();
        $entitysociale = DB::select('select * from entitysociale');

        return view('entitySociale.index', ['entitysociale' => $entitysociale]);
    }


    // Créer Entity Sociale 
    public function insertEntitySociale(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'raison_social' => 'required|string',
            'numero_registre' => 'required|int',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $raison_social = $request->input('raison_social');
        $numero_registre = $request->input('numero_registre');
        $patente = $request->input('patente');
        $adresse = $request->input('adresse');
        $code_postal = $request->input('code_postal');

        DB::table('entitysociale')->insert(
            [
                'raison_social' => $raison_social,
                'numero_registre' => $numero_registre,
                'patente' => $patente,
                'adresse' => $adresse,
                'code_postal' => $code_postal
            ],
        );


        return redirect('/entitysociale')->with(['success' => 'Entity Sociale added successfully']);
    }
    public function insertIndexEntitySociale()
    {
        $entitysociale = DB::table('entitysociale')->get();
        return view('entitySociale.insert', ['entitysociale' => $entitysociale]);
    }


    // delete entity sociale
    public function deleteEntitySociale(int $id)
    {
        DB::table('entitysociale')->where('id_entite_social', '=', $id)->delete();
        return redirect('/entitysociale')->with(['success' => 'Entity Sociale with id ' . $id . 'deleted successfully']);
    }

    // Modifier Entity Sociale 
    public function updateEntitySociale(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'raison_social' => 'required|string',
            'numero_registre' => 'required|int',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $raison_social = $request->input('raison_social');
        $numero_registre = $request->input('numero_registre');
        $patente = $request->input('patente');
        $adresse = $request->input('adresse');
        $code_postal = $request->input('code_postal');

        DB::table('entitysociale')
            ->where('id_entite_social', $id)
            ->update([
                'raison_social' => $raison_social,
                'numero_registre' => $numero_registre,
                'patente' => $patente,
                'adresse' => $adresse,
                'code_postal' => $code_postal
            ]);


        $entitysociale = DB::table('entitysociale')->get();
        return redirect('/entitysociale')->with(['entitysociale' => $entitysociale, 'id' => $id, 'success' => 'Entity Sociale with id ' . $id . 'deleted successfully']);
    }
    public function updateIndexEntitySociale($id)
    {
        $entitysociale = DB::table('entitysociale')->where('id_entite_social', '=', $id)->get();
        return view('entitySociale.update', ['entitysociale' => $entitysociale, 'id' => $id]);
    }
}
