<div id="back"></div>
<div>
  <a class="hiddenanchor" id="signup"></a>
  <a class="hiddenanchor" id="signin"></a>

  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form method="post">
          <img src="Vistas/img/plantilla/logomini.png" class="img_responsive">
          <div>
            <input type="text" class="form-control" placeholder="Usuario" required="ingUsuario" />
          </div>
          <div>
            <input type="password" class="form-control" placeholder="Contraseña" required="password" />
          </div>


            <div class="w-33">

                   <button  class="btn btn-primary btn-block btn-flat" type="submit">Ingresar al sistema</button>

            </div>

        
        <?php
          $login = new ControladorUsuarios();
          $login ->ctrIngresoUsuario();
          ?>

            <a class="reset_pass" href="#">Olvidó su contraseña?</a>


          <div class="clearfix"></div>



            <div class="clearfix"></div>
            <div>
              <li class="glyphicon glyphicon-plus fa-3x fa-lg" aria-hidden="true"><h1> San Antonio De Padua</h1></li>

            </div>
            <div class="separator">
              <p class="change_link">Contactar a los
                <a href="#signup" class="to_register"> Administradores del sistema </a>
              </p>
              <p>©2021 Todos los derechos reservados.</p>
          </div>

        </form>
      </section>
    </div>
  </div>
</div>
