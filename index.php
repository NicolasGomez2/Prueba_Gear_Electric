<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/script.js"></script>
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> info@gearelectric.com</p>
                <p><span class="fa fa-mobile"></span> 300 9108574 / 304 6200960</p>
            </section>
        </section>

        <form name="form_contact" action="/Formulario de Registro - Backend/conexion_formulario.php" class="form_contact">
            <h2>REGISTRO</h2>
            <div class="user_info">
                <label for="sel1">Tipo de Documento</label>
                <select name ="tipodocumento" class="form-control" id="tipodocumento" placeholder="Seleccione">
                  <option>Cédula de Ciudadanía</option>
                  <option>Tarjeta de Identidad</option>
                  <option>Cédula de Extranjeria</option>
                </select>
            </br>
                
                <label for="phone">Documento</label>
                <input type="text" name ="documento" id="documento" maxlength="30" placeholder="Maximo 30 caracteres" required="required">

                <label for="email">Nombre</label>
                <input type="text" name ="nombre" id="nombre" maxlength="100"  placeholder="Digite solo letras y maximo 100 caracteres" required="required">

                <label for="mensaje">Teléfono</label>
                <input id="telefono" name ="telefono" placeholder="Digite solo números" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" required="required">

                <label for="mensaje">Correo</label>
                <input type="email" name="email" required="required" id="correo" required="required">

                <input type="submit" value="Enviar" id="btnSend" onclick="funcion1()">
            </div>
        </form>

    </section>

</body>
</html>
