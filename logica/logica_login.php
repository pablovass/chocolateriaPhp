

<?php
require_once('usuariosArray.php');

session_start();
//  $_SESSION['name']="pablooo elele el mejor";


// para redirecionar
//header("Location:index.html");
$password=isset($_POST['password'])? $_POST['password']: '';
$email=isset($_POST['email'])? $_POST['email']: '';

echo "tu pasword {$pep}";
echo " hola {$email}";

// aca voy a poner lo la variable que manejar a $_SESSION[];


// para que no nos deje entrar 

if (empty($_SESSION['name'])) {
  header("Location: index.php");
  die();
}

/* 
int w = 0;
    for (int x = 0; x < arrayG.length; x++) {
      if (arrayG[x].getEstadoG() == "ocupado") {
        System.out.println(arrayG[x].MostrarLugaresOcupados());
        w++;

      }
    }*/

?>