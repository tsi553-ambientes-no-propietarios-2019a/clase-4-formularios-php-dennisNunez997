<?php
/*
- Escribir una página en PHP que presente un calendario del mes actual.
- Utlizar HTML y CSS para darle color y estilo al calendario. El día actual debe ser resaltado en negrita y con la celda de diferente color.
- Pista: utilizar la función date(). Entre otros parámetros la función date puede recibir: ‘Y’, ‘m’, ‘d’, ‘N’. Investigar sobre la función date si es necesario utilizar otros parámetros (http://php.net/manual/es/function.date.php).
- Pista: Utilizar tablas HTML para presentar el calendario.
*/

$mes =
[
    [
        'L' => 'L',
        'M' => 'M',
        'Mi' => 'Mi',
        'J' => 'J',
        'V' => 'V',
        'S' => 'S',
        'D' => 'D',
    ],
    
    [
        'Lunes' => '01',
        'Martes' => '02',
        'Miercoles' => '03',
        'Jueves' => '04',
        'Viernes' => '05',
        'Sabado' => '06',
        'Domingo' => '07',
    ],
    [
        'Lunes' => '08',
        'Martes' => '09',
        'Miercoles' => '10',
        'Jueves' => '11',
        'Viernes' => '12',
        'Sabado' => '13',
        'Domingo' => '14',
    ],
    [
        'Lunes' => '15',
        'Martes' => '16',
        'Miercoles' => '17',
        'Jueves' => '18',
        'Viernes' => '19',
        'Sabado' => '20',
        'Domingo' => '21',
    ],
    [
        'Lunes' => '22',
        'Martes' => '23',
        'Miercoles' => '24',
        'Jueves' => '25',
        'Viernes' => '26',
        'Sabado' => '27',
        'Domingo' => '28',
    ],
    [
        'Lunes' => '29',
        'Martes' => '30',
    ]
];


?>

<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Dias del año</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
 
<body>

    <div class = "container">
        <h1 class = 'page-header'>Mes de Abril</h1>
        
        
        <table border = "1">

        <?php
        foreach($mes as $d)
        {
        ?>
        <tr>
        <?php
            foreach($d as $dia)
            {
            ?>
                
                <td><?php echo $dia;?> </td>
                
            <?php
                if($dia==date("d"))
                {
            ?>
                <td bgcolor="blue"><b> <?php echo $dia;?></b></td>
            <?php

                }
            }
            ?>
        </tr>
        <?php
        }    
        ?>
        </table>    
    </div>


</body>
</html>



