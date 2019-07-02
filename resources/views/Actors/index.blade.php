
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($actores as $actor)
      <ul>
        <li>{{$actor->getfullname()}}</li>
      </ul>
    @endforeach
  </body>
</html>
