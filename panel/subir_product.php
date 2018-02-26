


<div class="col-sm-10">
<h1>Subir productos </h1>
    <div class="col-sm-6">
      <div class="well">
      <form action="upload.php" method="post" enctype="multipart/form-data">
               <div class="form-group">
                <label>Ingrese nombre del nuevo producto</label>
                <input name="nombre" type="text" class="form-control" id="comment" required>
               </div>
               <div class="form-group">
                  <label for="comment">Descripcion:</label>
                  <textarea name ="descripcion" required class="form-control" rows="5" id="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-default" value="Upload Image"> ENVIAR</button>
         </div>
          </div>
              <div class="col-sm-3">
              <div class="well">
                  <div class="form-group">
                  <label >Precio:</label>
                  <input name="precio" type="text" class="form-control" id="comment" required>
                  </div>

              <label for="sel1">Selecciona un categoria:</label>
              <select required class="form-control" id="sel1" name="categoria">
                <option>nada</option>
                <option>chocolate Blanco</option>
                <option>chocolate Amargo</option>
                <option>Mix</option>
              </select>

                <div class="form-group">
                  <p>imangen del producto:</p>  
                  <input required type="file" name="fileToUpload" id="fileToUpload">
                </div>
                 </div>   
                </div>  
          </form>
               </div>
              
    