<?php

    
    $contraseña = $_POST["contraseña"];
    $verif_pass = $_POST["verificar_contraseña"];   

    if($contraseña == $verif_pass)
    {
        var_dump($_POST);
    }
    else
    {
        echo'<script type="text/javascript">
        alert("Contraseña incorrecta");
        window.location.href="index.php";
        </script>';
    }

?>