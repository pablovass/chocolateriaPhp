<?php 
session_start();

 ?>
    <div class="item contact padding-top-0 padding-bottom-0" id="contact1">

    		<div class="wrapper grey">


    			<div class="container">

    				<div class="col-md-5">

    					<h3 class="margin-bottom-40 editContent">No dude en consultarnos!  Llena todos los campos. </h3>

    					<form  action="page/contacto_proseso.php" method="post">

    						<div class="form-group">
    				    		<input type="text" class="form-control input-lg"  name="name" placeholder="Tu Nombre *">
    				  		</div>

    				  		<div class="form-group">
    				  			<input type="email" class="form-control input-lg" id="email" name="email" placeholder="Tu email *">
    				  		</div>

    				  		<div class="form-group">
    				  			<input type="phone" class="form-control input-lg" id="phone" name="phone" placeholder="Numero de telefono">
    				  		</div>

    				  		<div class="form-group">
    				  			<textarea class="form-control" rows="4" name="mensaje" placeholder="Dejanos tu consuta o comentario..."></textarea>
    				  		</div>

    				    	

    				  		<hr>

    				  		<button type="submit" class="btn btn-primary btn-embossed btn-lg btn-wide">mandar </button>

    					</form>

    				</div><!-- /.col-md-5 -->

    				<div class="col-md-6 col-md-offset-1">

	    				<div class="editContent">
    					<h5>Nuestros Datos:</h5>

    					<p class="text-light margin-bottom-40">
    						Recorda que si estas inscrito! en el panel de usuario nos podes dejar mensajes!
    					</p>
	    				</div><!-- /.editContent -->

    					<p>
    						<b class="chead"><span class="fa fa-map-marker"></span>DIRECCION</b><br>
    						<span class="editContent">
    						Av. Corrientes 2239<br>
    						Cap. Fed. Buenos Aires<br>
    						Argentina
    						</span>
    					</p>

    					<p>
    						<b class="chead"><span class="fa fa-phone"></span> TELEFONO</b><br>
    						<span class="editContent">012 3456 7890</span>
    					</p>

    					<p>
    						<b class="chead"><span class="fa fa-envelope"></span> EMAIL</b><br>
    						<a href="#" class="editContent">info@argentin.com</a>
    					</p>

    				</div><!-- /.col-md-6 -->

    			</div><!-- /.container -->

    		</div><!-- /.wrapper -->

    	</div><!-- /.item -->
