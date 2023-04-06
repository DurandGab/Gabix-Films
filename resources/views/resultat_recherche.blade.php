@extends('index')
@section('section')
<h3>{{ "Résultats de la recherche" }}</h3>
@if(!$livres->isEmpty()) 
<table class="table table-striped">
  <tr><th>Titre</th><th>Résumé</th><th>Prix</th></tr>
  @foreach ($livres as $livre)
  <tr><td>{{$livre->titre}}</td><td>{{$livre->resume}}</td><td>{{$livre->prix}}</td></tr>
  @endforeach
  </table>
  @else
<p>aucun Résultats</p>
@endif
@stop