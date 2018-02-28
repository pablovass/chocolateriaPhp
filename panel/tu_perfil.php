
<div class="col-sm-10 text-left"> 
      <h1>tu perfil</h1>
      <div class="col-sm-4">
	      <div class="well">
        <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal0"  data-toggle="popover" title="CAMBIA TU FOTO">
        <img src="../img/avatar/<?php echo $_SESSION['img_name']; ?>" class="img-thumbnail" alt="foto de perfil" width="304" height="236"> 
        </button>

		  </div>
      </div>
      <div class="col-sm-6">
        <div class="well">

          <div class="form-group">
            <div class="input-group">
              <h5><b>Alias: <em> <?php echo $_SESSION['alias']; ?></em> </b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal1"  data-toggle="popover" title="cambia tu alias">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Nombre: <em> <?php echo $_SESSION['nombre']; ?></em></b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal2"  data-toggle="popover" title="cambia tu cambia tu nombre">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Apellido:<em> <?php echo $_SESSION['apellido']; ?></em></b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal3"  data-toggle="popover" title="cambia tu apellido">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Email: <em> <?php echo $_SESSION['email']; ?></em></b></h5>
                <span class="input-group-btn" >
                <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal4"  data-toggle="popover" title="cambia tu email o contraseña">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Credito: <em> $<?php echo $_SESSION['dinero']; ?></em></b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal5"  data-toggle="popover" title="carga mas dinero">
                <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
         
              
        </div>   
      </div>
      <!-- /////////               -->
    <div class="modal fade" id="myModal0" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
    
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cambia foto </h4>
        </div>
        <div class="modal-body">
          <p>Tu Alias Actual es:</p>
          <img src="../img/avatar/<?php echo $_SESSION['img_name']; ?>" class="img-thumbnail" alt="foto de perfil" width="304" height="236">
          <hr>
          <div class="input-group">
            
            <input required type="file" name="img" id="img">
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-info" value="enviar">
        </div>
      </div>
      
    </div>
  </div>

 <!-- /////////               -->  
     <!-- /////////               -->
    <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
    
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cambia Alias </h4>
        </div>
        <div class="modal-body">
          <p>Tu Alias Actual es: <em><?php echo $_SESSION['alias'] ?></p>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="alias" type="text" class="form-control" name="alias" placeholder="nuevo alias">
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-info" value="enviar">
        </div>
      </div>
      
    </div>
  </div>

 <!-- /////////               -->
    <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cambia nombre </h4>
        </div>
        <div class="modal-body">
          <p>Tu Alias Actual es: <em><?php echo $_SESSION['nombre'] ?></p>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="alias" type="text" class="form-control" name="nombre" placeholder="nuevo nombre">
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-info" value="enviar">
        </div>
      </div>
      
    </div>
  </div>
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cambia apellido  </h4>
        </div>
        <div class="modal-body">
          <p>Tu Alias Actual es: <em><?php echo $_SESSION['apellido'] ?></p>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="alias" type="text" class="form-control" name="apellido" placeholder="nuevo apellido">
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-info" value="enviar">
        </div>
      </div>
      
    </div>
  </div>

 <!-- /////////               -->
    <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">cambiar la contraseña y email </h4>
        </div>
        <div class="modal-body">
          <p>Tu email actual es: $<em><?php echo $_SESSION['email'] ?></p>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input id="alias" type="text" class="form-control" name="email" placeholder=" ingrese su mail">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="alias" type="text" class="form-control" name="password" placeholder="nuevo password">
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-info" value="enviar">
        </div>
      </div>
      
    </div>
  </div>
 <!-- /////////               -->
    <div class="modal fade" id="myModal5" role="dialog">
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
