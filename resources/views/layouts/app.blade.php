<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APP</title>
    @vite('resources/js/app.js')
</head>
<body>
  <div class="container d-flex flex-wrap">
    @foreach ($comics as $comic)
    <div class="card m-3" style="width: 13rem;">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="immagine ">
        <div class="card-body overflow-auto" style="height: 200px;">
          <h5 class="card-title">{{$comic->title}}</h5>
          <p class="card-text overflow-auto">{{$comic->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    @endforeach
  </div>
</body>
</html>