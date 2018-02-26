
<?php 
include("./db/productos.php");
 
 ?>
<div class="row banner">

  <div class="col-md-10 col-md-offset-1">


    <div id="myCarousel" class="carousel carousel1 slide margin-top-80 margin-bottom-80"  data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active text-center">
                      <h1 class="editContent">Ideales para estas fiestas !! </h1>

        <p class="lead editContent">
          Bocaditos de coco !!
        </p>
        <a href=""><img src="img/slide/01.png" alt=""></a>
        <p class="text-center">
          <a href="#" class="btn btn-default btn-embossed btn-wide"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Agregalo a tu carrito </a>
        </p>
    </div>
    <div class="item text-center">
        <h1 class="editContent">Bombones con los relenos que te no podes imaginar  </h1>
        <p class="lead editContent">
          ponelos en tu mesa dulce en estas fiestas !!
        </p>
        <a href=""><img src="img/slide/02.png" alt=""></a>
        <p class="text-center">
          <a href="#" class="btn btn-info btn-embossed btn-wide"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Elegi los sabores </a>
        </p>
    </div>
    <div class="item text-center">
        <h1 class="editContent">Promo para las fiestas ! que estas esperando ! </h1>
        <p class="lead editContent">
          Frutillas con chocolates. Ideales para el postre!!
        </p>
        <a href=""><img src="img/slide/03.png" alt=""></a>
        <p class="text-center">
          <a href="#" class="btn btn-primary btn-embossed btn-wide"><span class="glyphicon glyphicon-shopping-cart"></span>  &nbsp;Encargalas ya</a>
        </p>
    </div>
  </div>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  </div>



  </div>

</div><!-- /.row -->

</div><!-- /.container -->

</div><!-- /.wrapper -->
</header>
<!-- /.item --><!-- Start Content Block 1-7 -->
<section id="content-1-7" class="content-1-7 content-block">

<div class="container">

<div class="row">
<div class="col-md-2 col-sm-4 col-xs-6">
<img alt="Choco Logo" src="img/marcasCho/marca01.jpg">
</div>

<div class="col-md-2 col-sm-4 col-xs-6">
<img alt="Choco Logo" src="img/marcasCho/marca02.png">
</div>

<div class="col-md-2 col-sm-4 col-xs-6">
<img alt="Choco Logo" src="img/marcasCho/marca03.png">
</div>

<div class="col-md-2 col-sm-4 col-xs-6">
<img alt="Choco Logo" src="img/marcasCho/marca04.png">
</div>

<div class="col-md-2 col-sm-4 col-xs-6">
<img alt="Choco Logo" src="img/marcasCho/marca05.png">
</div>

<div class="col-md-2 col-sm-4 col-xs-6">
<img alt="Choco Logo" src="img/marcasCho/marca06.png">
</div>
</div><!--end of row-->

</div><!-- /.container -->

</section>
<!-- // End Content Block 1-7 -->
<div class="item pricing" id="pricing_table1">
 <h1  align="center"><b>Productos de Chocolatin Argentin</b></h1>

<div class="container">

<div class="row">
<!--/////////////////-->
<?php for ($i=0; $i <3; $i++) { ?>


<div class="col-md-4">

    <div class="pricing1">

      <div class="top">

        <h2 class="editContent"><?php echo $productos[$i]['nombre'] ?></h2>
        <a href="./p/detalle_producto.php?detalle=<?php echo  $productos[$i]['id']  ?>"><img src="img/product/<?php echo $productos[$i]['img_name'] ?>" alt="" style=" width: 200px; height: 200px;"></a>
        <p class="price "><b class="editContent">$ <?php echo $productos[$i]['precio'] ?></b> <span class="editContent">La caja</span></p>

      </div><!-- /.top -->

      <div class="bottom">

        <div class="editContent">
        <ul>    
          <li><b><?php echo $productos[$i]['descripcion_corta'] ?></b></li>
          <li>Solo compra online</li>
        </ul>
        </div><!-- /.editContent -->
        <a href="./p/detalle_producto.php?detalle=<?php echo  $productos[$i]['id']  ?>" class="btn btn-lg btn-embossed btn-block btn-primary"><span class="fa fa-credit-card"></span> Buy Now</a>
      </div><!-- /.bottom -->
    </div><!-- /.pricing1 -->
 </div><!-- /.col-md-4 col   "http://localhost/producto_detalle.html?id=${prod.id} -->

 <?php  } ?>
 
</div><!-- /.row -->

</div><!-- /.container -->


</div>

<div class="footerWrapper" id="footer2">
<a href="index.php?page=2" class="btn btn-lg btn-embossed btn-block btn-primary" style="margin-bottom: 4px;"><span class="glyphicon glyphicon-shopping-cart"></span> Ver mas Productos </a>
</div>



