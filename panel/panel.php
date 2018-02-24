<?php 

include('../db/productos.php');
include('../db/clientes.php');

 ?>
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
        <li><a href="panel.php?page=1">tu perfil</a></li>
        <li><a href="panel.php?page=2">Historial de compras</a></li>
        <li><a data-toggle="collapse" data-target="#demo1">listar productos</a></li>
        <li><a data-toggle="collapse" data-target="#demo" >subir producto</a></li>
        <li><a data-toggle="collapse" data-target="#demo3" >ver Usuario</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>UsuarioName</h2>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="panel.php?page=1">tu perfil</a></li>
        <li><a href="panel.php?page=2">Historial de compras</a></li>
        <li><a data-toggle="collapse" data-target="#demo1">listar productos</a></li>
        <li><a data-toggle="collapse" data-target="#demo" >subir producto</a></li>
         <li><a data-toggle="collapse" data-target="#demo3" >ver Usuario</a></li>
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
      <!---->
      <div id="demo1" class="collapse">
      <div class="row">
        <div class="col-sm-12">
        <!--aca va ir mi tabla -->

        <div class="well">
          <div class="table-responsive">
          <table class="table  table-hover  table-bordered ">
            <tr class="active">
              <th>nombre</th>
              <th>descripcion</th>
              <th>precio</th>
              <th>categoria</th>
              <th>imagen</th>
              <th>id</th>
              <th>cant</th>
            </tr>
            <?php for ($i=0; $i < count($productos); $i++) {?> 
            
            <tr>
              <td><?php echo $productos[$i]['nombre'] ?></td>
              <td><?php echo $productos[$i]['descripcion'] ?></td>
              <td>$ <?php echo $productos[$i]['precio'] ?></td>
              <td><?php echo $productos[$i]['categoria'] ?></td>
              <td><img src="../img/product/<?php echo $productos[$i]['img_name'] ?>" alt="" style=" width: 50px; height: 50px;"></td>
              <td><?php echo $productos[$i]['id']; ?></td>
              <td><?php echo $productos[$i]['cantidad']; ?></td>
            </tr>
            <?php  } ?>
            
          </table>
          </div>

      </div>
      </div>
      </div>
    </div>
      <!-- para subir productos-->

<!--cientes -->
 <div id="demo3" class="collapse">
      <div class="row">
        <div class="col-sm-12">
     


        <div class="well">
          <div class="table-responsive ">
          <table class="table  table-hover  table-bordered ">
            <tr class="active">
              <th>alias</th>
              <th>nombre</th>
              <th>apellido</th>
              
              <th>imagen</th>
              <th>id</th>
              <th>compras</th>
              <th>dinero</th>
            </tr>
            <?php for ($i=0; $i < count($usuarios); $i++) {?> 
            
            <tr>
              <td><?php echo $usuarios[$i]['alias'] ?></td>
              <td><?php echo $usuarios[$i]['nombre'] ?></td>
              <td><?php echo $usuarios[$i]['apellido'] ?></td>
              
              <td><img src="../img/product/<?php //echo $usuarios[$i]['img_name'] ?>" alt="" style=" width: 50px; height: 50px;"></td>
              <td><?php echo $usuarios[$i]['id']; ?></td>
              <td><?php echo $usuarios[$i]['compras']; ?></td>
              <td><?php echo $usuarios[$i]['dinero']; ?></td>
            </tr>
            <?php  } ?>
            
          </table>
          </div>

      </div>
      </div>
      </div>
    </div>
      <!-- para subir productos-->

      <div class="row">
        <div id="demo" class="collapse">
        <div class="col-sm-8">
          <div class="well">
            <!-- -->
            <form action="upload.php" method="post" enctype="multipart/form-data">
             <div class="form-group">
              <label>Ingrese nombre del nuevo producto</label>
              <input name="nombre" type="text" class="form-control" id="comment" required>
             </div>
             <div class="form-group">
                <label for="comment">Descripcion:</label>
                <textarea name ="descripcion" required class="form-control" rows="5" id="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-default" value="Upload Image"> ENVIAR</button>
              </div>
              </div>
              <div class="col-sm-4">
              <div class="well">
              <div class="form-group">
              <label >Precio:</label>
              <input name="precio" type="text" class="form-control" id="comment" required>
              </div>
              <label for="sel1">Selecciona un categoria:</label>
              <select required class="form-control" id="sel1" name="categoria">
                <option>nada</option>
                <option>chocolate Blanco</option>
                <option>chocolate Amargo</option>
                <option>Mix</option>
              </select> 
                <div class="form-group">
                    <p>imangen del producto:</p>  
                    <input required type="file" name="fileToUpload" id="fileToUpload">
                    </div>
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
