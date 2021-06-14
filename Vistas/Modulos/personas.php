
  


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

            <form  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" >
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
                                                <input class="form-control" class='optional' name="nuevaCedula" data-validate-length-range="5,15" type="text" required='required'/></div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="nuevoNombre"  required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Apellido paterno<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevoApellidop" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Apellido materno<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevoApellidom" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Dirección/Domicilio<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevaDireccion" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
                                        <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Sexo</label>
                      <div class="col-md-6 col-sm-6 ">
                        <div id="nuevoSexo" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="nuevoSexo" value="masculino" required='required' class="join-btn"> &nbsp; Masculino &nbsp;
                          </label>
                          <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="nuevoSexo" value="femenino" class="join-btn">Femenino
                          </label>
                        </div>
                      </div>
                    </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Etnia<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="nuevaEtnia"  required="required" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Estado civil<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <select class="form-control" name="nuevoEstadocivil" required="required">
                                            <option>Opciones...</option>
                                            <option>Soltero</option>
                                            <option>Casado</option>
                                            <option>Divorciado</option>
                                            <option>Union Libre</option>
                                            <option>Viudo</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3 label-align">Fecha de Nacimiento<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 ">
                                        <input id="nuevaFechaNacimiento" name="nuevaFechaNacimiento" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'"
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
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Hijos varones<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevoHijosvarones"  type="number" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Hijas mujeres<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevasHijasmujeres"  type="number" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tabaquismo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevoTabaquismo"  type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Ocupacion<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevaOcupacion"  type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Cargo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevoCargo"  type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Id pareja<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevoIdpareja"  type="number" /></div>
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
           

        </form>
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

