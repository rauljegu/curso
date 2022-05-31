<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
    <form action="respuestas.php" method="post">
      <p>Folio <input type="text" name="folio" value="123456789" readonly></p>
      <p>Nombre*: <input type="text" name="nombre"  ></p>
      <p>Apellido paterno: <input type="text" name="apellido_paterno" placeholder="Escribe tu apellido"></p>
      <p>Apellido materno: <input type="text" name="apellidoMaterno"></p>
      <p>Edad: <input type="number" name="edad" value="18" min="15" max="22"></p>
      <p>Correo electonico: <input type="mail" name="correo" ></p>
      <p>Género 1:</p>
        <p> <input type="radio" name="genero" value="M" > Masculino</p>
        <p> <input type="radio" name="genero" value="F" checked> Femenino </p>
        <p> <input type="radio" name="genero" value="O" > Otro</p>
      <p>Género 2:<select name="genero2"  >
                  <!--<option ></option>-->
                  <!--<option value="">Seleccione una opcion</option>-->
                  <option value=""></option>
                  <option value="M">Masculino</option>
                  <option value="F" checked>Femenino</option>
                  <option value="O">Otro</option>




                </select></p>
      <p>Intereses</p>
      <p> <input type="checkbox" name="Intereses1" value="videojuegos" checked>Videojuegos</p>
      <p> <input type="checkbox" name="Intereses2" value="estudio">Estudio</p>
      <p> <input type="checkbox" name="Intereses3" value="lectura">Lectura</p>
      <p> <input type="checkbox" name="Intereses4" value="deportes">Deportes</p>

      <p>Direccion</p>
      <p><textarea name="direccion" placeholder="Calle, numero, colonia, municipio/alcaldia, C.P."></textarea></p>
      <p><input type="submit" name="enviar" value="ENVIAR"></p>
      <p>* campos requerido/obligatorio</p>
    </form>
  </body>
</html>
