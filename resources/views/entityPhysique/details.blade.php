@extends('layouts')

@section('title')
Entity Details
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<h1>Détails des contrats, articles et contacts </h1>
<table class="table table-striped table-hover">
    <h1>Entity Physique</h1>
    <tr>
        <th>ID Entity Physique</th>
        <th>ID Entity Sociale</th>
        <th>Libelle</th>
        <th>Numero Client</th>
        <th>Adresse</th>
        <th>Code Postal</th>
        <th>Status EP</th>
        <th>Date de Creation</th>
    </tr>
    @foreach ($entityphysique as $ep)
    <tr>
        <td>{{$ep -> id_entite_physique}}</td>
        <td>{{$ep -> id_entite_social}}</td>
        <td>{{$ep -> libelle}}</td>
        <td>{{$ep -> numero_client}}</td>
        <td>{{$ep -> adresse}}</td>
        <td>{{$ep -> code_postal}}</td>
        <td>{{$ep -> status_ep}}</td>
        <td>{{$ep -> date_creation}}</td>
    </tr>
    @endforeach
</table>

<table class="table table-striped table-hover">
    <h1>Contrats</h1>
    <tr>

        <th>ID Contrat</th>
        <th>ID Entity Physique</th>
        <th>Numero Contrat</th>
        <th>Statut Contrat</th>
        <th>Version Contrat</th>
        <th>Type Contrat</th>
        <th>Frequence Facturation</th>
        <th>Date de Creation</th>
        <th>Data Demmarage</th>
    </tr>
    @foreach ($contrats as $contrat)
    <tr>

        <td>{{$contrat -> id_contrat}}</td>
        <td>{{$contrat -> id_entite_physique}}</td>
        <td>{{$contrat -> numero_contrat}}</td>
        <td>{{$contrat -> statut_contrat}}</td>
        <td>{{$contrat -> version_contrat}}</td>
        <td>{{$contrat -> type_contrat}}</td>
        <td>{{$contrat -> frequence_facturation}}</td>
        <td>{{$contrat -> date_creation}}</td>
        <td>{{$contrat -> date_demarrage}}</td>
    </tr>
    @endforeach
</table>

<table class="table table-striped table-hover">
    <h1>Contacts</h1>
    <tr>

        <th>ID Contact</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
        <th>CIN</th>
        <th>Role</th>

    </tr>
    @foreach ($contactRoles as $contactRoles)
    <tr>
        <td>{{$contactRoles -> id_contact}}</td>
        <td>{{$contactRoles -> nom}}</td>
        <td>{{$contactRoles -> prenom}}</td>
        <td>{{$contactRoles -> adresse}}</td>
        <td>{{$contactRoles -> cin}}</td>
        <td>{{$contactRoles -> role}}</td>
    </tr>
    @endforeach
</table>

<table class="table table-striped table-hover">
    <h1>Articles</h1>
    <tr class="text-center">
        <th>ID Article</th>
        <th>ID Contrat</th>
        <th>Libelle</th>
        <th>Montant</th>
        <th>Remise</th>
        <th>Devise</th>
        <th>Date de création</th>
        <th>Prix Facture</th>
    </tr>
    @foreach ($articles as $article)
    <tr class="text-center">
        <td>{{$article -> id_article}}</td>
        <td>{{$article -> id_contrat}}</td>
        <td>{{$article -> libelle}}</td>
        <td>{{$article -> libelle}}</td>
        <td>{{$article -> remise}}</td>
        <td>{{$article -> remise}}</td>
        <td>{{$article -> date_creation}}</td>
        <td>{{$article -> prix_facture}}</td>
    </tr>
    @endforeach
</table>

@endsection





