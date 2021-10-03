
  


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
           <form class="" action="" method="post" novalidate> 
            <div class="field item form-group">
              <label  class="col-md-1" for="nuevaCedula">Cedula:</label>
                <div class="col-md-3 ">
                   <input class="form-control" class='optional' name="cedulaHist" id="cedulaHist"  type="text" required='required'/></div>


                
              <button type='button' class="btn btn-primary btnEditarPersona" cedula='1313377317'>Buscar</button>
            
             </div> 
             </div>
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


                                </div>

                                          

                                        
                                        
                                            
                                                <div class="col-md-12">
                                                    <button type='submit' class="btn btn-primary">Ingresar</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                    
                                                </div>
                                        
                                       
                                            <?php
                                             $crearHistoria = new ControladorHistorias();
                                             $crearHistoria -> ctrCrearHistoria();

                                                ?>
                                         </form>

                                


             
            </div>

       
<!-- /page content -->
          </div>
       </div>
      </div>
    </div>
</div>

      
    



