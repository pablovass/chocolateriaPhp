    
     
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
        </div>
       </div>
      </div>
    