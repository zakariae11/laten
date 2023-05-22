@extends('layouts')

@section('title')
Select Entity Physique
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<div>
    <form action="insertentityphysique" method="get">
        @csrf
        <button type="submit" class="btn btn-primary">Insert Entity Physique</button>
    </form>
</div>

<table class="table table-striped table-hover">
    <tr class="text-center">
        <th>ID Entity Physique</th>
        <th>ID Entity Sociale</th>
        <th>Libelle</th>
        <th>Numero Client</th>
        <th>Adresse</th>
        <th>Code Postal</th>
        <th>Status EP</th>
        <th>Date de Creation</th>
        <th>Actions</th>
    </tr>
    @foreach ($entityphysique as $ep)
    <tr class="text-center">

        <td>{{$ep -> id_entite_physique}}</td>
        <td>{{$ep -> id_entite_social}}</td>
        <td>{{$ep -> libelle}}</td>
        <td>{{$ep -> numero_client}}</td>
        <td>{{$ep -> adresse}}</td>
        <td>{{$ep -> code_postal}}</td>
        <td>{{$ep -> status_ep}}</td>
        <td>{{$ep -> date_creation}}</td>
        <td class="btn-group">
                <a href="{{ route('updateentityphysique.submit', $ep->id_entite_physique) }}" class="btn btn-success">Modifier</a>
                <a href="{{ route('deleteentityphysique.submit', $ep->id_entite_physique) }}" class="btn btn-danger">Supprimer</a>
                <a href="{{ route('entityPhysique.details', $ep->id_entite_physique) }}" class="btn btn-info">Details</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
