<?php
require_once('./db/productos.php');


 ?>

    <!-- Page Content -->
    <div class="container">
        <hr>
<hr>
        <div class="row">


            <div class="col-md-3">

                <p class="lead"></p>
                <div class="list-group">
                    <a href="#" class="list-group-item">chocolate Amargo</a>
                    <a href="#" class="list-group-item">mix</a>
                    <a href="#" class="list-group-item">chocolate blanco</a>
                </div>
            </div>

            <div class="col-md-9">
              <div class="row">
                <h1  align="center"><b>Productos de Chocolatin Argentin</b></h1>
                    <!---->
                    <?php foreach ($productos as $producto) { ?>
                       
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/product/<?php echo $producto['img_name'] ?>" style=" width: 250px; height: 145px;">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $producto['precio'] ?></h4>
                                <h4><a href="#"><?php echo $producto['nombre'] ?></a>
                                </h4>
                                <p> <?php echo $producto['descripcion_corta'] ?><a target="_blank" href="">y muy pocas unidades</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><?php echo $producto['categoria'] ?></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <!---->
                    





                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>



    </div>
    <style type="text/css">
    element.style{
  padding-top: 30px;
}
    </style>
