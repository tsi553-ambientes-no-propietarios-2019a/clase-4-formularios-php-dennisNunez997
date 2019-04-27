<?php

    $usuario =
    [
        'Pedro' => '123123',
        'Juan' => 'qweqwe',
        'Ana' => '321321',
        'Luisa' => 'asdasd',
        'Jose' => 'anlksdjv'
    ];
    
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["password"];
    $user_found = false;
    foreach($usuario as $user => $pass)
    {
        //echo $user . "=>" . $pass . "<br>";
        if($nombre == $user && $contrasena == $pass)
        {
            echo $user . " contraseña: " . $pass;
            $user_found= true;
            break;
        }
    }

    if(!$user_found){
        echo "usuario y contraseña incorrecto";
        

    } 


?>
