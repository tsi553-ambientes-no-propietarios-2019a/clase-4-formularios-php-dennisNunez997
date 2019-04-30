<?php
/*
- Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece cada día del año (suponiendo un año no bisiesto) y muestre por pantalla la lista con el mes como encabezado seguido de la lista de los días que pertenecen a ese mes. 
- Utilizar HTML y CSS para dar estilo a la lista. Cada mes debe mostrarse de diferente color junto con la lista de días. Los meses deben aparecer con negrita. Pista: se puede utilizar elementos ul y li para mostrar la lista.

*/

?>

<!DOCTYPE html>
<html>

    <head>
        <link rel = "stylesheet" href="estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    </head>
    
    <body>
        <h1>
        <form action = "dias.php" method = "POST">
            <div class = "form-group">
                <label>Ingrese el numero: </label>
                <input type = "text" name = "numero" class = "form-control" style="width:200px;height:30px">
            </div>
            <div class = "form-group">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </body>

</html>
