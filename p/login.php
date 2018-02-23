
        <hr>
<div class="container panel panel-primary text-center text-bold text-light mt-4x">
  <p>
    <b>Hola,<?php echo isset ($_SESSION['name'])?$_SESSION['name']:' para poder hacer compras y ver mas productos tenes loguearte o pregistrarte'; ?>  </b>
  </p>
</div>
        <div class="login-page bk-img" >
          <div class="form-content">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">

          <h1 class="text-center text-bold text-light mt-4x">Sign in</h1>
                  <div class="well row pt-2x pb-3x bk-light">
                    <div class="col-md-8 col-md-offset-2">
                      
                      <form  action="./db/true_login.php"  method="post" enctype="multipart/form-data">

                        <label  class="text-uppercase text-sm">e-mail</label>
                        <input name="email" type="email" placeholder="email" class="form-control mb">

                        <label class="text-uppercase text-sm">Password</label>
                        <input required name="password"type="password" placeholder="Password" class="form-control mb">

                      

                        <button class="btn btn-primary btn-block" type="submit">LOGIN</button>

                      </form>
                    </div>
                  </div>
                  <div class="text-center text-light">
                    <a href="#" class="text-light">Olvidaste la  password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Load JS here for greater good =============================-->


