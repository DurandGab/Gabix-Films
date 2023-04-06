@extends('index')
@section('section')
<h3>{{ "Mes livres" }}</h3>
<table class="table table-striped">
  <tr><th>Titre</th><th>Résumé</th><th>Prix</th></tr>
  @foreach ($livres as $livre)
  <tr><td>{{$livre->titre}}</td><td>{{$livre->resume}}</td><td>{{$livre->prix}}</td><td><a href="{{ route("modifier", ["id"=>$livre->id]) }}" type="button" class="btn btn-warning">Modifier</a></td><td><a href="{{ route("supprimer", ["id"=>$livre->id]) }}" type="button" class="btn btn-danger">Supprimer</a></td><tr>
  @endforeach
  </table>
@stop