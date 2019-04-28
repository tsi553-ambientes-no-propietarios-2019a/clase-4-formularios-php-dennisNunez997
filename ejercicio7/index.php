<?php 
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan para que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” solo si faltan menos de 5 días.
*/

?>

<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Dias del año</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
 
<body>

    <div class = "container">
        <h1 class = 'page-header'>primer formulario</h1>
        <form action = "numeros.php" method = "POST"> 
            <div class = "form-group">
                <label>Ingrese un numero</label>
                <input type = "text" name = "numero" class = "form-control" style="width:200px;height:30px"/>
            </div>
            <div class = "form-group">
               
               <button class="btn btn-primary" type="submit">Enviar</button>

            </div>
        </form>
    </div>


</body>
</html>
