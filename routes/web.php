<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntityPhysiqueController;
use App\Http\Controllers\EntitySocialeController;
use App\Http\Controllers\ContratAcController;

Route::get('/', function () {
    return view('home');
});

//Entity Sociale 
Route::get('/entitysociale', [EntitySocialeController::class, 'indexEntitySociale'])->name('eSociale');

Route::get('/insertentitysociale', [EntitySocialeController::class, 'insertIndexEntitySociale']);
Route::post('/insertentitysociale', [EntitySocialeController::class, 'insertEntitySociale'])->name('insertentitysociale.submit');

//Route::get('/deleteentitysociale', [EntitySocialeController::class, 'deleteIndexEntitySociale2']);
Route::get('/deleteentitysociale/{id}', [EntitySocialeController::class, 'deleteEntitySociale'])->name('deleteentitysociale.submit');

Route::get('/updateentitysociale/{id}', [EntitySocialeController::class, 'updateIndexEntitySociale']);
Route::post('/updateentitysociale/{id}', [EntitySocialeController::class, 'updateEntitySociale'])->name('updateentitysociale.submit');

//Entity Physique
Route::get('/entityphysique', [EntityPhysiqueController::class, 'indexEntityPhysique'])->name('ePhysique');

Route::get('/insertentityphysique', [EntityPhysiqueController::class, 'insertIndexEntityPhysique']);
Route::post('/insertentityphysique', [EntityPhysiqueController::class, 'insertEntityPhysique'])->name('insertentityphysique.submit');

//Route::get('/deleteentityphysique', [EntityPhysiqueController::class, 'deleteIndexEntityPhysique']);
Route::get('/deleteentityphysique/{id}', [EntityPhysiqueController::class, 'deleteEntityPhysique'])->name('deleteentityphysique.submit');

Route::get('/updateentityphysique/{id}', [EntityPhysiqueController::class, 'updateIndexEntityPhysique']);
Route::post('/updateentityphysique/{id}', [EntityPhysiqueController::class, 'updateEntityPhysique'])->name('updateentityphysique.submit');

//Details Entity Physique
Route::get('/entite-physique/{id}', [EntityPhysiqueController::class, 'showDetails'])->name('entityPhysique.details');

//Lister Contrat AC
Route::get('/listercontrat', [ContratAcController::class, 'listerContratAC'])->name('contratAC');
Route::get('/suppcontrat', [ContratAcController::class, 'suppContrat']);
