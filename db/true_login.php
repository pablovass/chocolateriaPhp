<?php 

require("clientes.php");


$email=isset($_POST['email'])? $_POST['email']: '';
$password=isset($_POST['password'])? $_POST['password']: '';

for ($i=0; $i < count($usuarios) ; $i++) { 
	if (($usuarios[$i]['email']==$email) && ($usuarios[$i]['password']==$password)) {
		//echo $usuarios[$i]['alias']."<br>";
	 	//echo $usuarios[$i]['nombre']."<br>";
		//echo $usuarios[$i]['apellido']."<br>";
	 	//echo $usuarios[$i]['email']."<br>";
	 	//echo $usuarios[$i]['password']."<br";
	header("Location:../panel/panel.php");
}
//mejorarlo con la funcion header
echo "error";
header("Location:../panel/panel.php");
}





 ?>