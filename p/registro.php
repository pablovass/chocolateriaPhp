<hr>
<hr>
<div class="container panel panel-primary text-center text-bold text-light mt-4x"><p><b>Hola, <?php echo isset( $_SESSION['alias'] ) ? $_SESSION['alias'].' ya estas logueado y ya entraste a session! ' : ' Invitado para poder hacer compras y ver mas productos tenes loguearte o pregistrarte '; ?></b></p></div>
        

        <div class="login-page bk-img" >
          <div class="form-content">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">

          <h1 class="text-center text-bold text-light mt-4x">registro de usuario nuevo</h1>
                  <div class="well row pt-2x pb-3x bk-light">
                    <div class="col-md-8 col-md-offset-2">
                      
                      <form action="page/controlPane.php"  method="post" enctype="multipart/form-data">
                        <label  class="text-uppercase text-sm">Alias</label>
                        <input name="alias" type="text" placeholder="Alias" class="form-control mb"/>


                        <label  class="text-uppercase text-sm">Nombre</label>
                        <input name="nombre" type="text" placeholder="nombre" class="form-control mb"/>

                        <label  class="text-uppercase text-sm">Apellido</label>
                        <input name="apellido" type="text" placeholder="apellido" class="form-control mb"/>

                        <label  class="text-uppercase text-sm">Pais</label>
                        <input name="pais" type="text" placeholder="Pais" class="form-control mb"/>

                        <label  class="text-uppercase text-sm">e-mail</label>
                        <input name="email" type="text" placeholder="e-mail" class="form-control mb"/>

                        <label class="text-uppercase text-sm">Password</label>
                        <input name="password" type="password" placeholder="Password" class="form-control mb"/>

                      

                        <button class="btn btn-primary btn-block" type="submit">registrarte</button>

                      </form>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Load JS here for greater good =============================-->

  
