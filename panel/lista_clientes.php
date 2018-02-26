
    <div class="col-sm-10">
  <h1>lista de clientes</h1>
      <div class="row">
      <div class="well">
          <div class="table-responsive ">
          <table class="table  table-hover  table-bordered ">
            <tr class="active">
              <th>alias</th>
              <th>nombre</th>
              <th>apellido</th>
              
              <th>imagen</th>
              <th>id</th>
              <th>compras</th>
              <th>dinero</th>
            </tr>
            <?php for ($i=0; $i < count($usuarios); $i++) {?> 
            
            <tr>
              <td><?php echo $usuarios[$i]['alias'] ?></td>
              <td><?php echo $usuarios[$i]['nombre'] ?></td>
              <td><?php echo $usuarios[$i]['apellido'] ?></td>
              
              <td><img src="../img/product/<?php //echo $usuarios[$i]['img_name'] ?>" alt="" style=" width: 50px; height: 50px;"></td>
              <td><?php echo $usuarios[$i]['id']; ?></td>
              <td><?php echo $usuarios[$i]['compras']; ?></td>
              <td><?php echo $usuarios[$i]['dinero']; ?></td>
            </tr>
            <?php  } ?>
            
          </table>
          </div>

      </div>
      </div>
      </div>
    </div>
      