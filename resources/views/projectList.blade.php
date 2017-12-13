@extends('layouts.base')

@section('title', 'Liste des projets')
@section('main')
<div class="d-flex justify-content-center mt-5">
  <h1>Liste des projets</h1>
</div>
<div class="container d-flex justify-content-center col-lg-10">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col-sm-1">Projet</th>
      <th scope="col-sm-3">Description</th>
      <th scope="col-sm-1">Durée</th>
      <th scope="col-sm-1">Budget</th>
      <th scope="col-sm-1">Etat</th>
      <th scope="col-sm-1">Tags</th>
      <th scope="col-sm-2">Editer</th>
      <th scope="col-sm-2">Suppr.</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($projects as $project)
    <tr>
      <th scope="row">{{ $project->name }}</th>
      <td>{{ $project->content }}</td>
      <td>{{ $project->duration }} jours</td>
      <td>{{ $project->budget }}€</td>
      @if ($project->state)
        <td>{{ $project->state->state }}</td>
      @else
        <td>Etat non communiqué</td>
      @endif
      <td>
      @if($project->tags)
        @foreach ($project->tags as $tag)
          <div class="text-white d-inline bg-dark rounded p-1">{{ $tag->tag }}</div>
        @endforeach
      @else
        <p>Really ?</p>
      @endif
      </td>
      <td>
        <form method="get" action="/project/update/{{$project->id}}">
          {{ csrf_field() }}
          <button type="submit"><i class="fa fa-pencil fa-x3"></i></button>
        </form>
      </td>
      <td>
        <form method="get" action="/project/delete/{{$project->id}}">
            {{ csrf_field() }}
            <button type="submit"><i class="fa fa-trash fa-x3 "></i></button>
        </form>
      </td>
    </tr>
    @endforeach
</div>
@endsection
