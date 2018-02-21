

<?php
session_start();
//  $_SESSION['name']="pablooo elele el mejor";

//require_once('usuariosArray')

// para redirecionar
//header("Location:index.html");
$password=isset($_POST['password'])? $_POST['password']: '';
$email=isset($_POST['email'])? $_POST['email']: '';

echo "tu pasword {$password}";
echo " hola {$email}";

// aca voy a poner lo la variable que manejar a $_SESSION[];


// para que no nos deje entrar 

if (empty($_SESSION['name'])) {
  header("Location: index.php");
  die();
}
?>