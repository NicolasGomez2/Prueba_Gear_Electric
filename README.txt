Nivel 1:
En Frontend utilice las siguientes tecnologias:
HTML5 
ECMAScript 2018
...........................................................................
En Backend utilice las siguiente tecnologias:
PHP Version 8.0.2
MYSQL - con el gestor de bases de datos PHPMYADMIN(XAMPP). 
...........................................................................
INSTRUCCIONES PARA EJECUTAR LA SOLUCIÓN:

1: Se trata de un formulario muy intuitivo el cual le permitira registrar los usuarios que desee, 
tendra tambien en su parte derecha 2 botones uno que le permitira ver todos los usuarios que ha
registrado en la base de datos, y el otro botón le permitira filtrar usuarios por el número de documento. 
--------------------------------------------------------------------------------------------------------------------
2: Para ejecutar la solución desde local, debe utilizar XAMPP, poner la carpeta del proyecto en la dirección
   "C:\xampp\htdocs" encender XAMPP ejecutando el servidor Apache y MySQL, abrir el navegador con la dirección local 
   en la url del navegador que se ejecuta con XAMPP debe poner la siguiente dirección:
   "http://localhost/Formulario%20de%20Registro%20-%20Frontend/index.html", en la cual se esta ejecutando el archivo
   principal llamado index.html que dara inicio a la aplicación.
---------------------------------------------------------------------------------------------------------------------

3. Si la aplicación va a ejecutarse desde la URL del hosting a la cual sera subida, entonces solo consistira 
en hacer uso del formulario, empezar a almacenar usuarios y jugar con los botones del formulario. 

----------------------------------------------------------------------------------------------------------------------

4. SERVICIOS DE LA API

1. La API programada en PHP es consumida por el Frontend realizado en HTML5 Y JavaScript, la API genera una consulta de
usuarios a la base de datos la cual genera un resultado dependiendo de si se cumple cierta condición, por ejemplo cuando
se busca un usario con un documento que no existe en la base de datos, el resultado a mostrar sera que no existe tal usuar
io.  