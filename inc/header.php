  <body>

    <div id="page" class="page">

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
             <ul class="dropdown-menu">
               <li><a href="<?php echo isset($_SESSION['email'])?'page/controlPane.php':'index.php?page=4' ?>">Entrar <span class="fa fa-lock"></span></a></li>

               <li><a href="../index.php?page=5">Registrarte</a></li>
            </ul>
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
<?php

     $paginado= (isset($_GET['page'])) ? $_GET['page'] : '';
   switch ($paginado) {
                 case 1:
                   include('p/home.php');
                   break;
                   case 2:
                     include('p/list_products.php');
                     break;
                     case 3:
                       include('p/contacto.php');
                       break;
                       case 4:
                         include('p/login.php');
                         break;
                         case 5:
                           include('p/registro.php');
                           break;

                           }


?>

