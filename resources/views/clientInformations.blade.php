@extends('layouts')

@section('title')
Client Informations
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<h1>Client sans remises et avec contrat preapaid</h1>
<table class="table table-striped table-hover">

    <tr>
        <th>ID Entity Physique</th>
        <th>ID Entity Sociale</th>
        <th>ID Contrat</th>
        <th>ID Article</th>
        <th>Libelle</th>
        <th>Numero Client</th>
        <th>Adresse</th>
        <th>Status EP</th>
        <th>Type Contrat</th>
        <th>Montant</th>
        <th>Remise</th>
        <th>Prix Facture</th>
        <th>Devise</th>
        <th>Date de Creation</th>
        <th>Data Demmarage</th>

    </tr>
    @foreach ($informations as $info)
    <tr>
        <td>{{$info -> id_entite_physique}}</td>
        <td>{{$info -> id_entite_social}}</td>
        <td>{{$info -> id_contrat}}</td>
        <td>{{$info -> id_article}}</td>
        <td>{{$info -> libelle}}</td>
        <td>{{$info -> numero_client}}</td>
        <td>{{$info -> adresse}}</td>
        <td>{{$info -> status_ep}}</td>
        <td>{{$info -> type_contrat}}</td>
        <td>{{$info -> montant}}</td>
        <td>{{$info -> remise}}</td>
        <td>{{$info -> prix_facture}}</td>
        <td>{{$info -> devise}}</td>
        <td>{{$info -> date_creation}}</td>
        <td>{{$info -> date_demarrage}}</td>
    </tr>
    @endforeach
</table>

@endsection