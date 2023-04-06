@extends('index')
@section('section')
<h3>{{ "Formulaire ajout d'un livre" }}</h3>
<form action="ajout" method="post">
    <div class="mb-3">
      <label for="titre" class="form-label">Titre du livre</label>
      <input type="text" class="form-control" id="titre" name="titre" aria-describedby="titre">
    </div>
    <div class="mb-3">
      <label for="resume" class="form-label">Resumé</label>
      <input type="text" class="form-control" id="resume" name="resume">
    </div>
    <div class="mb-3">
      <label for="prix" class="form-label">Prix du livre</label>
      <input type="text" class="form-control" id="prix" name="prix">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
       @csrf
  </form>
@stop
