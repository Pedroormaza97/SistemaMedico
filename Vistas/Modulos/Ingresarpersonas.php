
  


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ingresar nueva persona</h3>
      </div>
      </div>
    <div class="clearfix"></div>
    <!--CUERPO DESING Y BOTON DE NUEVO USUARIO-->
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalnuevapersona">Nueva Persona</button>
            </div>

        


          <!--TABLA DE USUARIOS-->
<!-- TABLA -->
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#Ci</th>
                          <th>Nombre</th>
                          <th>Apellido P</th>
                          <th>Apellido M</th>
                          <th>Email</th>
                          <th>Telefono</th>
                          <th>Direccion</th>
                          <th>Fecha Naci</th>
                          <th>Nacionalidad</th>
                          <th>Lugar Nacimiento</th>
                          <th>Sexo</th>
                          <th>Etnia</th>
                          <th>Estado Civil</th>
                          <th>Tipo Sangre</th>
                          <th>Hijos</th>
                          <th>Hijas</th>
                          <th>Tabaquismo</th>
                          <th>Ocupacion</th>
                          <th>Cargo</th>
                          <th>Id Pareja</th>
                          <th>Referido</th>
                          <th>Id Familia</th>
                          <th>Fecha Admision</th>
                          <th>Provincia</th>
                          <th>Canton</th>
                          <th>Parroquia</th>
                          <th>Barrio</th>
                          <th>Tipo Seguro</th>
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
                          <td>'.$value["cedulaPer"].'</td>
                          <td>'.$value["nombrePer"].'</td>
                          <td>'.$value["apellidoPPer"].'</td>
                          <td>'.$value["apellidoMPer"].'</td>
                          <td>'.$value["emailPer"].'</td>
                          <td>'.$value["telefonoPer"].'</td>
                          <td>'.$value["direccionPer"].'</td>
                          <td>'.$value["fechaNacimientoPer"].'</td>
                          <td>'.$value["nacionalidadPer"].'</td>
                          <td>'.$value["lugarNacimientoPer"].'</td>
                          <td>'.$value["sexoPer"].'</td>
                          <td>'.$value["etniaPer"].'</td>
                          <td>'.$value["estadoCivilPer"].'</td>
                          <td>'.$value["tipoSangrePer"].'</td>
                          <td>'.$value["hijosVPer"].'</td>
                          <td>'.$value["hijosMPer"].'</td>
                          <td>'.$value["tabaquismoPer"].'</td>
                          <td>'.$value["ocupacionPer"].'</td>
                          <td>'.$value["cargoPer"].'</td>
                          <td>'.$value["idPareja"].'</td>
                          <td>'.$value["referidoPer"].'</td>
                          <td>'.$value["idFamilia"].'</td>
                          <td>'.$value["fechaAdminPer"].'</td>
                          <td>'.$value["provinciaPer"].'</td>
                          <td>'.$value["cantonPer"].'</td>
                          <td>'.$value["parroquiaPer"].'</td>
                          <td>'.$value["barrioPer"].'</td>
                          <td>'.$value["tipoSeguroPer"].'</td>
                          <td>

                          <div class="btn-group">
                          <button type="button" class="btn btn-warning btnEditarPersona" cedula="'.$value["cedulaPer"].'" data-toggle="modal" data-target="#modaleditarpersona"><i class="fa fa-pencil"></i></button>


                          <button class="btn btn-danger btnEliminarPersona" cedula="'.$value["cedulaPer"].'"><i class="fa fa-times"></i></button>
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
            
                


<!--MODAL DE NUEVO USUARIO-->

            <div class="modal fade " id="modalnuevapersona" role="dialog" tabindex="-1" aria-hidden="true" >
              <div class="modal-dialog modal-xl">
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
                                            <label  class="col-md-1" for="nuevaCedula">Cedula:</label>
                                            <div class="col-md-3 ">
                                                <input class="form-control" class='optional' name="nuevaCedula" id="nuevaCedula"  type="text" required='required'/></div>
                                        
                                            <label class="col-md-1" for="nuevoNombre">Nombre:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevoNombre" type="text" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="nuevoApellidop">Apellido p:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoApellidop" required='required' type="text" /></div>
                                           </div> 
                                            
                                         <div class="field item form-group">
                                        
                                            <label class="col-md-1" for="nuevoApellidom">Apellido m:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoApellidom" required='required' type="text" /></div>

                                            <label class="col-md-1" for="nuevoEmail">Email:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoEmail" required='required' type="text" /></div>
                                                

                                            <label class="col-md-1" for="nuevoTelefono">Telefono:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoTelefono" required='required' type="text" /></div>
                                        </div>

                                        <div class="field item form-group">


                                            <label class="col-md-1" for="nuevaDireccion">Dirección:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevaDireccion" required='required' type="text" /></div>


                                            <label class="col-md-1" for="nuevaFechaNacimiento">Fecha de Nacimiento:</label>
                                      <div class="col-md-3 col-sm-3 ">
                                        <input id="nuevaFechaNacimiento" name="nuevaFechaNacimiento"  required='required' class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'"
                                          onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                        <script>
                                          function timeFunctionLong(input) {
                                            setTimeout(function() {
                                              input.type = 'text';
                                            }, 60000);
                                          }
                                        </script>
                                      </div>

                                      <label  class="col-md-1" for="nuevaNacionalidad">Nacionalidad:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevaNacionalidad" required='required' type="text" /></div>
                                      </div>
                                        <div class="field item form-group">

                                          <label  class="col-md-1" for="nuevoLugarNacimiento">Lugar de Nacimiento:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoLugarNacimiento" required='required' type="text" /></div>
                                        
                                         <label class="col-md-1" for="nuevoSexo">Sexo:</label>
                                        <div class="col-md-3 col-sm-3">
                                          <select class="form-control" required='required' Type="select" name="nuevoSexo">
                                            <option></option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option> 
                                          </select>
                                        </div>
                                        
                                      
                                            <label class="col-md-1" for="nuevaEtnia">Etnia:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control" required='required' name="nuevaEtnia" type="text" />
                                            </div>
                                            
                                        </div>
                                        <div class="field item form-group">

                                        <label class="col-md-1" for="nuevoEstadocivil">Estado Civil:</label>
                                        <div class="col-md-2 col-sm-2">
                                          <select class="form-control" required='required' Type="select" name="nuevoEstadocivil">
                                            <option></option>
                                            <option>Soltero (a)</option>
                                            <option>Casado (a)</option>
                                            <option>Divorciado (a)</option>
                                            <option>Union Libre</option>
                                            <option>Viudo (a)</option>
                                          </select>
                                        </div>
                                      
                                      
                                    
                                        <label class="col-md-1" for="nuevoTiposangre">Tipo de sangre:</label>
                                        <div class="col-md-1 col-sm-1">
                                          <select class="form-control" required='required' Type="select" name="nuevoTiposangre">
                                            <option></option>
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
                                        
                                      
                                            <label class="col-md-1" for="nuevosHijosvarones">Hijos varones:</label>
                                            <div class="col-md-1 col-sm-1">
                                                <input class="form-control" type="number" class='number' name="nuevosHijosvarones" ></div>
                                        
                                            <label class="col-md-1" for="nuevasHijasmujeres">Hijas mujeres:</label>
                                            <div class="col-md-1 col-sm-1">
                                                <input class="form-control" type="number" class='number' name="nuevasHijasmujeres" ></div>

                                                <label class="col-md-1" for="nuevoTabaquismo">Tabaquismo:</label>
                                            <div class="col-md-1 col-sm-1">
                                                <input class="form-control" name="nuevoTabaquismo" type="text"/>
                                            </div>
                                                </div>
                                    <div class="field item form-group">
                                        
                                            
                                        
                                            <label class="col-md-1" for="nuevaOcupacion">Ocupacion:</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="nuevaOcupacion"  type="text" /></div>
                                        
                                            <label class="col-md-1" for="nuevoCargo">Cargo* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="nuevoCargo"  type="text" /></div>
                                        
                                            <label class="col-md-1" for="nuevoIdpareja">Id pareja:</label>

                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control" type="number" class='number' name="nuevoIdpareja" ></div>

                                            <label class="col-md-1" for="nuevoReferido">Referido* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="nuevoReferido"  type="text" /></div>
                                        </div>
                                        
                                    <div class="field item form-group">

                                        

                                        <label class="col-md-1" for="nuevoid_cont_fam">Id Contacto fam.* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control" class="number" name="nuevoid_cont_fam"  type="number" /></div>

                                        <label class="col-md-1" for="nuevaProvincia">Provincia* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="nuevaProvincia"  type="text" /></div>
                                                
                                                
                                        <label class="col-md-1" for="nuevoCanton">Canton* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="nuevoCanton"  type="text" /></div>

                                          <label class="col-md-1" for="nuevaParroquia">Parroquia* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="nuevaParroquia"  type="text" /></div>
                                                </div>
                                                <div class="field item form-group">

                                        


                                        <label class="col-md-1" for="nuevoBarrio">Barrio* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="nuevoBarrio"  type="text" /></div>
                                                
                                          <label class="col-md-1" for="nuevotiposeguro">Tipo de seguro* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="nuevotiposeguro"  type="text" /></div>
                                                </div>

                                          

                                        
                                        
                                            
                                                <div class="col-md-12">
                                                    <button type='submit' class="btn btn-primary">Ingresar</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                    
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
        </div>



  <!--MODAL EDITAR PERSONA-->

            <div class="modal fade" id="modaleditarpersona" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-xl">
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
                                            <label  class="col-md-1" for="EditarCedula">Cedula:</label>
                                            <div class="col-md-3 ">
                                                <input class="form-control" class='optional' name="EditarCedula" id="EditarCedula"  type="text" readonly="" required='required'/></div>
                                        
                                            <label class="col-md-1" for="EditarNombre">Nombre:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="EditarNombre" id="EditarNombre" type="text" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="EditarApellidop">Apellido p:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="EditarApellidop" id="EditarApellidop" required='required' type="text" /></div>
                                           </div> 
                                            
                                         <div class="field item form-group">
                                        
                                            <label class="col-md-1" for="EditarApellidom">Apellido m:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="EditarApellidom" id="EditarApellidom" required='required' type="text" /></div>

                                            <label class="col-md-1" for="EditarEmail">Email:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="EditarEmail" id="EditarEmail" required='required' type="text" /></div>
                                                

                                            <label class="col-md-1" for="EditarTelefono">Telefono:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="EditarTelefono" id="EditarTelefono" required='required' type="text" /></div>
                                        </div>

                                        <div class="field item form-group">


                                            <label class="col-md-1" for="EditarDireccion">Dirección:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="EditarDireccion" id="EditarDireccion" required='required' type="text" /></div>


                                            <label class="col-md-1" for="EditarFechaNacimiento">Fecha de Nacimiento:</label>
                                      <div class="col-md-3 col-sm-3 ">
                                        <input id="EditarFechaNacimiento" name="EditarFechaNacimiento"  required='required' class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'"
                                          onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                        <script>
                                          function timeFunctionLong(input) {
                                            setTimeout(function() {
                                              input.type = 'text';
                                            }, 60000);
                                          }
                                        </script>
                                      </div>

                                      <label  class="col-md-1" for="EditarNacionalidad">Nacionalidad:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="EditarNacionalidad" id="EditarNacionalidad" required='required' type="text" /></div>
                                      </div>
                                        <div class="field item form-group">

                                          <label  class="col-md-1" for="EditarLugarNacimiento">Lugar de Nacimiento:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="EditarLugarNacimiento" id="EditarLugarNacimiento" required='required' type="text" /></div>
                                        
                                         <label class="col-md-1" for="EditarSexo">Sexo:</label>
                                        <div class="col-md-3 col-sm-3">
                                          <select class="form-control" required='required' Type="select" name="EditarSexo" id="EditarSexo">
                                            <option></option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option> 
                                          </select>
                                        </div>
                                        
                                      
                                            <label class="col-md-1" for="EditarEtnia">Etnia:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control" required='required' name="EditarEtnia"  id="EditarEtnia" type="text" />
                                            </div>
                                            
                                        </div>
                                        <div class="field item form-group">

                                        <label class="col-md-1" for="EditarEstadocivil">Estado Civil:</label>
                                        <div class="col-md-2 col-sm-2">
                                          <select class="form-control" required='required' Type="select" name="EditarEstadocivil" id="EditarEstadocivil">
                                            <option></option>
                                            <option>Soltero (a)</option>
                                            <option>Casado (a)</option>
                                            <option>Divorciado (a)</option>
                                            <option>Union Libre</option>
                                            <option>Viudo (a)</option>
                                          </select>
                                        </div>
                                      
                                      
                                    
                                        <label class="col-md-1" for="EditarTipoSangre">Tipo de sangre:</label>
                                        <div class="col-md-1 col-sm-1">
                                          <select class="form-control" required='required' Type="select" name="EditarTipoSangre" id="EditarTipoSangre">
                                            <option></option>
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
                                        
                                      
                                            <label class="col-md-1" for="EditarHijosVarones">Hijos varones:</label>
                                            <div class="col-md-1 col-sm-1">
                                                <input class="form-control" type="number" class='number' name="EditarHijosVarones" id="EditarHijosVarones"></div>
                                        
                                            <label class="col-md-1" for="EditarHijasMujeres">Hijas mujeres:</label>
                                            <div class="col-md-1 col-sm-1">
                                                <input class="form-control" type="number" class='number' name="EditarHijasMujeres" id="EditarHijasMujeres" ></div>

                                                <label class="col-md-1" for="EditarTabaquismo">Tabaquismo:</label>
                                            <div class="col-md-1 col-sm-1">
                                                <input class="form-control" name="EditarTabaquismo" id="EditarTabaquismo" type="text"/>
                                            </div>
                                                </div>
                                    <div class="field item form-group">
                                        
                                            
                                        
                                            <label class="col-md-1" for="EditarOcupacion">Ocupacion:</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="EditarOcupacion" id="EditarOcupacion"  type="text" /></div>
                                        
                                            <label class="col-md-1" for="EditarCargo">Cargo* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="EditarCargo" id="EditarCargo"  type="text" /></div>
                                        
                                            <label class="col-md-1" for="EditarIdpareja">Id pareja:</label>

                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control" type="number" class='number' name="EditarIdpareja" id="EditarIdpareja" ></div>

                                            <label class="col-md-1" for="EditarReferido">Referido* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="EditarReferido" id="EditarReferido"  type="text" /></div>
                                        </div>
                                        
                                    <div class="field item form-group">

                                        

                                        <label class="col-md-1" for="EditarIdFamiliam">Id Contacto fam.* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control" class="number" name="EditarIdFamilia" id="EditarIdFamilia"  type="number" /></div>

                                        <label class="col-md-1" for="EditarProvincia">Provincia* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="EditarProvincia" id="EditarProvincia"  type="text" /></div>
                                                
                                                
                                        <label class="col-md-1" for="EditarCanton">Canton* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="EditarCanton" id="EditarCanton"  type="text" /></div>

                                          <label class="col-md-1" for="EditarParroquia">Parroquia* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="EditarParroquia" id="EditarParroquia"  type="text" /></div>
                                                </div>
                                                <div class="field item form-group">

                                        


                                        <label class="col-md-1" for="EditarBarrio">Barrio* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="EditarBarrio"  id="EditarBarrio" type="text" /></div>
                                                
                                          <label class="col-md-1" for="EditarTipoSeguro">Tipo de seguro* :</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input class="form-control"  name="EditarTipoSeguro" id="EditarTipoSeguro"  type="text" /></div>
                                                

                                            <label class="col-md-1" for="EditarFechaAdminPer">Fecha Admision* :</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="EditarFechaAdminPer" id="EditarFechaAdminPer" readonly="" type="text" /></div>
                                                </div>
                                        
                                        
                                            
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Actualizar</button>
                                                    
                                                    
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
        </div>
               

<!-- /page content -->
<!-- /page content -->
          </div>
       </div>
      </div>
    </div>
</div>

      
    




    <script>

        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            //console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

    <?php
      $eliminarPersona = new ControladorPersonas();
      $eliminarPersona -> ctrEliminarPersona();

    ?>
