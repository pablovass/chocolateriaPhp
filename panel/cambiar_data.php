<?php 

include('array.php');



///////


header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods','GET,POST,OPTIONS');
header('Access-Control-Allow-Headers','X-Requested-With,content-type');


$nombre=isset($_POST['nombre'])? $_POST['nombre']: '';
$descripcion=isset($_POST['descripcion'])? $_POST['descripcion']: '';
$descripcion_corta=isset($_POST['descripcion_corta'])? $_POST['descripcion_corta']: '';
$precio=isset($_POST['precio'])? $_POST['precio']: '';
$categoria=isset($_POST['categoria'])? $_POST['categoria']:'';
$cantidad=isset($_POST['cantidad'])? $_POST['cantidad']:'';
$img_name=isset($_FILES["fileToUpload"]['name'])? $_FILES["fileToUpload"]['name']: '';


$num= rand(0,1000);
$id=$num.$categoria;
//echo "<br> exito";

$page_producto=fopen('array.php', "a+");

$new_productos="\n".' $productos[]=['."\n".
                                '"nombre"'.'=>'."'$nombre'".','."\n".
                                '"descripcion"'.'=>'."'$descripcion'".','."\n".
                                '"descripcion_corta"'.'=>'."'$descripcion_corta'".','."\n".
                                '"precio"'.'=>'."$precio".','."\n".
                                '"categoria"'.'=>'."'$categoria'".','."\n".
                                '"img_name"'.'=>'."'$img_name'".','."\n".
                                '"cantidad"'.'=>'."$cantidad".','."\n".
                                '"id"'.'=>'."'$id'".','."\n".
                                ']; ';

fwrite($page_producto,$new_productos);

fclose($page_producto);



/////////
$target_dir = '../img/product/';
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


        header("Location: index.php"); 
/*


$contenido_array = file_get_contents('array.php');

echo json_encode($productos);


$prod=json_decode($contenido_array,true);

//debug($prod);

 //var_dump($prod);// se decodeado

for ($i=0; $i <count($prod) ; $i++) { 
	echo $prod[$i]['nombre'] . "<br><br>";
	echo $prod[$i]['descripcion']. "<br><br>";
	echo $prod[$i]['descripcion_corta']. "<br><br>";
	echo $prod[$i]['precio']. "<br>";
	echo $prod[$i]['categoria']. "<br>";
	echo $prod[$i]['img_name']. "<br>";
	echo $prod[$i]['id']. "<br>";
	echo $prod[$i]['cantidad']. "<br>";

	echo "<hr>";

	 
}



$prod= json_encode($prod);

$page_producto=fopen('array.php', "a+");

$new_productos="\n".' $productos[]=['."\n".
                                '"nombre"'.'=>'."'nombre'".','."\n".
                                '"descripcion"'.'=>'."'descripcion'".','."\n".
                                '"descripcion_corta"'.'=>'."'descripcion_corta'".','."\n".
                                '"precio"'.'=>'."3123".','."\n".
                                '"categoria"'.'=>'."'categoria'".','."\n".
                                '"img_name"'.'=>'."'img_name'".','."\n".
                                '"cantidad"'.'=>'."100".','."\n".
                                '"id"'.'=>'."'id'".','."\n".
                                '"cantidad"'.'=>'.'100'.','."\n"
                 
                                .']; ';

fwrite($page_producto,$new_productos);

fclose($page_producto);







*/
