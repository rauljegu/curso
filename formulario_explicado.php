<html>
  <head>
    <meta charset="utf-8">
    <title>Segunda</title>
  </head>
  <body>
    <h1>P&aacute;gina interna</h1>
    <a href="index.html">Regresar al inicio</a>
    <!-- &nbsp; sirve para dejar espacios en blanco -->
    <p>&nbsp;</p>
    <!--la etiqueta table indica el inicio y el final de una tabla -->
    <p>&nbsp </p>
    <!-- La etiqueta "form" indica el inicio y el final de un formulario, este nos sirve para recabar información,
    trabja con etiquetas/elementos tipo:
    - "input" que son etiquetas que no tienen cierre (no requieren "</input>"),
    - "select" (que si tiene apertura y cierrer),
    - "textarea" que también llevan abertura y cierre.

    Los atributos de la etiqueta "form" que más se utilizan son:
    -action: que indica a donde queremos mandar la información,
              generalmete es a un documento html o php, o se puede enviar a sí  mismo.
    -method: indica el modo en que los datos serán enviados, por seguridad se utiliza POST,
            ya que la informción va oculta. Otro metodo es por GET pero la información no se oculta y es visble en
            la direccion URL, ejemplo: localhost/mi_pagina/segunda.html?nombre=Raul (esto no lo escribimos nosotros,
            esto aprece automáticamente al presionar el elemento  "submit" de nuestro "form")

     --->
    <form action="formulario_explicado.html" method="POST">
      <p>Nombre</p>
      <!--la etiqueta/elemento "input" significa entrada,  existen distintos atributos para esta etiqueta,
          SIEMPRE deben llevar estos dos atributos:
        -type: dice que tipo de entrada se solicita y valida que coincida con el tipo,
              - text: para texto (acepta números pero los trata como texto)
              -number: para seleccionar cantidades, pueden ser positivas o negativas.
              -tel: para telefono.
              -email: para correo electronico.
              -date: para fechas.
              -time: para la hora.
              -checkbox: para inidcar un selector de tipo cuadro (estos inputs  llevan su propio name, aunque pertenezcan a la
                        misma lista de opciones)
              -radio: para seleccionar entre una lista de opciones, generalmente para preguntas tipo Si/no o elige
                      una de las opciones (cada input radio debe llevar el mismo name)
        -name: es el nombre que identifica al input NUNCA OLVIDES PONERLO NI REPETIRLO (salvo los radio que pertenecen
                a una misma lista, que son la excepcion)

      Otros atributos opcionales y  de los más utlizados son:
      - required: campo requerido el formo obliga a llenar el input
      - value: para mostrar un valor por defecto.
      -readonly: para que el campo no se pueda editar (generalmente va acompañado de un value)
      -hidden: para que el campo no se vea. En ocasiones requieres enviar informacion escondida, por ejemplo
              un numero de folio, un costo o cuota etc.
      -style: para dar etilos al input.
      -width y height: para indicar un acho ya atura respectivamente:
      -placeholder: para indicar un texto de ayuda dentro del campo.

     -->
      <p><input type="text" name="nombre" placeholder="Escribe tu nombre completo" required></p>
      <p>Tel&eacute;fono</p>
      <p><input type="tel" name="telefono" value="5534854673" readonly></p>
      <p>E-mail</p>
      <p><input type="email" name="email" required></p>
      <p>Fecha de nacimiento</p>
      <p><input type="date" name="fecha_nacimiento" required></p>
      <p>Hora</p>
      <p><input type="time" name="hora" required></p>
      <p>G&eacute;nero</p>
      <!--Otra etiqueta utilizada el "Select" cuando queremos mostrar un listado de opciones en un menu desplegable
          SIEMPRE DEBE LLEVAR UN ATRIBUTO "name".

          Para las opciones se utiliza la etiqueta "option", esta etiqueta puede llevar el atributo value (sirve para guardar información
          en una base de datos de una manera más simple), si el atributo value no se usa, el valor del option sera el texto etiquetado.

          NOTA: en ocasiones necesitamos una opción vacia (puede llevar texto o no),
          ésta se puede poner al inicio de las siguientes maneras:
          <option ></option>
          <option >--</option>
          <option >Seleccione una opcion</option>
          <option value=""></option>
          <option value="">--</option>
          <option value="">Seleccione una opcion</option>
          <option value=""></option>

          La etiqueta select tambien puede tener un atributo "required" pero siempre se debera añadir como primer option cualquiera
          de las siguientes opciones (SIEMPRE DEBE LLEVAR EL value, de locontrario no se hace la validacion):
          -  <option value="">"El texto que quieras"</option>
          -  <option value=""></option>

          Ejemplo de un select requerido:
          <p>Ciudad:</p>
          <p><select name="ciudad" required>
                <option value="">"Elija su ciudad"</option>
                <option value="CDMX">Ciudad de M&eacute;xico</option>
                <option value="Gdl">Guadalajara</option>
                <option value="Mty">Monterrey</option>
            </select>
          </p>
        -->
      <p><select name="genero">
            <option value="1">Femenino</option>
            <option value="2">Masculino</option>
        </select>
      </p>
      <p>Motivo</p>
      <p><textarea name="motivo"></textarea></p>

       
          <!-- input tipo "checkbox" -->
    <!--    <p>Marque sus materias favoritas (puedes marcar más de una):</p>
        <p><input type="checkbox" name="Espanol"> Esp&ntilde;ol</p>
        <p><input type="checkbox" name="Fisica"> F&iacute;sica</p>
        <p><input type="checkbox" name="Quimica"> Qu&iacute;mica</p>
        <!--Si queremos que alguna de las casillas aparezca seleccionada por default añadiremos el atributo "checked" -->
  <!--      <p><input type="checkbox" name="Matematicas" checked> Matem&aacute;ticas</p>

          <!-- input tipo "radio" las opciones llevan el mismo "name" y solo se puede elegir una de la lista-->
    <!--       <p>Acepta usted los t&eacute;rminos y condiciones:</p>
          <p><input type="radio" name="terminos_condiciones"> Si</p>
          <p><input type="radio" name="terminos_condiciones"> No</p>

          <!--si queremos que una opcion aprezca por defecto yusamos el atributo "checked" -->
      <!--     <p>Acepta usted los t&eacute;rminos y condiciones:</p>
          <p><input type="radio" name="terminos_condiciones1"> Si</p>
          <p><input type="radio" name="terminos_condiciones1" checked> No</p> -->


        <p><input type="submit" value="Enviar"></p>


    </form>
  </body>
</html>
