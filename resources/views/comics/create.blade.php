@extends('layouts.app')
@section('content')
<!--metodo e action-->
<form method="POST" action="{{route('comics.store')}}">
<!--csrf per evitare errore 419 per autenticazione-->
    @csrf
     <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
        <label for="url" class="form-label">URL dell'immagine</label>
        <input type="text" class="form-control" id="url" name="url">
      </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="thumb" name="thumb">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date"> 
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" class="form-control" id="type" name="type">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series">
      </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Sicuro di voler aggiungere questo Fumetto?</label>
    </div>
    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
  @endsection