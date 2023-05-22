@extends('layouts')

@section('title')
Select Entity Sociale
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<div>
  <form action="insertentitysociale" method="get">
    @csrf
    <button type="submit" class="btn btn-primary">Insert Entity Sociale</button>
  </form>
</div>

<table class="table table-striped table-hover">
  <tr class="text-center">
    <th>ID</th>
    <th>Raison Social</th>
    <th>Numero Registre</th>
    <th>Patente</th>
    <th>Adresse</th>
    <th>Code Postal</th>
    <th>Actions</th>
  </tr>
  @foreach ($entitysociale as $es)
  <tr class="text-center">
    <td>{{$es -> id_entite_social}}</td>
    <td>{{$es -> raison_social}}</td>
    <td>{{$es -> numero_registre}}</td>
    <td>{{$es -> patente}}</td>
    <td>{{$es -> adresse}}</td>
    <td>{{$es -> code_postal}}</td>
    <td class="btn btn-group btn-block">
      <a href="{{ route('updateentitysociale.submit', $es->id_entite_social) }}" class="btn btn-success">Modifier</a>
      <a href="{{ route('deleteentitysociale.submit', $es->id_entite_social) }}" class="btn btn-danger">Supprimer</a>
    </td>

  </tr>
  @endforeach
</table>



@endsection


