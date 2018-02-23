<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["image"]);
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

 /*

tengo que hacer el formulario entre en algunos de los sectores 
que estan en la pagina principal de hay que se grabe se sobre escriba en el array de productos 
como se hace en el los usuarios


*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/flat-ui.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style.complete.css" rel="stylesheet">
    <link rel="icon" href="../images/logo/logo.jpg">
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
             <a  class="dropdown-toggle" clas="" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> Usuario<span class="caret"></span></a>
            
           </li>
         </ul>
       </div><!-- /.navbar-collapse -->

            </div><!-- /.container -->

          </nav>


          <div class="row banner">

            <div class="col-md-10 col-md-offset-1">
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.wrapper -->
      </header>
<br>
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
      <a class="navbar-brand" href="#">UsuarioName </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="panel.php?page=1">perfil</a></li>
        <li><a href="panel.php?page=2">Age</a></li>
        <li><a href="panel.php?page=3">Gender</a></li>
        <li><a data-toggle="collapse" data-target="#demo" >subir producto</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>UsuarioName</h2>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="panel.php?page=1">boton</a></li>
        <li><a href="panel.php?page=2">Age</a></li>
        <li><a href="panel.php?page=3">Gender</a></li>
        <li><a data-toggle="collapse" data-target="#demo" >subir producto</a></li>
      </ul><br>
    </div>
    <?php 


     $paginado= (isset($_GET['page'])) ? $_GET['page'] : '';
   switch ($paginado) {
                 case 1:
                   include('panel.php');
                   break;
                   case 2:
                     include('#');
                     break;
                     case 3:
                       include('#');
                       break;
                      
                         

                           }



     ?>
    <br>
    <div class="container">
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
      </div>
      <!-- para subir productos-->

      <div class="row">
        <div id="demo" class="collapse">
        <div class="col-sm-8">
          <div class="well">
            <form action="image_list.php" method="post" enctype="multipart/form-data">
             <div class="form-group">
              <label>Ingrese nombre del nuevo producto</label>
              <input type="text" class="form-control" id="comment" required>
             </div>
             
               <div class="form-group">
                 <label for="comment">Descripcion:</label>
                <textarea required class="form-control" rows="5" id="comment"></textarea>
               </div>
   <div class="large-10 columns">
                    <button required class="file-upload">            
                      <input  type="file" class="file-input" name="image">Elegir archivo
                    </button>

                  </div>
               

              <button type="submit" class="btn btn-default">Submit</button>
             <!-- </form> -->
              </div>
        </div>
        
<div class="col-sm-4">

          <div class="well">
            <div class="form-group">
             <label >Precio:</label>
             <input type="text" class="form-control" id="comment" required>
              </div>
            <label for="sel1">Selecciona un categoria:</label>
      <select required class="form-control" id="sel1">
        <option>nada</option>
        <option>chocolate Blanco</option>
        <option>chocolate Amargo</option>
        <option>Mix</option>
      </select> 

          </div>
        </div>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<footer>
    <?php include '../inc/footer.php'; ?>
</footer>
</body>
</html>
