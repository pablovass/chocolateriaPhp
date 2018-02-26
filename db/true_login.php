<?php 
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
		
		
		$_SESSION['user']=$usuarios[$i]['alias'];
		$_SESSION['img']=$usuarios[$i]['img_name'];

		header("Location:../panel/panel.php");
		}

//mejorarlo con la funcion header

}

header("Location:../panel/panel.php");

echo "<h1>"."error"."</h1>";

 ?>