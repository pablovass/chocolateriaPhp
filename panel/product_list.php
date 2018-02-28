    
        <?php 

        $tot_productos=count($productos);

       
         ?>     
    <div class="col-sm-10">
      
      <h1>Lista de productos </h1>
     
     <div class="well">
      <div class="table-responsive">

          <table class="table  table-hover  table-bordered ">
            <tr class="active">
              <th>nombre</th>
              <th>descripcion</th>
              <th>precio</th>
              <th>categoria</th>
              <th>imagen</th>
              <th>id</th>
              <th>cant</th>
            </tr>
            <?php for ($i=0; $i < count($productos); $i++) {?> 
            

             
            <tr>
              <td><?php echo $productos[$i]['nombre'] ?></td>
              <td><?php echo $productos[$i]['descripcion_corta'] ?></td>
              <td>$ <?php echo $productos[$i]['precio'] ?></td>
              <td><?php echo $productos[$i]['categoria'] ?></td>
              <td><img src="../img/product/<?php echo $productos[$i]['img_name'] ?>" alt="" style=" width: 50px; height: 50px;"></td>
              <td><?php echo $productos[$i]['id']; ?></td>
              <td><?php echo $productos[$i]['cantidad']; ?></td>
            
            </tr>
            
            
            <?php  } ?>
            
          </table>
          <p>total de productos: <b> <?php echo $tot_productos;?></b></p>
        </div>
       </div>
      </div>

 <div class="modal fade" id="myModal" role="dialog">
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
