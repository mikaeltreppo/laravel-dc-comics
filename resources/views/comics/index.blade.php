@extends('layouts.app')

@section('content')
<!--il @ section('nome definito nell'layouts affianco allo @ yield('qui')')-->
<body>
    <div class="container d-flex flex-wrap justify-content-center">
      @foreach ($comics as $comic)
      <div class="card m-3" style="width: 13rem;">
          <img src="{{$comic->thumb}}" class="card-img-top" alt="immagine ">
          <div class="card-body overflow-auto">
            <h5 class="card-title">{{$comic->title}}</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item text-center">Price: £{{$comic->price}}</li>
            <li class="list-group-item text-center">Date: {{$comic->sale_date}}</li>
            <li class="list-group-item text-center">Series: {{$comic->series}}</li>
            <li class="list-group-item text-center">
              <a type="button" class="btn btn-info" href="{{route('comics.show', ['comic' => $comic->id])}}">Info</a>
              <a type="button" class="btn btn-warning m-2" href="{{route('comics.edit', ['comic' => $comic->id])}}">Modifica</a>
              <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancella</button>
              
              
              </form>        
               </li>
            
            
          </ul>
         
        </div>
      @endforeach
    </div>
  </body>
  @endsection