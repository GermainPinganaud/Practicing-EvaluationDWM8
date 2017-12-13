@extends('layouts.base')

@section('title', 'Créer')
@section('main')
<div class="d-flex justify-content-center mt-5">
  <div class="card col-lg-8 text-white bg-secondary p-0">
    <div class="card-header bg-danger">Créer un projet</div>
    <div class="card-body">

      {!! Form::open(['url' => '/project/update', 'class' => 'insertForm']) !!}
      {{{ Form::hidden('id', $project->id)}}}
      <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('name', $project->name) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Description') }}}
      {{{ Form::text('content', $project->content) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Budget') }}}
      {{{ Form::number('budget', $project->budget) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Durée') }}}
      {{{ Form::number('duration', $project->duration) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Etat') }}}
      {{{ Form::select('state', $states, $project->state->id) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Tag') }}}
      {{{ Form::select('tags[]', $tags, $project->tags, ['multiple' => true]) }}}
    </div>
    {{{ Form::submit('updater un projet') }}}
  {!! Form::close() !!}

    </div>
  </div>
</div>

@endsection
