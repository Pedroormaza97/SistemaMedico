 
  


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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalnuevousuario">Nuevo usuario</button>
            </div>


        


          <!--TABLA DE USUARIOS-->
<!-- TABLA -->
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Usuario</th>
                          <th>Rol</th>
                          <th>Cedula</th>
                          <th>Foto</th>
                          <th>Estado</th>
                          <th>Último login</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        $item = null;
                        $valor = null;
                        $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                        foreach ($usuarios as $key => $value) {
                          
                          echo '
                          <tr>
                          <td>'.$value["idUsuario"].'</td>
                          <td>'.$value["userUsuario"].'</td>
                          <td>'.$value["rol_idrol"].'</td>
                          <td>'.$value["cedulaP"].'</td>';

                          if($value["FotoPerfilUsuario"] != ""){
                            echo '<td><img src="'.$value["FotoPerfilUsuario"].'"
                          class="img-thumbnail" width="40px"></td>';




                          }else{


                            echo'<td><img src="vistas/img/usuarios/imguser.png"imguser
                          class="img-thumbnail" width="40px"></td>';
                          }

                          
                          if($value["Estado"] == "activo"){

                            echo '<td><button class="btn btn-success btnActivar" idUsuario="'.$value["idUsuario"].'" estadoUsuario="inactivo">Activado</button></td>';
                          }elseif ($value["Estado"] == "inactivo") {

                            echo '<td><button class="btn btn-danger btnActivar" idUsuario="'.$value["idUsuario"].'" estadoUsuario="activo">Desactivado</button></td>';
                            
                          }
                          

                          echo '
                          <td>'.$value["ultimo_login"].'</td>
                          <td>

                          <div class="btn-group">
                          <button type="button" class="btn btn-warning btnEditarUsuario"  idUsuario="'.$value["idUsuario"].'" data-toggle="modal" data-target="#modaleditarusuario"><i class="fa fa-pencil"></i></button>


                          <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["idUsuario"].'" usuario="'.$value["userUsuario"].'" fotoUsuario="'.$value["FotoPerfilUsuario"].'"><i class="fa fa-times"></i></button>
                          </div>
                          </td> 
                          </tr>';
                        }

                        




                        ?> 
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                
<!-- /page content -->
               
<!--MODAL DE NUEVO USUARIO-->

            <div  class="modal fade" id="modalnuevousuario" tabindex="-1" role="dialog" aria-hidden="true" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <form class="" action="" method="post" enctype="multipart/form-data" novalidate>
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
                                    
                                        
                                        <span class="section">Personal Info</span>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Cedula<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="nuevaCedulap"  id="cedulaUsuario" type="text" /></div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Usuario<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="nuevoUsuario" id="nombreUsuario" readonly required="required" type="text" />
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
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Rol<span class="">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <select class="form-control" Type="text" name="nuevoRol">
                                            <option>Opciones...</option>
                                            <option value="1">1.- Administrador</option>
                                            <option value="2">2.- Medico</option>
                                            <option value="3">3.- Recepcionista</option>
                                          </select>
                                        </div>
                                      </div>
                                        
                                        <div class="field item form-group btn-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Foto de Perfil:<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="file" class="nuevaFoto" name="nuevaFoto"> 
                                                <p class="help-block">Peso maximo 2 MB</p>
                                                <img src="vistas/img/usuarios/imguser.png" class="img-thumbnail previsualizar" width="100px"></div>


                                        </div>

                                       <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Estado<span class="">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <select class="form-control" Type="text" name="nuevoEstado">
                                            <option>Opciones...</option>
                                            <option value="Activo">ACTIVO</option>
                                            <option value="Inactivo">INACTIVO</option>
                                          </select>
                                        </div>
                                      </div>

                                        
                                            
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary btnNuevoUsuario">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                    
                                                </div>
                                            

                                               
                                           
                                           </div>  
                                        </div>
                                    
                                        
                    <!--MODAL FOOTER-->
                  <div class="modal-footer">

                    <button  type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>  
                </div>




              </div>
              <?php
                                             $crearUsuario = new ControladorUsuarios();
                                             $crearUsuario -> ctrCrearUsuario();

                                                ?>

              </form>

                  
            </div>
           

        </div>
      </div>

<!--MODAL DE EDITAR USUARIO-->

            <div id="modaleditarusuario" class="modal fade" role="dialog" aria-hidden="true" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <form class="" action="" method="post" enctype="multipart/form-data" novalidate>
                  <div class="x_content">
                  <!--MODAL HEADER-->
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">EDITAR USUARIO</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                  </div>

                  <!--MODAL CUERPO-->
                  <div class="modal-body">
        
                      <!-- start form for validation -->
                      <div class="x_content">
                                    
                                        
                                        <span class="section">Personal Info</span>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Usuario<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="editarUsuario" name="editarUsuario"  value="" readonly type="text" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">
                                        Editar Password<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <input type="password" class="form-control input-lg"  id="password1" name="editarPassword" pacheholder="Escriba la nueva contraseña" required />
                                          <input type="hidden" id="passwordActual" name="passwordActual">
                                          
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
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Rol<span class="">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <select class="form-control" Type="text" name="editarRol">
                                            <option value="" id="editarPerfil"></option>
                                            <option value="1">1.- Administrador</option>
                                            <option value="2">2.- Medico</option>
                                            <option value="3">3.- Recepcionista</option>
                                          </select>
                                        </div>
                                      </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">
                                            Editar Cedula<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="editarCedulap" name="editarCedulap" value="" readonly type="text" /></div>
                                        </div>
                                        <div class="field item form-group btn-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Cambiar Foto de Perfil:<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="file" class="nuevaFoto" name="editarFoto"> 
                                                <p class="help-block">Peso maximo 2 MB</p>
                                                <img src="vistas/img/usuarios/imguser.png" class="img-thumbnail previsualizar" width="100px"></div>
                                                <input type="hidden" name="fotoActual" id="fotoActual">

                                        </div>

                                        <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Estado<span class="">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <select class="form-control" Type="text" name="editarEstado">
                                            <option value="" id="editarEstado"></option>
                                            <option value="activo">activo</option>
                                            <option value="Inactivo">inactivo</option>
                                          </select>
                                        </div>
                                      </div>
                                        
                                            
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                    
                                                </div>
                                            

                                               
                                           
                                           </div>  
                                        </div>
                                    
                                        
                    <!--MODAL FOOTER-->
                  <div class="modal-footer">

                    <button  type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>  
                </div>




              </div>
              <?php
                                             $editarUsuario = new ControladorUsuarios();
                                             $editarUsuario -> ctrEditarUsuario();

                                                ?> 

              </form>

                  
            </div>
           

        </div>
      </div>
      
    
<!-- /page content -->
          </div>
       </div>
      </div>
    </div>
  </div>



<?php


  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrEliminarUsuario();

?>
