<?php 
include('../db/productos.php');
include('../inc/head.php');

$paginado= (isset($_GET['detalle'])) ? $_GET['detalle'] :'';

echo $paginado;

?>

<hr>
<div class="container">
            <section id="content1-5" class="content1-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">  
                            <div><img class="img-responsive" src="../img/product/<?php echo $productos[0]['img_name'] ?>" alt="#"></div>
                        </div>  
                        <div class="col-md-5">  
                            <div class="feature-content">
                                <h1 class="content-title">We Can Help Your Business </h1>
                                <p>Lorem ipsum dolor sit amet reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Haccusamus terry richardson ad squid. pwolf moon officia aute, non cupidatat skateboard. Wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt cusamus terry richardson ad squid.</p>
                                
                                <div class="text-left">
                                    <a href="#" class="btn btn-info button">Get Started</a>
                                    <a href="#" class="btn btn-success button">Download</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!--======== blog update =========-->
            <section id="blog1" class=" blog1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h1 class="sec-title">Blog Updates</h1>
                            <p class="sec-sub-title">Lorem Ipsum adalah text contoh digunakan didalam industri pencetakan dan typesetting.
                            Lorem telah menjadi text contoh semenjak tahun ke 1500an, apabila pencetak yang kurang terkenal mengambil.</p>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="blog-post wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="post-img">
                                            <img class="img-responsive" src="../img/product/<?php echo $productos[0]['img_name'] ?>" alt="image">
                                            <div class="date text-center"><span>15</span><br>Dec</div>
                                            <ul class="list-inline post-info">
                                                <li><i class="lnr lnr-eye"></i> 325</li>
                                                <li><i class="lnr lnr-bubble"></i> 74</li>
                                                <li class="post-tag text-uppercase">Style</li>
                                            </ul>
                                        </div>    
                                        <div class="blog-details">
                                            <h4 class="media-heading">Lorem Ipsum adalah contoh digun akan didal indust</h4>
                                            <p>Lorem Ipsum adalah text contoh digun akan didalam industri pence taka types etting 
                                            adalah text contoh.</p>
                                             <ul class="list-inline text-capitalize">
                                                <li>by John Doe</li>
                                                <li class="pull-right">Mobile.Computer</li>
                                            </ul>
                                        </div>
                                    </div>    
                                </div>    
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="blog-post wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="post-img">
                                            <img class="img-responsive" src="../img/product/<?php echo $productos[0]['img_name'] ?>" alt="image">
                                            <div class="date text-center"><span>15</span><br>Dec</div>
                                            <ul class="list-inline post-info">
                                                <li><i class="lnr lnr-eye"></i> 325</li>
                                                <li><i class="lnr lnr-bubble"></i> 74</li>
                                                <li class="post-tag text-uppercase">Design</li>
                                            </ul>
                                        </div>    
                                        <div class="blog-details">
                                            <h4 class="media-heading">Lorem Ipsum adalah contoh digun akan didal indust</h4>
                                            <p>Lorem Ipsum adalah text contoh digun akan didalam industri pence taka types etting 
                                            adalah text contoh.</p>
                                             <ul class="list-inline text-capitalize">
                                                <li>by John Doe</li>
                                                <li class="pull-right">Mobile.Computer</li>
                                            </ul>
                                        </div>
                                    </div>    
                                </div>    
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="blog-post wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="post-img">
                                            <img class="img-responsive" src="../img/product/<?php echo $productos[0]['img_name'] ?>" alt="image">
                                            <div class="date text-center"><span>15</span><br>Dec</div>
                                            <ul class="list-inline post-info">
                                                <li><i class="lnr lnr-eye"></i> 325</li>
                                                <li><i class="lnr lnr-bubble"></i> 74</li>
                                                <li class="post-tag text-uppercase">Sport</li>
                                            </ul>
                                        </div>    
                                        <div class="blog-details">
                                            <h4 class="media-heading">Lorem Ipsum adalah contoh digun akan didal indust</h4>
                                            <p>Lorem Ipsum adalah text contoh digun akan didalam industri pence taka types etting 
                                            adalah text contoh.</p>
                                             <ul class="list-inline text-capitalize">
                                                <li>by John Doe</li>
                                                <li class="pull-right">Mobile.Computer</li>
                                            </ul>
                                        </div>
                                    </div>    
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

<footer>
    <?php include '../inc/footer.php'; ?>
</footer>
</body>
</html>




