<?php

if((isset($_GET["dominio"]) && isset($_GET["precio"])) && (!empty($_GET["dominio"]) && !empty($_GET["precio"]))){
    $dominio=$_GET["dominio"];
    $precio=$_GET["precio"];

    $name=$tel=$email=$comment="";
    $errName=$errEmail=$errTel="";
    function test_input($datos) {
      $datos = trim($datos);
      $datos = stripslashes($datos);
      $datos = htmlspecialchars($datos);
      return $datos;
    }

    if (isset($_POST["submit"])) {
      if (empty($_POST["name"])) {
        $errName = "Es obligatorio aportar un nombre";
      } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $errName = "El nombre no puede contener números";
        }
      }
      
      if (empty($_POST["email"])) {
        $errEmail = "Es obligatorio aportar un email";
      } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errEmail = "El correo no tiene un formato correcto";
        }
      }

      if (empty($_POST["tel"])) {
        $errTel = "Es obligatorio aportar un número de teléfono";
      } else {
        $tel = test_input($_POST["tel"]);
        if (!preg_match("/^[0-9]+$/",$tel)) {
            $errTel = "El teléfono no puede contener letras";
        }else if (!preg_match("/^[0-9]{9}+$/",$tel)){
            $errTel = "El teléfono debe tener 9 digitos";
        }
      }

      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }

    }

}else{
  header('Location: http://www.netymedia.com/');
}
$_POST = array();
?>