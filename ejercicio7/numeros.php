<?php

$num = $_POST["numero"];
$num_entero = (integer) $num;

$i=1;
$contar= 365-$num;
for ($i; $i<=365; $i++)
{
    $arr[$i]= $i;
    
}

$find_num = $arr[$num_entero];



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
         
        <div class = "form-group">
        <?php    
        if($find_num >= 1 && $num <=31)
        {
        ?>
            <h1><?php echo "Es Enero " . "faltan: ". $contar . " dias para año nuevo"; ?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 32 && $num <=60)
        {
        ?>
            <h1> <?php echo "Es Febrero " . "faltan: ". $contar . " dias para año nuevo"; ?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 61 && $num <=92)
        {
        ?>
            <h1><?php echo "Es Marzo " . "faltan: ". $contar . " dias para año nuevo"; ?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 93 && $num <=123)
        {
        ?>
            <h1><?php echo "Es Abril " . "faltan: ". $contar . " dias para año nuevo"; ?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 124 && $num <=155)
        {
        ?>
            <h1><?php echo "Es Mayo " . "faltan: ". $contar . " dias para año nuevo";?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 156 && $num <=186)
        {
        ?>
            <h1> <?php echo "Es Junio " . "faltan: ". $contar . " dias para año nuevo"; ?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 187 && $num <=218)
        {
        ?>
            <h1> <?php echo "Es Julio " . "faltan: ". $contar . " dias para año nuevo"; ?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 219 && $num <=250)
        {
        ?>
            <h1><?php echo "Es Agosto " . "faltan: ". $contar . " dias para año nuevo"; ?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 251 && $num <=281)
        {
        ?>
            <h1><?php echo "Es Septiembre " . "faltan: ". $contar . " dias para año nuevo"; ?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 282  && $num <=313)
        {
        ?>
            <?php echo "Es Octubre " . "faltan: ". $contar . " dias para año nuevo"; ?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 314 && $num <=344)
        {
        ?>
            <h1><?php echo "Es Noviembre " . "faltan: ". $contar . " dias para año nuevo"; ?></h1>
        <?php
        }
        ?>
        <?php
        if($find_num >= 345 && $num <=365)
        {
        ?>
        <?php
            if($find_num >= 360 && $find_num <= 365)
            {
                ?>
                <h1><?php echo "Es Diciembre " . "faltan: ". $contar . " dias para año nuevo y falta muy poco"; ?></h1>
            <?php
            }
            ?>
        <?php
        }
        ?>         
        </div>
    </div>
  </body>  
</html>