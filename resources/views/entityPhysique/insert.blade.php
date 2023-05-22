@extends('layouts')

@section('title')
Insert
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<form action="{{ route('insertentityphysique.submit') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <label for="libelle" class="form-label">Libelle:</label>
        <input type="text" name="libelle" class="form-control" placeholder="Libelle">
    </div>
    <div class="row mb-3">
        <label for="id_entite_social" class="form-label">Entity Sociale</label>
        <select name="id_entite_social" id="id_entite_social" class="form-select">
            @foreach ($entitysociale as $es)
            <option value="{{$es -> id_entite_social}}">{{$es -> raison_social}}</option>
            @endforeach
        </select>
    </div>
    <div class="row mb-3">
        <label for="numero_client" class="form-label">Numero Client:</label>
        <input type="text" name="numero_client" class="form-control" placeholder="Numero Client">
    </div>
    <div class="row mb-3">
        <label for="adresse" class="form-label">Adresse:</label>
        <input type="text" name="adresse" class="form-control" placeholder="Adresse">
    </div>
    <div class="row mb-3">
        <label for="code_postal" class="form-label">Code Postal:</label>
        <input type="text" name="code_postal" class="form-control" placeholder="Code Postal">
    </div>
    <div class="row mb-3">
        <label for="status_ep" class="form-label">Status EP:</label>
        <select name="status_ep" id="status_ep" class="form-select">
            <option value="PR " selected>Prospect</option>
            <option value="AC">Active</option>
            <option value="KO">Désactivé</option>
        </select>
    </div>
    <div class="row mb-3">
        <label for="date_creation" class="form-label">Date de Creation:</label>
        <input type="date" name="date_creation" class="form-control" placeholder="Status EP">
    </div>
    <div class="row mb-3">
        <button type="submit" class="btn btn-primary">Insert</button>
    </div>
</form>

@endsection

<style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
        background-color: white;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: gray;
        color: white;
    }
</style>