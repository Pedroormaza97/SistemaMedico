
  


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Historial clinico</h3>
      </div>
      </div>
    <div class="clearfix"></div>
    <!--CUERPO DESING Y BOTON DE NUEVO USUARIO-->
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            </div>
            
            
                       <!--TABLA DE PERSONAS-->
<!-- TABLA -->
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable-responsive" filas="10" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>#Ci</th>
                          <th>Historial</th>   
                          <th>Nombre</th>
                          <th>Apellido P</th>
                          <th>Apellido M</th>
                          <th>Email</th>
                          <th>Telefono</th>
                          <th>Direccion</th>
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
                          <td><button type="button" class="btn btn-success btnEditarPersona" cedula="'.$value["cedulaPer"].'" data-toggle="modal" data-target="#modalnuevohistorial"><i class="fa fa-plus-square"></i></button></td>
                          
                          <td>'.$value["nombrePer"].'</td>
                          <td>'.$value["apellidoPPer"].'</td>
                          <td>'.$value["apellidoMPer"].'</td>
                          <td>'.$value["emailPer"].'</td>
                          <td>'.$value["telefonoPer"].'</td>
                          <td>'.$value["direccionPer"].'</td>
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
                          <td>'.$value["tipoSeguroPer"].'</td></tr>';
                        }

                        




                        ?> 
                        

                        
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
            
             

                                          

                                        
                                        
                                            
                                                

                                


             
            </div>
</div>
       <!--MODAL DE NUEVO USUARIO-->

            <div class="modal fade " id="modalnuevohistorial" role="dialog" tabindex="-1" aria-hidden="true" >
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <form class="" action="" method="post" novalidate>
                  <div class="x_content">
                  <!--MODAL HEADER-->
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">INGRESAR UN NUEVO HISTORIAL</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                  </div>

                  <!--MODAL CUERPO-->
                  <div class="modal-body">
        
                      <!-- start form for validation -->
                      <div class="x_content">
                                     <span class="section">Informacion del historial</span>

                                      <div class="field item form-group">
                                            <label class="col-md-1" for="nuevaFechaEvento">Fecha de Eventualidad:</label>
                                      <div class="col-md-3 col-sm-3 ">
                                        <input id="nuevaFechaEvento" name="nuevaFechaEvento"  required='required' class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'"
                                          onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                        <script>
                                          function timeFunctionLong(input) {
                                            setTimeout(function() {
                                              input.type = 'text';
                                            }, 60000);
                                          }
                                        </script>
                                      </div>
                                        
                                            <label class="col-md-1" for="nuevoLugarEvento">Lugar Evento:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevoLugarEvento" type="text" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="nuevaDireccionEvento">Direccion Evento:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevaDireccionEvento" required='required' type="text" /></div>
                                           </div> 
                                        
                                         <div class="field item form-group">
                                            
                                        <label class="col-md-1" for="nuevoCustodiapolicial">Custodia Policial:</label>
                                        <div class="col-md-3 col-sm-3">
                                          <select class="form-control" required='required' Type="select" name="nuevoCustodiapolicial">
                                            <option></option>
                                            <option value="si">si</option>
                                            <option value="no">no</option> 
                                          </select>
                                        </div>
                                            <label class="col-md-1" for="nuevoIdMot">Id Mot:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevoIdMot" type="number" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="nuevoobsMot">Obs Mot:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoobsMot" required='required' type="text" /></div>
                                           </div> 

                                           <div class="field item form-group">

                                            <label class="col-md-1" for="nuevoAlientoEtilico">Aliento etilico:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevoAlientoEtilico" type="text" required='required'/>
                                            </div>

                                            <label class="col-md-1" for="nuevoValorAlcotec">Valor Alcotec:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoValorAlcotec" required='required' type="text" /></div>

                                            <label  class="col-md-1" for="nuevaCedula">Cedula:</label>
                                            <div class="col-md-3 ">
                                                <input class="form-control" class='optional' name="nuevaCedula" id="nuevaCedula"  type="text" readonly="" required='required'/></div>                                            
                                              </div> 

                                              <div class="field item form-group">
                                            <label  class="col-md-1" for="nuevaCondicionViaAerea">Condicion Via Aerea:</label>
                                            <div class="col-md-3 ">
                                                <input class="form-control" class='optional' name="nuevaCondicionViaAerea"   type="text" required='required'/></div>
                                        
                                            <label class="col-md-1" for="nuevaCondicionPaciente">Condicion Paciente:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevaCondicionPaciente" type="text" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="nuevoDetalle">Detalle:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoDetalle" required='required' type="text" /></div>
                                           </div> 


                                           <div class="field item form-group">
                                            <label  class="col-md-1" for="nuevoIdHallazgo">Id Hallazgo:</label>
                                            <div class="col-md-3 ">
                                                <input class="form-control" class='optional' name="nuevoIdHallazgo"  type="number" required='required'/></div>
                                        
                                            <label class="col-md-1" for="nuevaPresionArterial">Presion Arterial:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevaPresionArterial" type="text" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="nuevaFrecuenciaCardiaca">Frecuencia Cardiaca:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevaFrecuenciaCardiaca" required='required' type="text" /></div>
                                           </div> 

                                           <div class="field item form-group">
                                            <label  class="col-md-1" for="nuevaFrecuenciaRespiratoria">Frecuencia Respiratoria:</label>
                                            <div class="col-md-3 ">
                                                <input class="form-control" class='optional' name="nuevaFrecuenciaRespiratoria"  type="text" required='required'/></div>
                                        
                                            <label class="col-md-1" for="nuevaTemperaturaAxilar">Temperatura Axilar:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevaTemperaturaAxilar" type="text" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="nuevoTemperaturaBucal">Temperatura Bucal:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoTemperaturaBucal" required='required' type="text" /></div>
                                           </div> 

                                           <div class="field item form-group">
                                            <label  class="col-md-1" for="nuevoPeso">Peso:</label>
                                            <div class="col-md-1 ">
                                                <input class="form-control" class='optional' name="nuevoPeso"  type="text" required='required'/></div>
                                        
                                            <label class="col-md-1" for="nuevaTalla">Talla:</label>
                                            <div class="col-md-1 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevaTalla" type="text" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="nuevaReacPulmDerech">Reaccion Pulmon D:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevaReacPulmDerech" required='required' type="text" /></div>

                                            <label class="col-md-1" for="nuevaReacPulmIzquier">Reaccion Pulmon I:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevaReacPulmIzquier" required='required' type="text" /></div>
                                           </div> 


                                           <div class="field item form-group">
                                            <label  class="col-md-1" for="nuevoTLlenadoCapilar">T Llenado Capilar:</label>
                                            <div class="col-md-3 ">
                                                <input class="form-control" class='optional' name="nuevoTLlenadoCapilar" type="text" required='required'/></div>
                                        
                                            <label class="col-md-1" for="nuevoGlasglow">Glasglow:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevoGlasglow" type="text" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="nuevoIdLesion">Id Lesion:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoIdLesion" required='required' type="number" /></div>
                                           </div> 


                                           <div class="field item form-group">
                                            <label  class="col-md-1" for="nuevaIdEmergencia">Id Emergencia:</label>
                                            <div class="col-md-3 ">
                                                <input class="form-control" class='optional' name="nuevaIdEmergencia" type="number" required='required'/></div>
                                        
                                            <label class="col-md-1" for="nuevoIdExamenSolici">Id Examen Solicitud:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevoIdExamenSolici" type="number" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="nuevoIdDiagnosticoIngreso">Diagnostico Ingreso:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoIdDiagnosticoIngreso" required='required' type="number" /></div>
                                           </div> 


                                           <div class="field item form-group">
                                            <label  class="col-md-1" for="nuevoIdDiagnosticoEgreso">Diagnostico Egreso:</label>
                                            <div class="col-md-3 ">
                                                <input class="form-control" class='optional' name="nuevoIdDiagnosticoEgreso"  type="number" required='required'/></div>
                                        
                                            <label class="col-md-1" for="nuevoIdPlanTratamiento">Id Plan Tratamiento:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  class='optional' name="nuevoIdPlanTratamiento" type="number" required='required'/>
                                            </div>
                                            <label class="col-md-1" for="nuevoIdAlta">Id Alta:</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input class="form-control"  name="nuevoIdAlta" required='required' type="number" /></div>
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
                                             $crearHistoria = new ControladorHistorias();
                                             $crearHistoria -> ctrCrearHistoria();

                                                ?>

              </form>

                  
            </div>
           
            </div>
        </div>
        </div>
<!-- /page content -->
          </div>
       </div>
      </div>
    </div>
</div>

      
    



