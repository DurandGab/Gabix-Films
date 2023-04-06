@extends('index')
@section('section')
<h3>{{ "Liste des livres" }}</h3>
<table class="table table-striped">
  <tr><th>Titre</th><th>Résumé</th><th>Prix</th></tr>
  @foreach ($livres as $livre)
  <tr><td>{{$livre->titre}}</td><td>{{$livre->resume}}</td><td>{{$livre->prix}}</td></tr>
  @endforeach
  </table>
@stop