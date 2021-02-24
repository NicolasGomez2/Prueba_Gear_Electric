<?php 

    header('Content-Type: text/html; charset=UTF-8');  

	$conexion=mysqli_connect('localhost','root','','registro_gearelectric');
    $conexion->set_charset("utf8");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<body background='fondo2.png'>
<br>

	<table border="1" class="table">
		<tr class="thead-dark">
			<td>id</td>
			<td>Tipo Documento</td>
			<td>Documento</td>
			<td>Nombre</td>
			<td>telefono</td>	
			<td>email</td>	
		</tr>

		<?php 

        $documento=0;
        $documento = $_POST['doc'];
       
        
		$sql="SELECT * from contactos WHERE documento = '$documento'";
		$result=mysqli_query($conexion,$sql);

        if(mysqli_num_rows($result)==0){
            echo "<!DOCTYPE html>
         <html>
         <head>
         <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
         <link rel='stylesheet' href='style.css'>
         <title>No existe</title>
         <meta name='viewport' content='width=device-width, initial-scale=1.0'>
         <meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1' />
               <title>No existe</title>
               </head>
         <body>
         <body background='grupo-limlec.png'>
         <div  class='border border-white' id='cajacontrol2';>
        
        
         <span  class=' border border-light' style='font-size:110%; color:black; '>el usuario que busca NO EXISTE en la BD</span>
          <br>
          <br>
          <div id='btnv'>
          <a href='../index.html'> 
          <button class='btn btn-success  border border-light'>Volver</button>
          </a>
          </div>
          </div>
         </body> 
         </html>";
        
        }else{ 
        
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['tipo_documento'] ?></td>
			<td><?php echo $mostrar['documento'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
				<td><?php echo $mostrar['telefono'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
		
		</tr>

        
	<?php 
	}
}
	 ?>
	</table>

</body>
</html>