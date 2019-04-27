<?php
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
 El arreglo debe tener el formato
 [
    'juan' => 'contrasena_segura'
 ]
 Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 Al enviar el formulario se debe validar que la combinación de nombre de usuario y contraseña existan en el arreglo.
 Si los datos no son correctos imprimir un mensaje de error.
 Si los datos son correctos debe redirigir a otra página bienvenido.php que debe imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */

?>


<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>ejercicio 3</title>    
    <meta charset="UTF-8">
    <meta name="formulario" content="Título de la WEB">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
  </head>  
  <body>   

    <div class = "container">
        <h1 class = 'page-header'>primer formulario</h1>
        <form action = "usuarios.php" method = "POST"> 
            <div class = "form-group">
                <label>Nombre de usuario</label>
                <input type = "text" name = "nombre" class = "form-control" style="width:300px;height:30px"/>
            </div>
            <div class = "form-group">
                <label>Contraseña</label>
                <input type = "password" name = "password" class = "form-control" style="width:200px;height:30px"/>
            </div>
            <div class = "form-group">
               <button class="btn btn-primary" type="submit">Iniciar</button>

            </div>

            

        </form>

    </div>

  </body>  
</html>