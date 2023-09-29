<?php

$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario = "admin";
$ckpass = 1234;

if ($usuario==$ckusuario && $contrasenia==$ckpass ){
    header ("location:https://www.nasa.gov/content/ultra-high-definition-video-gallery")
  
} else {
    echo"incorrecto";
    //header("location: login.html");
    header("location:https://www.nasa.gov/s/ ");

}
?>