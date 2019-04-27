<?php

/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */
?>


<!DOCTYPE html>

<html>

    <head>
        <title>registro</title>
        <meta charset= "UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body>
        <div class = "container">
            <form action = "usuario.php" method = "POST">
                <h1 class = 'page-header'>Registro de usuario</h1>

                <div class= "form-group">
                    <label>Ingrese su nombre</label>
                    <input type = "text" name = "nombre" class = "form-control" style="width:300px;height:30px"/>
                </div>

                <div class= "form-group">
                    <label>Ingrese su contraseña</label>
                    <input type = "password" name = "contraseña" class = "form-control" style="width:300px;height:30px"/>
                </div>

                <div class= "form-group">
                    <label>Ingrese de nuevo su contraseña</label>
                    <input type = "password" name = "verificar_contraseña" class = "form-control" style="width:300px;height:30px"/>
                </div>

                <div class = "form-group">
                    
                    <button class="btn btn-primary" type="submit">Iniciar</button>

                </div>
            </form>
        </div>
    </body>

</html>