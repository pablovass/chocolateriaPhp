
<?php 
//session_start();

require ('usuariosArray.php');
$login;
$email = isset( $_POST['email'] ) ? $_POST['email'] : '';
$password = isset( $_POST['password'] ) ? $_POST['password'] : '';


function validador_user(){

for ($i=0; $i < count($usuarios) ; $i++) { 
	
	
		if ($email== $usuarios[$i]['email'] && $password == $usuarios[$i]['password'] ) {
		
		$usuarios[$i]['alias']=$alias;
		$_SESSION['alias']=$usuarios[$i]['alias'];
		
		return $login=true;
		}else{
			return $login=false;
		}
		
	}

}


//------------------
// esto es de la rest api 


namespace controller;
use model\Usuarios;
use Exception;
class AuthController{
    
  static function validateAdmin(){
    if(isset($_SESSION['user']) && $_SESSION['user'] === 1){
      return $_SESSION['user'];
    }
    header("HTTP/1.1 401 UNAUTHORIZED");
    die();
  }
  static function validate(){
    if(isset($_SESSION['user'])){
      return $_SESSION['user'];
    }
    header("HTTP/1.1 401 UNAUTHORIZED");
    die();
  }
  static function authenticate($username,$password){
    $users = Usuarios::where("usuario = '$username' and pass = '$password'");
    if(isset($users[0])){
      $_SESSION['user'] = $users[0]['role'];
      return $users[0]['role'];
    } else {
        header("HTTP/1.1 401 UNAUTHORIZED");
        die();
    }
  }
  static function logout(){
      $_SESSION['user'] = NULL;
  }
}
?>