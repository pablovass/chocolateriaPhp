<br>
    <div class="container">
    <div class="col-sm-9">
      <div class="well">
        <h4><?php echo $_SESSION['nombre'] ." ".$_SESSION['apellido']  ; ?></h4>
        <p>Bienvenodi a tu panel de usuario </p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Mi credito</h4>
            <p>$ <?php echo $_SESSION['dinero'] ?></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>mensajes</h4>
            <p>proximante</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>compras</h4>
            <p> <?php echo  $_SESSION['compras']; ?></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>mi carrito</h4>
            <p>proximamente</p> 
          </div>
        </div>
      </div>