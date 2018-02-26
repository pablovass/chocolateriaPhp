

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
				                '"user"'.'=>'.'true'.','."\n".
				                '"id"'.'=>'."'$id'".','."\n".
				                '"compras"'.'=>'.'0'.','."\n".
				                '"dinero"'.'=>'.'0'.','."\n"

								.']; ';

fwrite($page_client,$micliente);

fclose($page_client);



header("Location: http://localhost/chocolateriaPhp/index.php?page=4")



/////////
$target_dir = '../img/Avatar/';
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). "ha sido cargado";
    } else {
        echo "Lo sentimos, hubo un error al cargar su archivo.";
    }
}

        header("Location: http://localhost/chocolateriaPhp/panel/panel.php")
?>

