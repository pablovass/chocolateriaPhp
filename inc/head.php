<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
   <head>
     <title>Inicio</title>
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/flat-ui.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style.complete.css" rel="stylesheet">
    <link href="../img/logo/logo.ico" type="image/x-icon" rel="icon" >
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="../bootstrap/js/bootstrap.min.js"></script>

</head>
<?php 

function debug($value){
  echo'<pre>';
  var_dump($value);
  echo'</pre>';
} ?>