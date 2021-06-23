
  


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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalnuevapersona">Nueva persona</button>
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
                          <th>#Ci</th>
                          <th>Nombre</th>
                          <th>Apellido P</th>
                          <th>Apellido M</th>
                          <th>Direccion</th>
                          <th>Sexo</th>
                          <th>Etnia</th>
                          <th>Estado Civil</th>
                          <th>Fecha Naci</th>
                          <th>Tipo Sangre</th>
                          <th>Hijos</th>
                          <th>Hijas</th>
                          <th>Tabaquismo</th>
                          <th>Ocupacion</th>
                          <th>Cargo</th>
                          <th>Id Pareja</th>
                          <th>Acciones</th>

                        </tr>
                      </thead>


                      <tbody>
                        <?php
                        $item = null;
                        $valor = null;
                        $personas = ControladorPersonas::ctrMostrarPersona($item, $valor);

                        foreach ($personas as $key => $value) {
                          
                          echo '
                          <tr>
                          <td>'.$value["cedula"].'</td>
                          <td>'.$value["nombre"].'</td>
                          <td>'.$value["apellido_p"].'</td>
                          <td>'.$value["apellido_m"].'</td>
                          <td>'.$value["Dir_domicilio"].'</td>
                          <td>'.$value["Sexo"].'</td>
                          <td>'.$value["Etnia"].'</td>
                          <td>'.$value["EstadoCivil"].'</td>
                          <td>'.$value["Fecha_Naci"].'</td>
                          <td>'.$value["T_sangre"].'</td>
                          <td>'.$value["HijosV"].'</td>
                          <td>'.$value["HijosM"].'</td>
                          <td>'.$value["Tabaquismo"].'</td>
                          <td>'.$value["Ocupacion"].'</td>
                          <td>'.$value["Cargo"].'</td>
                          <td>'.$value["idPareja"].'</td>
                          <td>

                          <div class="btn-group">
                          <button type="button" class="btn btn-warning btnEditarPersona"  cedula="'.$value["cedula"].'" data-toggle="modal" data-target="#modaleditarpersona"><i class="fa fa-pencil"></i></button>


                          <button class="btn btn-danger"><i class="fa fa-times"></i></button>
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

            <div class="modal fade " id="modalnuevapersona" tabindex="-1" role="dialog" aria-hidden="true" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <form class="" action="" method="post" novalidate>
                  <div class="x_content">
                  <!--MODAL HEADER-->
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">INGRESAR UNA NUEVA PERSONA</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                  </div>

                  <!--MODAL CUERPO-->
                  <div class="modal-body">
        
                      <!-- start form for validation -->
                      <div class="x_content">
                                    
                                        
                                        <span class="section">Informacion de la persona</span>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Cedula<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nuevaCedula" id="nuevaCedula"  type="text" required='required'/></div>
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
                                        <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Sexo<span class="">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <select class="form-control" name="nuevoSexo">
                                            <option>Opciones...</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option> 
                                          </select>
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
                                            


                                </div>


                        </div>


                    <!--MODAL FOOTER-->
                  <div class="modal-footer">

                    <button  type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                   </div>
                
                </div>
                <?php
                                             $crearPersona = new ControladorPersonas();
                                             $crearPersona -> ctrCrearPersona();

                                                ?>

              </form>

                  
            </div>
           
            </div>
        </div>


   <!--MODAL EDITAR PERSONA-->

            <div class="modal fade " id="modaleditarpersona" tabindex="-1" role="dialog" aria-hidden="true" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <form class="" action="" method="post" novalidate>
                  <div class="x_content">
                  <!--MODAL HEADER-->
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">EDITAR DATOS DE UNA PERSONA</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                  </div>

                  <!--MODAL CUERPO-->
                  <div class="modal-body">
        
                      <!-- start form for validation -->
                      <div class="x_content">
                                    
                                        
                                        <span class="section">Informacion de la persona</span>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Cedula<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="editarCedula" id="editarCedula" value="" readonly type="text" required='required'/></div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Nombre<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  class='optional' name="editarNombre" id="editarNombre" value="" type="text" required='required'/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Apellido paterno<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="editarApellidop" id="editarApellidop" value="" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Apellido materno<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="editarApellidom" id="editarApellidom" value=""type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Dirección/Domicilio<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="editarDireccion" id="editarDireccion" value=""type="text" /></div>
                                        </div>
                                       <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Sexo<span class="">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <select class="form-control" name="editarSexo">
                                            <option value="" id="editarSexo"></option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option> 
                                          </select>
                                        </div>
                                      </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Etnia<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="editarEtnia" id="editarEtnia" type="text" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Estado civil<span class="">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <select class="form-control" name="editarEstadocivil">
                                            <option value="" id="editarEstadocivil"></option>
                                            <option>Soltero (a)</option>
                                            <option>Casado (a)</option>
                                            <option>Divorciado (a)</option>
                                            <option>Union Libre</option>
                                            <option>Viudo (a)</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3 label-align">Editar Fecha de Nacimiento<span class="">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 ">
                                        <input id="editarFechaNacimiento" name="editarFechaNacimiento" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'"
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
                                          <select class="form-control" name="editarTiposangre">
                                            <option value="" id="editarTiposangre"></option>
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
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Hijos varones <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='number' name="editarHijosvarones" id="editarHijosvarones" ></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Hijas mujeres <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='number' name="editarHijasmujeres" id="editarHijasmujeres" ></div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Tabaquismo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="editarTabaquismo" id="editarTabaquismo" type="text"/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Ocupacion<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="editarOcupacion" id="editarOcupacion"  type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Cargo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="editarCargo" id="editarCargo"  type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Id pareja <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='number' name="editarIdpareja" id="editarIdpareja" ></div>
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
                                             $editarPersona = new ControladorPersonas();
                                             $editarPersona -> ctrEditarPersona();

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

