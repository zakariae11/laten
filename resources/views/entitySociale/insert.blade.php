@extends('layouts')

@section('title')
Insert Entity Sociale
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<form  action="{{ route('insertentitysociale.submit') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <label for="raison_social" class="form-label">Raison Social:</label>
        <input type="text" class="form-control" name="raison_social" placeholder="Raison Social">
    </div>
    <div class="row mb-3">
        <label for="numero_registre" class="form-label">Numero Registre:</label>
        <input type="text" class="form-control" name="numero_registre" placeholder="Numero Registre">
    </div><br>
    <div class="row mb-3">
        <label for="patente" class="form-label">Patente:</label>
        <input type="text" class="form-control" name="patente" placeholder="Patente">
    </div>
    <div class="row mb-3">
        <label for="adresse" class="form-label">Adresse:</label>
        <input type="text" class="form-control" name="adresse" placeholder="Adresse">
    </div>
    <div class="row mb-3">
        <label for="code_postal" class="form-label">Code Postal:</label>
        <input type="text" class="form-control" name="code_postal" placeholder="Code Postal">
    </div>

    <div class="row mb-3">
        <button type="submit" class="btn btn-primary">Insert</button>
    </div>
</form>
@endsection