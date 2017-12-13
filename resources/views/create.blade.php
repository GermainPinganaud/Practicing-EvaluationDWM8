@extends('layouts.base')

@section('title', 'Créer')
@section('main')
<div class="d-flex justify-content-center mt-5">
  <div class="card col-lg-8 text-white bg-secondary p-0">
    <div class="card-header bg-dark">Créer un projet</div>
    <div class="card-body">
      <form action="/project/insert" method="post">
    {{ csrf_field() }}
        <fieldset>



          <div class="form-group">
            <label>Nom du projet</label>
            <input name="name" type="text" class="form-control" placeholder="Entrez le nom d'un projet">
          </div>



          <div class="form-group">
            <label>Description</label>
            <textarea name="content" class="form-control" rows="5"></textarea>
          </div>



          <div class="form-group">
            <label>Tags</label>
            <select name="tag" class="form-control">
              @foreach($tags as $tag)
                <option value="{{ $tag->id}}">{{ $tag->tag}}</option>
              @endforeach
            </select>
          </div>



          <div class="form-group">
            <label>Photo</label>
            <input name="picture" type="file" class="form-control-file">
          </div>



          <div class="input-group mt-3">
            <label class="mr-5">Durée du projet</label>
            <input name="duration" type="number" class="form-control">
            <span class="input-group-addon">jours</span>
          </div>



          <div class="form-group mt-3 mr-5">
            <label class="mr-5">Etat du projet</label>
            <select name="state" class="form-control">
              @foreach($states as $state)
                <option value="{{ $state->id}}">{{ $state->state}}</option>
              @endforeach
            </select>
          </div>



          <div class="input-group mt-3">
            <span class="input-group-addon">Budget</span>
            <input name="budget" type="number" class="form-control">
            <span class="input-group-addon">€</span>
          </div>



          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-dark mt-3">Submit</button>
          </div>



        </fieldset>
      </form>
    </div>
  </div>
</div>

@endsection
