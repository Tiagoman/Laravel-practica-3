<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" action=/movies name="agregarPelicula" method="POST">
          @csrf
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo"/ value= {{old('titulo')}}>
                <span>{{$errors->first('titulo')}}</span>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating"/ value= {{old('rating')}}>
                <span>{{$errors->first('rating')}}</span>

            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="premios" id="premios"/ value= {{old('premios')}}>
                <span>{{$errors->first('premios')}}</span>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="duracion" id="duracion"/ value= {{old('duracion')}}>
                <span>{{$errors->first('duracion')}}</span>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name="dia">
                    <option value="">Dia</option>
                    <?php for ($i=1; $i < 32; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="mes">
                    <option value="">Mes</option>
                    <?php for ($i=1; $i < 13; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <span>{{$errors->first('mes')}}</span>
                <select name="anio">
                    <option value="">Anio</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

                    <?php } ?>

                </select>
                <span>{{$errors->first('anio')}}</span>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
