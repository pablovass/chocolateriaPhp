
<?php 

/*
$_SESSION['nombre']='';
$_SESSION['apellido']='';
$_SESSION['pais']='';
$_SESSION['email']='';
$_SESSION['password']='';
$_SESSION['img_name']='';
$_SESSION['tipo_user']='';
$_SESSION['id']='';
$_SESSION['comṕras']='';
$_SESSION['dinero']='';
*/
 ?>
<div class="col-sm-10 text-left"> 
      <h1>tu perfil</h1>
      <div class="col-sm-4">
	      <div class="well">
        <a href="#" data-toggle="popover" title="EDITAR LA FOTO">
	  		<img src="../img/avatar/mario.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        </a>

		  </div>
      </div>
      <div class="col-sm-6">
        <div class="well">

          <div class="form-group">
            <div class="input-group">
              <h5><b>Alias:<em> <?php echo $_SESSION['alias']; ?></em> </b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn btn-default" aria-label="Left Align" data-toggle="popover" title="cambia tu alias">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Nombre: <em> <?php echo $_SESSION['nombre']; ?></em></b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn btn-default" aria-label="Left Align" data-toggle="popover" title="cambia tu cambia tu nombre">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Apellido:<em> <?php echo $_SESSION['apellido']; ?></em></b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn btn-default" aria-label="Left Align" data-toggle="popover" title="cambia tu apellido">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Email: <em> <?php echo $_SESSION['email']; ?></em></b></h5>
         
              <span class="input-group-btn" >
                <button type="button" class="btn btn-default" aria-label="Left Align" data-toggle="popover" title="cambia tu email o contraseña">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Credito: <em> $<?php echo $_SESSION['dinero']; ?></em></b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn btn-default" aria-label="Left Align" data-toggle="popover" title="carga mas dinero">
                <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
         
              
        </div>   
      </div>  

