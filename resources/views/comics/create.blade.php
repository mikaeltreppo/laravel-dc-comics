@extends('layouts.app')
@section('content')
<!--metodo e action-->
<form method="POST" action="{{route('comics.store')}}">
<!--csrf per evitare errore 419 per autenticazione-->
    @csrf


     <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title">
     
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="description" name="description">
     
          @error('description')
           <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="mb-3">
        <label for="url" class="form-label">URL dell'immagine</label>
        <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url">
        @error('url')
        <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="thumb" name="thumb">
      @error('thumb')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
  </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD"> 
        @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="price" name="price">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
       @enderror  
    </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type">
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series">
        @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label " for="exampleCheck1">Sicuro di voler aggiungere questo Fumetto?</label>
    </div>
    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
  @endsection