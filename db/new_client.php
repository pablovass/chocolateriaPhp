<?php 


$alias=isset($_POST['alias'])? $_POST['alias']: '';
$nombre=isset($_POST['nombre'])? $_POST['nombre']: '';
$apellido=isset($_POST['apellido'])? $_POST['apellido']: '';
$pais=isset($_POST['pais'])? $_POST['pais']:'';
$email=isset($_POST['email'])? $_POST['email']: '';
$password=isset($_POST['password'])? $_POST['password']: '';

//echo "<br> exito";
$num= rand(0,1000);
$id=$num.$alias;

$page_client=fopen('clientes.php', "a+");

$micliente="\n".' $usuarios[]=['."\n".
								'"alias"'.'=>'."'$alias'".','."\n".
								'"nombre"'.'=>'."'$nombre'".','."\n".
								'"apellido"'.'=>'."'$apellido'".','."\n".
								'"pais"'.'=>'."'$pais'".','."\n".
								'"email"'.'=>'."'$email'".','."\n".
								'"password"'.'=>'."'$password'".','."\n".
				                '"tipo_user"'.'=>'.'true'.','."\n".
				                '"id"'.'=>'."'$id'".','."\n".
				                '"compras"'.'=>'.'0'.','."\n".
				                '"dinero"'.'=>'.'0'.','."\n"

								.']; ';

fwrite($page_client,$micliente);

fclose($page_client);



header("Location: http://localhost/chocolateriaPhp/index.php?page=4")

 ?>

