@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
<div class="card" style="width: 20rem;">
    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <p class="card-text overflow-auto">{{$comic->description}}</p>
      <a href="{{route('comics.index')}}" class="btn btn-primary">Torna Indietro</a>
    </div>
  </div>
</div>
@endsection