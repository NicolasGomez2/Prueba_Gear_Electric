<?php

header('Content-Type: text/html; charset=UTF-8'); 
      //conexi?n a la base de datos
$con = mysqli_connect("localhost", "root", "", "registro_gearelectric");
if (mysqli_connect_errno()){
echo "No se pudo conectar a la base de datos" . mysqli_connect_error();
}

$tipodocumento=0;
if(isset($_POST['tipodocumento'])){
$tipodocumento = mysqli_real_escape_string($con, $_POST["tipodocumento"]);
 }

$documento=0;
if(isset($_POST['documento'])){
$documento = mysqli_real_escape_string($con, $_POST["documento"]);
 }

$nombre=0;
if(isset($_POST['nombre'])){

$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
 }


$telefono=0;
if(isset($_POST['telefono'])){

$telefono = mysqli_real_escape_string($con, $_POST["telefono"]);

 } 
 


$email=0;

if(isset($_POST['email'])){

$email = mysqli_real_escape_string($con, $_POST["email"]);

 }




 
 
//insertamos los valores del formulario en nuestra bd
$sql = utf8_decode  ("INSERT INTO contactos (tipo_documento, documento, nombre, telefono, correo)
VALUES ('$tipodocumento', '$documento', '$nombre', '$telefono', '$email')");

if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    } else{ 
    
       echo '<script language="javascript">alert("GUARDADO CON EXITO");</script>';
        echo "<!DOCTYPE html>
        <html>
        <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
        <link rel='stylesheet' href='../estilos.css'>
        <title>Guardando</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1' />
              <title>Registro Guardado con ?xito</title>
              </head>
        <body>
        <body background='fondo2.png'>
         <div id='btnv'>
         <a href='../index.html'> 
         <button class='btn btn-success  border border-light'>Volver al formulario</button>
         </a>
         </div>
         </div>
        </body> 
        </html>";
    
      }