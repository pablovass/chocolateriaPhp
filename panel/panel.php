<?php 

include('../db/productos.php');
include('../db/clientes.php');
//include('../db/var_session.php');

session_start();
 ?>


<!DOCTYPE html>
<html lang="en">

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

    
<body>
  <header class="item header margin-top-0 padding-bottom-0" id="header6">
      <div class="wrapper">

        <div class="container">

          <nav role="navigation" class="navbar navbar-inverse navbar-embossed navbar-fixed-top">

            <div class="container">

              <div class="navbar-header">
                <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                  <span class="sr-only">TABLA DE NAVEGACION </span>
                </button>
                <a href="#"  class="navbar-brand brand">CHOCOLATIN Argentin </a>
              </div>
              <div id="navbar-collapse-02" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                 <li class="active propClone" ><a href="../index.php?page=1">Inicio</a></li>
                  <li class="propClone"  name="productos" ><a href="../index.php?page=2">Productos</a></li>
                  <li class="propClone"><a href="../index.php?page=3">Contacto</a></li>
                </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
             <a  class="dropdown-toggle" clas="" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><?php echo isset($_SESSION['alias']) ? $_SESSION['alias']: 'Login' ?>
              <?php $img= $_SESSION['img'];
                    echo isset($_SESSION['img']) ? "<span>"."<img src=".'../img/avatar/'."$img"." class='img-rounded' alt='user' width='20' height='20'></span>":''; ?>
             <span class="caret"></span>
             </a>
             <ul class="dropdown-menu">
               <li><a href="<?php echo isset($_SESSION['alias'])?'panel/panel.php':'index.php?page=4' ?>">cerrar sesion <span class="fa fa-lock"></span></a></li>
                   <?php echo isset($_SESSION['alias'])? '': "<li>"."<a href='index.php?page=5'>".'registrarte'."</a>"."</li>"; ?>         
              
              
            </ul>
           </li>
              </ul>
             </div>
            </div>
          </nav>
          <div class="row banner">
            <div class="col-md-10 col-md-offset-1">
            </div>
          </div>
        </div>
      </div>
  </header>
<hr>
<hr>
<br>
<br>
<br>
<div class="container">
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><?php echo isset($_SESSION['alias']) ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li><a href="panel.php?page-user=1">panel</a></li>
        <li><a href="panel.php?page-user=2">tu perfil</a></li>
        <li><a href="panel.php?page-user=3">Historial de compras</a></li>
        <?php if ($_SESSION['tipo_user']==false) { ?>
        <li><a href="panel.php?page-user=4">listar productos</a></li>
        <li><a href="panel.php?page-user=5" >subir producto</a></li>
        <li><a href="panel.php?page-user=6" >ver clientes</a></li>
      
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
      <h2><?php echo $_SESSION['alias']; ?></h2>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="panel.php?page-user=1">panel</a></li>
        <li><a href="panel.php?page-user=2">tu perfil</a></li>
        <li><a href="panel.php?page-user=3">Historial de compras</a></li>
      <?php if ($_SESSION['tipo_user']==false) { ?>
        <li><a href="panel.php?page-user=4">listar productos</a></li>
        <li><a href="panel.php?page-user=5" >subir producto</a></li>
        <li><a href="panel.php?page-user=6" >ver clientes</a></li>
      
        <?php } ?>
      </ul><br>
    </div>
    <?php 


     $paginado= (isset($_GET['page-user'])) ? $_GET['page-user'] :1;
   switch ($paginado) {
                 case 1:
                   include('home_panel.php');
                   break;
                   case 2:
                   include('tu_perfil.php');
                   break;
                   case 3:
                   include('historial_compras.php');
                   break;
                   case 4:
                   include('product_list.php');
                   break;
                   case 5:
                   include('subir_product.php');
                   break;   
                   case 6:
                   include('lista_clientes.php');
                   break;   
                         

                           }



     ?>

    </div>
  </div>
</div>
</div>
</div>
<?php

//echo $_SESSION['user'];

//echo $_SESSION['img'];
?>
<footer>
    <?php include '../inc/footer.php'; ?>
</footer>
</body>
</html>
