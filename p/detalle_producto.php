<?php 
include('../db/productos.php');
include('../inc/head.php');

$paginado= (isset($_GET['detalle'])) ? $_GET['detalle'] :'';


?>

<hr>

<div class="container">
	<?php  for ($i=0; $i <count($productos) ; $i++) { 
				if ($productos[$i]['id']== $paginado) {
 													?>

            <section id="content1-5" class="content1-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">  
                        	<hr>
                            <div><img class="img-responsive" src="../img/product/<?php echo $productos[$i]['img_name']; ?>" style=" width: 400px; height: 400px;" alt="#"></div>
                        </div>  
                        <div class="col-md-5">  
                            <div class="feature-content">
                                <h1 class="content-title"><?php echo $productos[$i]['nombre']; ?> </h1>
                                <p><?php echo $productos[$i]['descripcion']." ". "<em>".$productos[$i]['categoria']."</em>"; ?></p>
                                
                                <div class="text-left">
                                    <a href="#" class="btn btn-info button">Comprar</a>
                                    <a href="#" class="btn btn-success button">Carrito</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php  	} }  ?>


            <!--======== blog update =========-->
            <section id="blog1" class=" blog1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h1 class="sec-title">otras Sugerencias</h1>
                            <p class="sec-sub-title">Mas productos de la misma categoria</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                    
                                 <!---->   
                                 <?php 
                                    for ($i=0; $i <3 ; $i++) { 
                                 	?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="blog-post wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="post-img">
                                            <img class="img-responsive" src="../img/product/<?php echo $productos[$i]['img_name'] ?>" style=" width: 400px; height: 255px;" alt="image">
                                            
                                        </div>    
                                        <div class="blog-details">
                                            <h4 class="media-heading"><?php echo $productos[$i]['nombre']; ?></h4>
                                            <p><?php echo '$'. "<b>".$productos[$i]['precio']."</b>"." ".$productos[$i]['descripcion_corta']." ". "<em>".$productos[$i]['categoria']."</em>"; ?></p>
                                             <ul class="list-inline text-capitalize">
                                                <li>by John Doe</li>
                                                <li class="pull-right">Mobile.Computer</li>
                                            </ul>
                                        </div>
                                    </div>    
                                </div>
								<?php   }?>
                                <!---->    
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
<?php echo $paginado ?>
<footer>
    <?php include '../inc/footer.php'; ?>
</footer>
</body>
</html>




