
<?php
$usuario = $_POST ["usuario"];
$contrasena = $_POST ["contrasena"];

$ckusuario = "admin";
$ckcontrasena = 1234;

if ($usuario==$ckusuario & $contrasena==$ckcontrasena) {
    header ("location:administrador.php");   
} else {
    echo "Incorrecto";
}

?>