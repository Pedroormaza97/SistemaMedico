
  


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Administrar Usuarios</h3>
      </div>
      </div>
    <div class="clearfix"></div>
    <!--CUERPO DESING Y BOTON DE NUEVO USUARIO-->
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Nuevo usuario</button>
            </div>

<!--MODAL DE NUEVO USUARIO-->

            <div  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="x_content">
                  <!--MODAL HEADER-->
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">DATOS DEL NUEVO USUARIO</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                  </div>

                  <!--MODAL CUERPO-->
                  <div class="modal-body">
        
                      <!-- start form for validation -->
                      <div class="x_content">
                                    <form class="" action="" method="post" novalidate>
                                        
                                        <span class="section">Personal Info</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevoNombre" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Usuario<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="nuevoUsuario"  required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <input class="form-control" type="password" id="password1" name="nuevoPassword" title="Minimum 5 Characters incluyendo mayusculas, minusculas y numeros" required />
                                          
                                          <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
                                            <i id="slash" class="fa fa-eye-slash"></i>
                                            <i id="eye" class="fa fa-eye"></i>
                                          </span>
                                        </div>
                                      </div>
                                      <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Repeat password<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="password" name="password2" data-validate-linked='nuevoPassword' required='required' /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Perfil<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevoPerfil"  type="text" /></div>
                                        </div>
                                        
                                            
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                    
                                                </div>
                                            

                                               
                                           
                                             
                                    </form>
                                              

                                </div>


                        </div>


                    <!--MODAL FOOTER-->
                  <div class="modal-footer">

                    <button  type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                    
                </div>



              </div>

              </div>

                  
            </div>
           

        </div>
        <?php
                                             $crearUsuario = new ControladorUsuarios();
                                             $crearUsuario -> ctrCrearUsuario();

                                                ?>


          <!--TABLA DE USUARIOS-->
<!-- TABLA -->
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Usuario</th>
                          <th>Foto</th>
                          <th>Perfil</th>
                          <th>Estado</th>
                          <th>Último login</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Pedro</td>
                          <td>pormaza97</td>
                          <td>--</td>
                          <td>Administrador</td>
                          <td>Activo</td>
                          <td>22-22-22</td>
                          <td>editar</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                
<!-- /page content -->
               



      
    
<!-- /page content -->
          </div>
       </div>
      </div>
    </div>
  </div>

