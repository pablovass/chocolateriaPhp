
<?php 

  $alias=isset($_POST['alias'])? $_POST['alias']: '';
  
$cambiar='milka de choco';

include('mi_array.php');

$page_producto=fopen('mi_array_2.php',"a+");

$apertura_doc= '<'.'?'.'php'; 

fwrite($page_producto,$apertura_doc);

fclose($page_producto);

//guardo los daTOS DE L ARRAY 


  //$guardar_Array_dato1=$productos[0]['nombre'];
  $guardar_Array_dato2=$productos[0]['descripcion'];
  $guardar_Array_dato3=$productos[0]['descripcion_corta'];
  $guardar_Array_dato4=$productos[0]['precio'];
  $guardar_Array_dato5=$productos[0]['categoria'];
  $guardar_Array_dato6=$productos[0]['img_name'];
  $guardar_Array_dato7=$productos[0]['cantidad'];
   $guardar_Array_dato8=$productos[0]['id'];

//seleccion y borro 
echo "<h1> dato guardado </h1>";
//print_r($guardar_Array_dato1);
print_r($guardar_Array_dato2);
print_r($guardar_Array_dato3);
print_r($guardar_Array_dato4);
print_r($guardar_Array_dato5);
print_r($guardar_Array_dato6);
print_r($guardar_Array_dato7);
//borro
unset($productos[0]);
echo "<h1> ESTE EL DATO 00</h1>";
$producto = array_values($productos);//limpiamos 
print_r($producto[0]['nombre']);


echo "<h1> se sigue </h1>";

//array_replace($producto, $productos);

for ($i=0; $i < count($producto); $i++) { 

	print_r($producto[$i]['nombre']);echo "<br>";
	print_r($producto[$i]['descripcion']);echo  "<br>";
	print_r($producto[$i]['descripcion_corta']);echo "<br>";
	print_r($producto[$i]['precio']);echo "<br>";
	print_r($producto[$i]['categoria']); echo "<br>";
	print_r($producto[$i]['img_name']); echo "<br>";
	print_r($producto[$i]['cantidad']); echo "<br>";
	print_r($producto[$i]['id']);echo  "<br>";

	echo "<br>";
	
echo "<h1> valor variable </h1>";
	echo $nombre =$producto[$i]['nombre'];
	echo $descripcion =$producto[$i]['descripcion'];
	echo $descripcion_corta =$producto[$i]['descripcion_corta'];
	echo $precio =$producto[$i]['precio'];
	echo $categoria =$producto[$i]['categoria'];
	echo $img_name =$producto[$i]['img_name'];
	echo $cantidad =$producto[$i]['cantidad'];
	echo $id =$producto[$i]['id'];


$page_producto=fopen('mi_array_2.php',"a+");

$new_productos="\n".' $productos[]=['."\n".
                                '"nombre"'.'=>'."'$nombre'".','."\n".
                                '"descripcion"'.'=>'."'$descripcion'".','."\n".
                                '"descripcion_corta"'.'=>'."'$descripcion_corta'".','."\n".
                                '"precio"'.'=>'."$precio".','."\n".
                                '"categoria"'.'=>'."'$categoria'".','."\n".
                                '"img_name"'.'=>'."'$img_name'".','."\n".
                                '"cantidad"'.'=>'."100".','."\n".
                                '"id"'.'=>'."'$id'".','."\n"
                                
                                 .']; ';

fwrite($page_producto,$new_productos);

fclose($page_producto);

}


unlink('mi_array.php');
rename('mi_array_2.php','mi_array.php');
//unlink('mi_array_2.php');



$page_producto=fopen('mi_array.php',"a+");

$new_productos="\n".' $productos[]=['."\n".
                                '"nombre"'.'=>'."'$cambiar'".','."\n".
                                '"descripcion"'.'=>'."'$guardar_Array_dato2'".','."\n".
                                '"descripcion_corta"'.'=>'."'$guardar_Array_dato3'".','."\n".
                                '"precio"'.'=>'."$guardar_Array_dato4".','."\n".
                                '"categoria"'.'=>'."'$guardar_Array_dato5'".','."\n".
                                '"img_name"'.'=>'."'$guardar_Array_dato6'".','."\n".
                                '"cantidad"'.'=>'."$guardar_Array_dato7".','."\n".
                                '"id"'.'=>'."'$guardar_Array_dato8'".','."\n"
                                
                                 .']; ';

fwrite($page_producto,$new_productos);

fclose($page_producto);

?>


 