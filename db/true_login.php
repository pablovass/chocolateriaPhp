<?php 
session_start();
require("clientes.php");



$_SESSION['alias']='';
$_SESSION['nombre']='';
$_SESSION['apellido']='';
$_SESSION['pais']='';
$_SESSION['email']='';
$_SESSION['password']='';
$_SESSION['img_name']='';
$_SESSION['tipo_user']='';
$_SESSION['id']='';
$_SESSION['compras']='';
$_SESSION['dinero']='';




$email=isset($_POST['email'])? $_POST['email']: '';
$password=isset($_POST['password'])? $_POST['password']: '';

$user_d=new stdClass;

for ($i=0; $i < count($usuarios) ; $i++) { 
	if (($usuarios[$i]['email']==$email) && ($usuarios[$i]['password']==$password)) {
		
		$_SESSION['alias']=$usuarios[$i]['alias'];
		$_SESSION['nombre']=$usuarios[$i]['nombre'];
		$_SESSION['apellido']=$usuarios[$i]['apellido'];
		$_SESSION['pais']=$usuarios[$i]['pais'];
		$_SESSION['email']=$usuarios[$i]['email'];
		$_SESSION['password']=$usuarios[$i]['password'];
		$_SESSION['img']=$usuarios[$i]['img_name'];
		$_SESSION['tipo_user']=$usuarios[$i]['tipo_user'];
		$_SESSION['id']=$usuarios[$i]['id'];
		$_SESSION['compras']=$usuarios[$i]['compras'];
		$_SESSION['dinero']=$usuarios[$i]['dinero'];

		header("Location:../index.php");
		}

//mejorarlo con la funcion header

}

header("Location:../panel/panel.php");

echo "<h1>"."error"."</h1>";

 ?>