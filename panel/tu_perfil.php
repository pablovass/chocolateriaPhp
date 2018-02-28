
<div class="col-sm-10 text-left"> 
      <h1>tu perfil</h1>
      <div class="col-sm-4">
	      <div class="well">
        <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal"  data-toggle="popover" title="CAMBIA TU FOTO">
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
                <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal"  data-toggle="popover" title="cambia tu alias">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Nombre: <em> <?php echo $_SESSION['nombre']; ?></em></b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal"  data-toggle="popover" title="cambia tu cambia tu nombre">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Apellido:<em> <?php echo $_SESSION['apellido']; ?></em></b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal"  data-toggle="popover" title="cambia tu apellido">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Email: <em> <?php echo $_SESSION['email']; ?></em></b></h5>
                <span class="input-group-btn" >
                <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal"  data-toggle="popover" title="cambia tu email o contraseña">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <h5><b>Credito: <em> $<?php echo $_SESSION['dinero']; ?></em></b></h5>
              <span class="input-group-btn" >
                <button type="button" class="btn-group btn-group-justified" data-toggle="modal" data-target="#myModal"  data-toggle="popover" title="carga mas dinero">
                <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                </button>
              </span>   
            </div>
          </div>
         
              
        </div>   
      </div>  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
