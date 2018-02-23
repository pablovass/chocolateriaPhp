<?php 


$alias=isset($_POST['alias'])? $_POST['alias']: '';
$nombre=isset($_POST['nombre'])? $_POST['nombre']: '';
$apellido=isset($_POST['apellido'])? $_POST['apellido']: '';
$pais=isset($_POST['pais'])? $_POST['pais']:'';
$email=isset($_POST['email'])? $_POST['email']: '';
$password=isset($_POST['password'])? $_POST['password']: '';

//echo "<br> exito";

$page_client=fopen('clientes.php', "a+");

$micliente="\n".' $usuarios[]=['."\n".
								'"alias"'.'=>'."'$alias'".','."\n".
								'"nombre"'.'=>'."'$nombre'".','."\n".
								'"apellido"'.'=>'."'$apellido'".','."\n".
								'"pais"'.'=>'."'$pais'".','."\n".
								'"email"'.'=>'."'$email'".','."\n".
								'"password"'.'=>'."'$password'".','."\n".
                '"user"'.'=>'.'true'.','."\n"

								.']; ';

fwrite($page_client,$micliente);

fclose($page_client);

/*



foreach ($usuarios as $usuario) {
if ($usuarios->  ) {
  # code...
} else {
  # code...
}

}








  
//me da el total 
  for ($i=0; $i < count($usuarios) ; $i++) { 

    $totalUser=$i+1;
  
  }


//algo asi 

   
int w = 0;
    for (int x = 0; x < arrayG.length; x++) {
      if (arrayG[x].getEstadoG() == "ocupado") {
        System.out.println(arrayG[x].MostrarLugaresOcupados());
        w++;

      }
    }

//  $_SESSION['name']="pablooo elele el mejor";


// para redirecionar
//header("Location:index.html");
$password=isset($_POST['password'])? $_POST['password']: '';
$email=isset($_POST['email'])? $_POST['email']: '';

echo "tu pasword {$pep}";
echo " hola {$email}";

// aca voy a poner lo la variable que manejar a $_SESSION[];


/* para que no nos deje entrar 

if (empty($_SESSION['name'])) {
  header("Location: index.php");
  die();
}


$password=isset($_POST['password'])? $_POST['password']: '';
  $email=isset($_POST['email'])? $_POST['email']: '';





*/

 ?>

