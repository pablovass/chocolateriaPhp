
<?php 
//require_once('usuariosArray')


$password=isset($_POST['password'])? $_POST['password']: '';
$email=isset($_POST['email'])? $_POST['email']: '';

echo "tu pasword {$password}";
echo " hola {$email}";

?>