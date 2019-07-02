
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($movies as $movie)
      <ul>
        <li>{{$movie->getTitleAndRating()}}</li>
      </ul>
    @endforeach
  </body>
</html>
