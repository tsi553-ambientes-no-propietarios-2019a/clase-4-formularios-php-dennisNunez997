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
            <h1>Enero</h1>
            <ul>
                <?php
                    for($i=1; $i<=31; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>

        <?php
        }
        ?>
        <?php
        if($find_num >= 32 && $num <=60)
        {
        ?>
            <h1>Febrero</h1>
            <ul>
                <?php
                    for($i=32; $i<=60; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>
        <?php
        if($find_num >= 61 && $num <=92)
        {
        ?>
            <h1>Marzo</h1>
            <ul>
                <?php
                    for($i=61; $i<=92; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>
        <?php
        if($find_num >= 93 && $num <=123)
        {
        ?>
            <h1>Abril</h1>
            <ul>
                <?php
                    for($i=93; $i<=123; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>
        <?php
        if($find_num >= 124 && $num <=155)
        {
        ?>
            <h1>Mayo</h1>
            <ul>
                <?php
                    for($i=1; $i<=31; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>
        <?php
        if($find_num >= 156 && $num <=186)
        {
        ?>
            <h1>Junio</h1>
            <ul>
                <?php
                    for($i=156; $i<=186; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>
        <?php
        if($find_num >= 187 && $num <=218)
        {
        ?>
            <h1>Julio</h1>
            <ul>
                <?php
                    for($i=187; $i<=218; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>
        <?php
        if($find_num >= 219 && $num <=250)
        {
        ?>
            <h1>Agosto</h1>
            <ul>
                <?php
                    for($i=219; $i<=250; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>
        <?php
        if($find_num >= 251 && $num <=281)
        {
        ?>
            <h1>Septiembre</h1>
            <ul>
                <?php
                    for($i=251; $i<=281; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>
        <?php
        if($find_num >= 282  && $num <=313)
        {
        ?>
            <h1>Octubre</h1>
            <ul>
                <?php
                    for($i=282; $i<=313; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>
        <?php
        if($find_num >= 314 && $num <=344)
        {
        ?>
            <h1>Noviembre</h1>
            <ul>
                <?php
                    for($i=314; $i<=344; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>
        <?php
        if($find_num >= 345 && $num <=365)
        {
        ?>
        
            <h1>Diciembre</h1>
            <ul>
                <?php
                    for($i=345; $i<=365; $i++)
                    {
                ?>
                    <li><?php echo $i; ?></li>
                <?php
                    }
                ?>
            </ul>
        <?php
        }
        ?>         
        </div>
    </div>
  </body>  
</html>