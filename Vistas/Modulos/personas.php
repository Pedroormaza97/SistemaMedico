
  


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Administrar Personas</h3>
      </div>
      </div>
    <div class="clearfix"></div>
    <!--CUERPO DESING Y BOTON DE NUEVO USUARIO-->
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Nueva persona</button>
            </div>

<!--MODAL DE NUEVO USUARIO-->

            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="x_content">
                  <!--MODAL HEADER-->
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">DATOS DE LA NUEVA PERSONA</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                  </div>

                  <!--MODAL CUERPO-->
                  <div class="modal-body">
        
                      <!-- start form for validation -->
                      <div class="x_content">
                                    <form class="" action="" method="post" novalidate>
                                        
                                        <span class="section">Informacion de la persona</span>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Cedula<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevaCedula"  type="text" required='required'/></div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  class='optional' name="nuevoNombre" type="text" required='required'/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Apellido paterno<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="nuevoApellidop" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Apellido materno<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="nuevoApellidom" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Dirección/Domicilio<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="nuevaDireccion" type="text" /></div>
                                        </div>
                                        <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Sexo<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                          <p>
                                          Masculino:
                                          <input type="radio" class="flat" name="nuevoSexo" id="genderM" value="M" checked="" required /> Femenino:
                                          <input type="radio" class="flat" name="nuevoSexo" id="genderF" value="F" />
                                        </p>
                                        </div>
                                      </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Etnia<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="nuevaEtnia" type="text" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Estado civil<span class="">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <select class="form-control" name="nuevoEstadocivil">
                                          
                                            <option>Soltero (a)</option>
                                            <option>Casado (a)</option>
                                            <option>Divorciado (a)</option>
                                            <option>Union Libre</option>
                                            <option>Viudo (a)</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3 label-align">Fecha de Nacimiento<span class="">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 ">
                                        <input id="nuevaFechaNacimiento" name="nuevaFechaNacimiento" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'"
                                          onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                        <script>
                                          function timeFunctionLong(input) {
                                            setTimeout(function() {
                                              input.type = 'text';
                                            }, 60000);
                                          }
                                        </script>
                                      </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tipo de Sangre<span class="">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <select class="form-control" name="nuevoTiposangre">
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                          </select>
                                        </div>
                                      </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Hijos varones <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='number' name="nuevosHijosvarones" ></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Hijas mujeres <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='number' name="nuevasHijasmujeres" ></div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tabaquismo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="nuevoTabaquismo" type="text"/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Ocupacion<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="nuevaOcupacion"  type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Cargo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="nuevoCargo"  type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Id pareja <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='number' name="nuevoIdpareja" ></div>
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
                                             $crearPersona = new ControladorPersonas();
                                             $crearPersona -> ctrCrearPersona();

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

