@extends('layouts')

@section('title')
Delete
@endsection
@section('content')


<form action="{{ route('deleteentityphysique.submit') }}" method="POST">
    @csrf
    <div>
        <label for="id_entite_physique">Enter ID entity Physique:</label>
        <input type="number" name="id_entite_physique" placeholder="ID entity Physique">
    </div>
    <button type="submit">Delete</button>
</form>


<table>
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