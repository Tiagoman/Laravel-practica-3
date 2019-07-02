<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" action=/actors/add name="agregarPelicula" method="POST">
          @csrf
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre"/ value= {{old('nombre')}}>
                <span>{{$errors->first('nombre')}}</span>
            </div>
            <div>
                <label for="nombre">Apellido</label>
                <input type="text" name="apellido" id="apellido"/ value= {{old('apellido')}}>
                <span>{{$errors->first('apellido')}}</span>

            </div>

            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
