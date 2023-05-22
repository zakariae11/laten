<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EntityPhysiqueController extends Controller
{
    // Lister Entity Physique
    public function indexEntityPhysique(): View
    {


        $entityphysique = DB::table('entitephysique')->get();
        //$entityphysique = "select * from entitephysique";

        return view('entityphysique.index', ['entityphysique' => $entityphysique]);
    }


    // créer Entity Physique
    public function insertEntityPhysique(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'libelle' => 'required|string',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $libelle = $request->input('libelle');
        $numero_client = $request->input('numero_client');
        $id_entite_social = $request->input('id_entite_social');
        $adresse = $request->input('adresse');
        $code_postal = $request->input('code_postal');
        $status_ep = $request->input('status_ep');
        $date_creation = $request->input('date_creation');


        DB::table('entitephysique')->insert(
            [
                'libelle' => $libelle,
                'numero_client' => $numero_client,
                'id_entite_social' => $id_entite_social,
                'adresse' => $adresse,
                'code_postal' => $code_postal,
                'status_ep' => $status_ep,
                'date_creation' => $date_creation,
            ],
        );
        return redirect('/entityphysique')->with(['success' => 'Entity Physique added successfully']);
    }
    public function insertIndexEntityPhysique()
    {
        $entitysociale = DB::table('entitysociale')->get();
        $entityphysique = DB::table('entitephysique')->get();
        return view('entityphysique.insert', ['entityphysique' => $entityphysique, 'entitysociale' => $entitysociale]);
    }

    // delete entity physique
    public function deleteEntityPhysique(int $id)
    {
        DB::table('entitephysique')->where('id_entite_physique', '=', $id)->delete();
        return redirect('/entityphysique')->with(['success' => 'Entity Physique with id ' . $id . 'deleted successfully']);
    }

    // Modifier Entity Physique
    public function updateEntityPhysique(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'libelle' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //$id_entite_physique = $request->input('id_entite_physique');
        $libelle = $request->input('libelle');
        $numero_client = $request->input('numero_client');
        $id_entite_social = $request->input('id_entite_social');
        $adresse = $request->input('adresse');
        $code_postal = $request->input('code_postal');
        $status_ep = $request->input('status_ep');
        $date_creation = $request->input('date_creation');

        DB::table('entitephysique')
            ->where('id_entite_physique', $id)
            ->update([
                'libelle' => $libelle,
                'numero_client' => $numero_client,
                'id_entite_social' => $id_entite_social,
                'adresse' => $adresse,
                'code_postal' => $code_postal,
                'status_ep' => $status_ep,
                'date_creation' => $date_creation,
            ]);
        $entitysociale = DB::table('entitysociale')->get();

        return redirect('/entityphysique')->with(['entitysociale' => $entitysociale, 'success' => 'Entity Physique with id ' . $id . ' modified successfully']);
    }
    public function updateIndexEntityPhysique($id)
    {
        $entitysociale = DB::table('entitysociale')->get();
        $entityphysique = DB::table('entitephysique')->where('id_entite_physique', $id)->get();
        return view('entityPhysique.update', ['entityphysique' => $entityphysique, 'entitysociale' => $entitysociale, 'id' => $id]);
    }

    // Details Entity Physique
    public function showDetails(int $id)
    {
        $entityphysique = DB::table('entitephysique')
            ->where('id_entite_physique', '=', $id)->get();
        $contrats = DB::table('contrat')
            ->where('id_entite_physique', '=', $id)->get();
        $contactRoles = DB::table('contactRole')
            ->where('id_entite_physique', '=', $id)
            ->join('contact', 'contactRole.id_contact', '=', 'contact.id_contact')
            ->get();
        $articles = DB::table('article as a')
            ->join('contrat as c', 'a.id_contrat', '=', 'c.id_contrat')
            ->where('c.id_entite_physique', '=', $id)
            ->get();

        return view('entityPhysique.details', ['entityphysique' => $entityphysique, 'contrats' => $contrats, 'contactRoles' => $contactRoles, 'articles' => $articles]);
    }
}
