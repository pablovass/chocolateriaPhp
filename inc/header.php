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
             <a  class="dropdown-toggle" clas="" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><?php echo isset($_SESSION['alias']) ? $_SESSION['alias']: 'Login' ?>
              <?php 
                   if (isset($_SESSION['img_name'])) {
                      $img= $_SESSION['img_name'];
                    echo isset($_SESSION['img_name']) ? "<span>"."<img src=".'../img/avatar/'."$img"." class='img-rounded' alt='img-avatar' width='20' height='20'></span>":''; 
                 }else{
                  }
              ?>
              
                   
             <span class="caret"></span>
             </a>
             <ul class="dropdown-menu">
               <li><a href="<?php echo isset($_SESSION['alias'])?'panel/panel.php':'index.php?page=4' ?>">Entrar <span class="fa fa-lock"></span></a></li>
                   <?php echo isset($_SESSION['alias'])? '': "<li>"."<a href='index.php?page=5'>".'registrarte'."</a>"."</li>"; ?>         
              
              
            </ul>
           </li>
         </ul>
       </div><!-- /.navbar-collapse --><!-- /.navbar-collapse -->

            </div><!-- /.container -->

          </nav>


          <div class="row banner">

            <div class="col-md-10 col-md-offset-1">
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.wrapper -->
      </header>

