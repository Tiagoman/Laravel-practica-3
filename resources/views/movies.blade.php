<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>movies</title>
  </head>
  <body>
    <h1>movies</h1>

  @foreach ($peliculas as $pelicula)
      <ul>
        <li>{{$pelicula[$id]}}</li>
      </ul>
  @endforeach

    <hr>

    <h2>Name movie</h2>
    @forelse ($peliculas as $pelicula)
      <p>{{$pelicula}}</p>
    @empty
        <p>no hay peliculas</p>
    @endforelse
  </body>
</html>
