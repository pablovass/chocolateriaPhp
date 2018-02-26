<?php 
session_start();
require("clientes.php");


$email=isset($_POST['email'])? $_POST['email']: '';
$password=isset($_POST['password'])? $_POST['password']: '';

$user_d=new stdClass;

for ($i=0; $i < count($usuarios) ; $i++) { 
	if (($usuarios[$i]['email']==$email) && ($usuarios[$i]['password']==$password)) {
		//echo $usuarios[$i]['alias']."<br>";
	 	//echo $usuarios[$i]['nombre']."<br>";
		//echo $usuarios[$i]['apellido']."<br>";
	 	//echo $usuarios[$i]['email']."<br>";
	 	//echo $usuarios[$i]['password']."<br";
		
		$user_d->alias= $usuarios[$i]['alias'];
		$user_d->img= $usuarios[$i]['img_name'];
		$user_d->user= $usuarios[$i]['user'];
		$_SESSION['us']=$user_d;

		header("Location:../panel/panel.php");
		}

//mejorarlo con la funcion header

}

header("Location:../panel/panel.php");

echo "<h1>"."error"."</h1>";

 ?>