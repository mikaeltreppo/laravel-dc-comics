@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('comics.store')}}">
    <div class="mb-3">
        <label for="url" class="form-label">URL dell'immagine</label>
        <input type="password" class="form-control" id="url">
      </div>
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="password" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="data" class="form-label">Data</label>
        <input type="password" class="form-control" id="data">
      </div>
      <div class="mb-3">
        <label for="prezzo" class="form-label">Prezzo</label>
        <input type="password" class="form-control" id="prezzo">
      </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Sicuro di voler aggiungere questo Fumetto?</label>
    </div>
    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
  @endsection