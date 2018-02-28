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
                    <?php for ($i=0; $i <6; $i++) { ?>
                      
                       <a href="./p/detalle_producto.php?detalle=<?php echo  $productos[$i]['id']  ?>">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/product/<?php echo $productos[$i]['img_name'] ?>" style=" width: 250px; height: 145px;">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $productos[$i]['precio'] ?></h4>
                                <h4><a href="#"><?php echo $productos[$i]['nombre'] ?></a>
                                </h4>
                                <p> <?php echo $productos[$i]['descripcion_corta'] ?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><?php echo $productos[$i]['categoria'] ?></p>
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
                    </a>

                    <?php } ?>
                    <!---->
                    
 <!-- /////////               -->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">cargar credito </h4>
        </div>
        <div class="modal-body">
          <p>Tu saldo actual es: $<em><?php echo $_SESSION['dinero'] ?></p>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input id="alias" type="text" class="form-control" name="alias" placeholder="ingrese cifra">
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-info" value="enviar">
        </div>
      </div>
      
    </div>
  </div>



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
