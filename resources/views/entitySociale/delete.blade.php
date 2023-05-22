@extends('layouts')

@section('title')
Delete
@endsection
@section('content')


<form action="{{ route('deleteentitysociale.submit') }}" method="POST">
    @csrf
    <div>
        <label for="id_entite_social">Enter ID entity Sociale:</label>
        <input type="number" name="id_entite_social" placeholder="ID entity Sociale">
    </div>
    <button type="submit">Delete</button>
</form>

<table>
    <tr>
        <th>ID Entity Sociale</th>
        <th>Raison Social</th>
        <th>Numero Registre</th>
        <th>Patente</th>
        <th>Adresse</th>
        <th>Code Postal</th>
    </tr>
    @foreach ($entitysociale as $es)
    <tr>
        
        <td>{{$es -> id_entite_social}}</td>
        <td>{{$es -> raison_social}}</td>
        <td>{{$es -> numero_registre}}</td>
        <td>{{$es -> patente}}</td>
        <td>{{$es -> adresse}}</td>
        <td>{{$es -> code_postal}}</td>

    </tr>
    @endforeach
</table>

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