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
    @foreach ($comics as $comic)
      <ul>
        <li>
            {{$comic->title}}
        </li>
      </ul>
    @endforeach
</body>
</html>