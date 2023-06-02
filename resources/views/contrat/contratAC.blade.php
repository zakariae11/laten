@extends('layouts')

@section('title')
Lister Contrat AC
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div style="margin-bottom: 10px;">
    <form action="/" method="get">
        @csrf
        <button type="submit" class="btn btn-success">Home</button>
    </form>
</div>


<table class="table table-striped table-hover">
    <h1>Contrats</h1>
    <tr class="text-center">
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
    <tr class="text-center">

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
<div>
    <form action="suppcontrat" method="get">
        @csrf
        <button type="submit" class="btn btn-primary">Remove</button>
    </form>
</div>

@endsection