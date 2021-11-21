
  


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
            
           <form class="" action="" method="post" novalidate> 
            <!-- <div class="field item form-group">
              <label  class="col-md-1" for="nuevaCedula">Cedula:</label>
                <div class="col-md-3 ">
                   <input class="form-control" class='optional' name="cedulaHist" id="cedulaHist"  type="text" required='required'/></div>


                
              <button type='button' class="btn btn-primary btnEditarPersona" class="" cedula="123">Buscar</button>
            
             </div>  -->
                       <!--TABLA DE PERSONAS-->
<!-- TABLA -->
                  <div class="content">
      <div class="container-fluid">
      
        <div class="col-lg-12">
          <div class="portlet">
              <ul class="nav nav-tabs" >
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#nav_consultas">HISTORIA CLINICA</a>
                </li>
                
              </ul>
               <form id="form_data">
              <div class="tab-content"  style="padding: 2px 0 0 0;}">
                <div class="tab-pane active" id="nav_consultas" >
                  <div class="card">
                    <div class="card-body" style="padding-bottom:0px;padding-top:0.2px;">
                      <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="row">
                                  <div class="col-lg-4 text-center">
                                      <div class="btn-group mr-2" role="group" aria-label="Second group" id="area_edit_pa_btn">
                                          
                                      </div>
                                       <button type="button" class="btn btn-outline-dark solo_update" id="btn_hallazgo" 
                                        style="display: none;">
                                      <i class="ti-camera"></i><br>Captura</button>
                                  </div>
                                  <!-- <div class="col-lg-3">
                                    <div class="area_update"></div>
                                  </div> -->
                                  <div class="col-lg-3">
                                    <button type="button" class="btn btn-outline-dark solo_update" id="receta_med" 
                                    style="display: none;">
                                      <i class="ti-pencil-alt "></i> <br>RECETA </button>
                                    <button type="button" class="btn btn-outline-dark solo_update" id="btn_historial">
                                      <i class="ti-exchange-vertical "></i> <br>VISITAS</button>
                                    <button type="button" class="btn btn-outline-dark solo_update" id="solicitud_btn" style="display: none;">
                                      <i class="ti-bookmark-alt"></i> <br>DOCS</button>
                                    
                                    <span class="area_edit_pa_file">
                                    </span>
                                  </div>
                                  <div class="col-lg-2">
                                    <div class="area_update"></div>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-right">
                                    
                                      <div class="btn-group mr-2" role="group" aria-label="Second group" id="area_updatebtn">
                                            
                                      </div>
    
                                      <button type="button" class="btn btn-outline-dark btn_new_paciente" ><i class="ti-plus "></i> <br>PACIENTE</button>
                                      
                                      <button type="button" class="btn btn-outline-dark solo_update" id="btn_cancelar_todo"><i class="ti-plus "></i> <br>CONSULTA</button>
                                      <button type="button" class="btn btn-outline-success" id="btn_save_consulta">
                                        <i class="ti-save-alt "></i> <br>GUARDAR</button>
                                    </div>
                                  </div>
                                </div>
                                
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-lg-4">
                      <div class="card">
                        <input type="hidden" id="genero_val">
                        <div  style="background: #e9ecef" style="padding-bottom:0px;">
                          <i class="ti-search"></i>
                          <label for="razon_social">Buscar Y seleccionar PACIENTE:</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="ti-search text-purple"></i> 
                              </div>
                            </div>
                            <input type="text" class="form-control atocom_paciente " id="atocom_paciente" name="razon_social"  placeholder="BUSCAR PACIENTE">
                          </div>
                          <br>  
                        </div>
                        <div class="card-body"  style="padding-bottom:0px;padding-top:0.2px;">                  
                          <table class="table table-sm table-bordered" id="datos_paciente_show" style="overflow: hidden;">
                            <tr>
                              <td rowspan="6" class="">
                                <img src="./img/personas/default.png" alt="" style="max-height: 200px; max-width: 120px;">
                              </td>
                              <td>GENERO</td>
                              
                              <td class="show_genero">
                                ----------
                              </td>
                            </tr>
                            <tr>
                              <td>
                                IDENTIDAD
                              </td>
                              <td>
                                ----------
                              </td>
                            </tr>
                            <tr>
                              <td>
                                NOMBRES
                              </td>
                              <td>
                                ----------
                              </td>
                            </tr> 
                            <tr>
                              <td>
                                APELLIDOS
                              </td>
                              <td>
                                ----------
                              </td>
                            </tr>
                            <tr>
                              <td>
                                F.NACIMIENTO
                              </td>
                              <td class="show_f_nacimiento">
                                --/--/----
                              </td>
                            </tr>
                            <tr>
                              <td>
                                EDAD
                              </td>
                              <td class="show_cal_edad">
                                ----------
                              </td>
                            </tr>
                            <tr>
                              <td>
                                EDTADO CIVIL
                              </td>
                              <td class="show_estado_civil"  colspan="2">
                                ----------
                              </td>
                            </tr>
                            <tr>
                              <td>
                                CORREO
                              </td>
                              <td  colspan="2">
                                ----------
                              </td>
                            </tr>
                            <tr>
                              <td colspan="3">
                                REGION/PROVINCIA/CANTON/PARROQUIA
                              </td>
                              
                            </tr>
                              <tr>
                                <td  colspan="3" class="text-center">
                                ----------
                              </td>
                              </tr>
                            <tr>
                              <td>
                                DIRECCION
                              </td>
                              <td  colspan="2">
                                ----------
                              </td>
                            </tr>
                            <tr>
                              <td>
                                TEL.DOMICILIO
                              </td>
                              <td class="show_tel_domicilio" colspan="2">
                                ----------
                              </td>
                            </tr>
                            <tr>
                              <td>
                                TEL.PERSONAL
                              </td>
                              <td class="show_tel_personal" colspan="2">
                                ----------
                              </td>
                            </tr>
                            <tr>
                              <td>
                                OCUPACION(ACTIVIDAD)
                              </td>
                              <td class="show_ocupacion" colspan="2">
                                ----------
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="row">
                      
                      </div>
                      <div class="row">
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label for="mod_id_tiposeguro" class="control-label">SEGURO</label>
                            <select class="custom-select id_tiposeguro"  name="id_tiposeguro"  id="mod_id_tiposeguro">
                              <option selected value="">Seleccione</option>
                              <option value="1">Medec</option><option value="2">Ecuasanitas</option><option value="9">Confiamed</option><option value="10">Salud</option><option value="11">Humana</option><option value="12">BMI</option><option value="13">Particular</option><option value="14">Consulmed</option><option value="15">Atlas</option><option value="16">Transmedical</option><option value="17">Plan Vital</option><option value="18">Bupa</option><option value="19">Vumi</option><option value="20">Asisken</option><option value="21">Best doctor</option><option value="22">Mediken</option><option value="23">IESS</option><option value="24">MSP</option><option value="25">ISSFA</option><option value="26">Particular</option><option value="27">ISSPOL</option><option value="29">Pan American Life</option><option value="30">FUNDASEN</option>                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="mod_grupo_sanguineo_consult" class="control-label">GRUPO SANGUINEO</label>
                            <select class="custom-select grupo_sanguineo"  name="grupo_sanguineo"  id="mod_grupo_sanguineo_consult">
                              <option selected value="">Seleccione</option>
                              <option value="1">O +</option><option value="2">A +</option><option value="3">B +</option><option value="4">AB +</option><option value="5">O -</option><option value="6">A -</option><option value="7">B -</option><option value="8">AB -</option>                            </select>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          
                          <label for="txt_alergias">ALERGIAS
                              <div class="form-check custom-checkbox form-check-inline" title="MARCAR ALEGIA">
                                <input type="checkbox" title="" class="custom-control-input form-check-input check_alergia" id="check_alergia_cons" name="check_alergia">
                                <label class="custom-control-label" for="check_alergia_cons">Crítica</label>
                              </div>
                            </label>
                            <div class="input-group">
                              <textarea class="form-control txt_alergias" rows="2" name="alergias" id="txt_alergias"  ></textarea>
                            </div>

                          <label for="txt_historia_clinica">HISTORIA CLINICA</label>
                          <div class="input-group">
                            <textarea class="form-control txt_historia_clinica" rows="6" name="historia_clinica" id="txt_historia_clinica"  ></textarea>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">

                              <label for="txt_app">APP</label>
                              <div class="input-group">
                                <textarea class="form-control txt_app" rows="6" name="app" id="txt_app"  ></textarea>
                              </div>
                            </div>
                          
                            <div class="col-lg-6">
                              <label for="txt_apf">APF</label>
                              <div class="input-group">
                                <textarea class="form-control txt_apf" name="apf" id="txt_apf"  ></textarea>
                              </div>
                              
                              <label for="txt_aqx">AQx</label>
                              <div class="input-group">
                                <textarea class="form-control txt_aqx" name="aqx" id="txt_aqx"  ></textarea>
                              </div>
                              <div class="input-group">
                                <input type="hidden" class="form-control txt_persona" name="txt_persona" id="txt_persona"  ></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8" id="from_consultas">
                      <div class="card " style="background: #e9ecef" style="padding-bottom:0px;">
                        <div class="" >
                          <div class="row">
                                <div class="col-lg-3">
                                  <div class="form-group">
                                    <label for="tipoconsulta" class="control-label">TIPO CONSULTA</label>
                                    <select class="custom-select tipoconsulta form_consulta_e"  required="true" id="tipoconsulta" name="tipoconsulta" >
                                      <option value="1">Consulta</option><option value="2">Endoscopía</option><option value="4">Rev examen</option><option value="6">Ecografia</option><option value="9">Anoscopia de alta resolución</option><option value="10">Manometría anorrectal</option>                                   </select>
                                  </div>
                                </div>
                                <div class="col-lg-3">
                                  <div class="form-group">
                                    <label for="tipoprocedimiento" class="control-label">TIPO PROCEDIMIENTO</label>
                                    <select class="custom-select tipoprocedimiento form_consulta_e"  id="tipoprocedimiento" name="tipoprocedimiento" >
                                      <option value=""></option>
                                      <option value="2">Colonoscopia</option><option value="1">Endoscopia</option>                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-3">
                                  <div class="form-group">
                                    <label for="tipoconsulta" class="control-label">ESTADO</label>
                                    <select class="custom-select estado_consulta form_consulta_e"    id="estado_consulta" name="estado_consulta" >
                                          <option value="1" >Agendada</option><option value="2" selected>Por confirmar</option><option value="3" >Atencion sin cita</option><option value="4" >Pagada</option><option value="5" >Anulada</option>
                                          <!-- <option value="1">CITA AGENDADA</option>
                                          <option value="2" selected>CONFIRMACION DE PACIENTE</option>
                                          <option value="3">RECEPCION DE PACIENTE</option>
                                          <option value="4">CONSULTA FINALIZADA</option>
                                          <option value="5">CONSULTA CANCELADA</option> -->
                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-3">
                                  <div class="data_n_historial"></div>
                                </div>
                              
                              
                            
                          </div>
                          </div>
                        </div>
                        <div class="card ">
                          <div class="card-body"  style="padding-bottom:0px;padding-top:0.2px;">
                            <div class="row  border border-primary">
                              <div class="col-lg-6 " >
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="text-center negrita text-purple">
                                        AGENDAR CITA MEDICA
                                      </div>
                                    </div>
                                    <div class="col-lg-6" >
                                      <div class="form-group" style="margin-bottom: 0px; ">
                                        <label for="telefono" class="control-label">Fecha:</label>
                                        <div class="input-group">
                                          <input type="text" autocomplete="off" class="form-control datepicker fecha_actual_val fecha_consulta " name="fecha_consulta" id="fecha_consulta" placeholder="mm/dd/yyyy" >
                                          <div class="input-group-append">
                                            <span class="input-group-text"><i class="ion-calendar"></i></span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 items">
                                      <div class="form-group"  style="margin-bottom: 0px; ">
                                        <label for="hora_consulta" class="control-label">HORA:</label>
                                          <div class="input-group ">
                                          <input type="text"  class="form-control timepicker  hora_consulta form_consulta_e" name="hora_consulta" placeholder="H:M" id="hora_consulta"/>
                                           <span class="input-group-append">
                                            <span class="input-group-text"><i class="ion-calendar"></i></span>
                                           </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-3 items" >
                                      <div class="text-left" style="margin-bottom: 0px; ">
                                        <button type="button" class="btn btn-outline-primary" id="btn_valid_citas">
                                          <i class="ti-calendar"></i><br> ASIGNAR HORA</button>
                                      </div>
                                    </div>
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <label for="inp_fr" class="control-label">COMENTARIO CITA:</label>
                                        <input type="text" title="ALGUN COMENTARIO..."  class="form-control inp_comentario_cita form_consulta_e" name="comentario_cita"  autocomplete="off" >
                                      </div>
                                    </div>
                                    
                                    
                                  </div>

                              </div>  
                              <div class="col-lg-6" >
                                <div class="form-group">
                                <label for="slc_medico_referido" class="control-label">MEDICO EXAMINADOR</label>
                                <select class="custom-select slc_medico_referido "  name="slc_medico_referido"  id="slc_medico_referido">

                                </select>
                              </div>  
                              <div class="form-group">
                                <div class="form-group">
                                  <label for="slc_medico_solicitante" class="control-label">MEDICO SOLICITANTE:</label>
                                  <input type="text" title="MEDICO SOLICITANTE"  class="form-control slc_medico_solicitante form_consulta_e" name="medsolic"  id="slc_medico_solicitante">
                                </div>
                              </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg items">
                                <div class="form-group">
                                <label for="inp_pa" class="control-label">Presion:</label>
                                <input type="text" title="Presión Arterial"  class="form-control inp_pa form_consulta_e" name="inp_pa"  autocomplete="off" id="inp_pa">
                              </div>
                              </div>
                            
                              <div class="col-lg items">
                                <div class="form-group">
                                <label for="inp_fc" class="control-label">FC:</label>
                                <input type="number" title="FRECUENCIA CARDIACA"  class="form-control inp_fc form_consulta_e" name="inp_fc" autocomplete="off" id="inp_fc">
                              </div>
                              </div>
                              <div class="col-lg items">
                                <div class="form-group">
                                <label for="inp_fr" class="control-label">FR:</label>
                                <input type="number" title="FRECUENCIA RESPIRATORIA"  class="form-control inp_fr form_consulta_e" name="inp_fr"  autocomplete="off" id="inp_fr">
                              </div>
                              </div>  
                              <div class="col-lg items">
                                <div class="form-group">
                                <label for="inp_temp" class="control-label">Temp:</label>
                                <input type="number" title="TEMPERATURA"   class="form-control inp_temp form_consulta_e" name="inp_temp"  autocomplete="off" id="inp_temp">
                              </div>
                              </div>
                              <div class="col-lg items">
                                <div class="form-group">
                                <label for="inp_sao2" class="control-label">SaO2:</label>
                                <input type="number" title="SATURACION DE OXIGENO"  class="form-control inp_sao2 form_consulta_e" name="inp_sao2"  autocomplete="off" id="inp_sao2">
                              </div>
                              </div>  
                              
                            </div>
                            <div class="row">
                              
                              <div class="col-lg items">
                                <div class="form-group">
                                <label for="inp_estatura" class="control-label">Estatura (cm):</label>
                                <input type="number" title="ESTATURA"  class="form-control inp_estatura form_consulta_e" name="inp_estatura"  autocomplete="off" id="inp_estatura">
                              </div>
                              </div>
                              <div class="col-lg items">
                                <div class="form-group">
                                <label for="inp_peso" class="control-label">Peso (kg):</label>
                                <input type="number" title="PESO" class="form-control inp_peso form_consulta_e" name="inp_peso"  autocomplete="off" id="inp_peso">
                              </div>
                              </div>
                              <div class="col-lg items">
                                <div class="form-group">
                                <label for="inp_p_adb" class="control-label">P Adb (cm):</label>
                                <input type="number" class="form-control inp_p_adb form_consulta_e" name="inp_p_adb"  autocomplete="off" id="inp_p_adb">
                              </div>
                              </div>  
                              <div class="col-lg items">
                                <div class="form-group">
                                <label for="inp_p_ideal" class="control-label">Peso Ideal (kg):</label>
                                <input type="number" title="PESO IDEAL" class="form-control inp_p_ideal form_consulta_e" name="inp_p_ideal"  autocomplete="off" id="inp_p_ideal">
                              </div>
                              </div>
                              <div class="col-lg items">
                                <div class="form-group">
                                <label for="inp_imc" class="control-label">IMC:</label>
                                <input type="number" class="form-control inp_imc form_consulta_e" name="inp_imc"  autocomplete="off" id="inp_imc">
                              </div>
                              </div>  
                              <div class="col-lg-4">
                                <div class="form-group">
                                <label for="imp_categoria_imc"  class="control-label">CAT imc</label>
                                <select class="custom-select imp_categoria_imc form_consulta_e" id="imp_categoria_imc" name="imp_categoria_imc" >

                                  <option value="">SELECCIONE</option>

                                   <option value="1">Desnutrición</option><option value="2">Bajo de peso</option><option value="3">Saludable</option><option value="4">Sobrepeso</option><option value="5">Obesidad</option><option value="6">Obesidad clínica</option><option value="7">Obesidad mórbida</option>                                </select>
                              </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-7">
                              <label for="txt_motivo">MOTIVO</label>
                                <div class="input-group">
                                  <textarea class="form-control txt_motivo form_consulta_e" rows="2" name="motivo" id="txt_motivo"  ></textarea>
                                </div>

                                <label for="txt_examen_fisico">EXAMEN FISICO</label>
                                <div class="input-group">
                                  <textarea class="form-control txt_examen_fisico form_consulta_e" rows="18" name="examen_fisico" id="txt_examen_fisico"  ></textarea>
                                </div>
                                <label for="txt_impresion_diagnostica">IMPRESION DIAGNOSTICA</label>
                                <div class="input-group">
                                  <textarea class="form-control txt_impresion_diagnostica form_consulta_e" rows="3" name="impresion_diagnostica" id="txt_impresion_diagnostica"  ></textarea>
                                </div>
                              </div>

                              <div class="col-lg-5">
                                <label for="txt_medicacion">MEDICACION</label>
                                <div class="input-group">
                                  <textarea class="form-control txt_medicacion form_consulta_e" rows="2" name="medicacion" id="txt_medicacion"  ></textarea>
                                </div>
                                <label for="txt_tratamiento">TRATAMIENTO</label>
                                <div class="input-group">
                                  <textarea class="form-control txt_tratamiento form_consulta_e" rows="18" name="tratamiento" id="txt_tratamiento"  ></textarea>
                                </div>  
                                
                                <textarea style="display: none;" class=" form_consulta_e prescripcion" name="prescripcion"  id="txt_prescripcion"  ></textarea>

                                <label for="txt_observaciones">OBSERVACIONES
                                  <div class="form-check custom-checkbox form-check-inline" title="MARCAR ALEGIA">
                                    <input type="checkbox" title="" class="custom-control-input form-check-input check_observaciones" id="check_observaciones" name="check_observaciones">
                                    <label class="custom-control-label" for="check_observaciones">Crítica</label>
                                  </div>
                                </label>
                                <div class="input-group">
                                  <textarea class="form-control txt_observaciones form_consulta_e" rows="3" name="observaciones" id="txt_observaciones"  ></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                   </div>
                </div>
              </div>
              </form>
            </div>
            
          </div>
          <div id="M_select_consulta" class="modal "  role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="max-width: 1000px!important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> HISTORIAL DE VISITAS</h4>
        </div>
        <div class="modal-body">
           
           <div class="row">
            <div class="col-12 pt-2">
                <table class="table table-sm table-bordered" id="mod_tabla_histo_consulta">
                  <thead >
                    <tr>
                      <th>#</th>
                      <th>FECHA CONSULTA</th>
                      <th>COD</th>
                      <th width="20">MOTIVO</th>
                      <th>DIAGNÓSTICO</th>
                      <th>MÉDICO</th>
                      <th>-</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal"><i class="ti-close display-4"></i><br>Cerrar</button>
        </div>
      </div>
    </div>
  </div><!-- /.modal -->
  <div id="modCitasCalendar" class="modal " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close cerrar" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> CITAS AGENDADAS   </h4>
        </div>
        <div class="modal-body">
          <div class="row">
          <!--  <div class="col-lg-12">
              <div class="data-doctor"></div>
            </div> -->
            <div class="col-lg-6">
              <div class="form-group">
                <label for="slc_medico_referido" class="control-label">MEDICO REFERIDO</label>
                <select class="custom-select slc_medico_referido "  name="slc_medico_referido" id="slc_medico_referido_cita">

                </select>
              </div>
              <div class="fecha_consulta_str"></div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="telefono" class="control-label">Fecha:</label>
                    <div class="input-group">
                      <input type="text" autocomplete="off"  class="form-control datepicker-hide fecha_actual_val fecha_consulta " id="fecha_consulta_cita" name="fecha_consulta" placeholder="mm/dd/yyyy" >
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="ion-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="col-lg-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="vista" id="check_semana" value="1" >
                    <label class="form-check-label" for="check_semana">
                      <i class="ti-eye"></i> VER POR SEMANA
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="vista" id="check_dia" value="2" checked>
                    <label class="form-check-label" for="check_dia">
                      <i class="ti-eye"></i> VER POR DIA
                    </label>
                  </div>  
                </div>
                
              </div>
            </div>
            <div class="col-lg-12">
              <div id="calendar_citas"></div>
            </div>
          </div>
        </div>

            
        <div class="modal-footer">
          <button type="button" class="btn btn-primary waves-effect waves-light btnactualizar" style="display: none;">Actualizar</button>
        </div>
        
      </div>
    </div>
  </div><!-- /.modal -->
<div id="ModalhoraDisp" class="modal "  role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog " style=" margin-top: 5%; border: 2px solid #9095ca;
                  border-radius: 5px;-webkit-box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);
              -moz-box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);
              box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"><i class='fa fa-edit'></i> SELECCIONE ELIJA LA HORA</h4>
      </div>
      <div class="modal-body" >
        <div class="row">
          <div class="col-lg-12">
              <div class="fecha_consulta_str"></div>
          </div>

          <div class="col-lg-8">
            <div class="form-group">
                <label for="slc_medico_referido" class="control-label">MEDICO REFERIDO</label>
                <select class="custom-select slc_medico_referido "  name="slc_medico_referido"  id="slc_medico_referido_cita_hora">

                </select>
              </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
                <label for="telefono" class="control-label">Fecha:</label>
                <div class="input-group">
                  <input type="text" autocomplete="off"  class="form-control datepicker-hide fecha_actual_val fecha_consulta " name="fecha_consulta" placeholder="mm/dd/yyyy" id="fecha_consulta_cita_hora">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ion-calendar"></i></span>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-lg-4">
            <input type="hidden" class="inp_fecha form_consulta_e">

            <div class="form-group">
              <label for="slc_hora_disp" class="control-label">HORA:</label>
              <div class="input-group timepicker">
                <input type="text"  class="form-control  slc_hora_disp form_consulta_e" name="slc_hora_disp" placeholder="H:M" id="slc_hora_disp"/>
                <span class="input-group-addon input-group-append">
                  <span class="input-group-text"><i class="ion-calendar"></i></span>
                </span>
              </div>
            </div>
            <!-- <div class="form-group">
              <label for="slc_hora_disp" class="control-label">HORA:</label>
              <div class="input-group">
                <input type="time"  class="form-control slc_hora_disp form_consulta_e" name="slc_hora_disp" placeholder="H:M" id="slc_hora_disp">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="ion-calendar"></i></span>
                </div>
              </div>
            </div> -->
          </div>
          <div class="col-lg-8">
            <div class="form-group">
              <label for="inp_fr" class="control-label">COMENTARIO CITA:</label>
              <input type="text" title="ALGUN COMENTARIO..."  class="form-control inp_comentario_cita form_consulta_e" id="comentario_cita_slc" autocomplete="off" >
            </div>
          </div>
          <div class="col-lg-12">
             <div class="text-right">
               <button type="button" class="btn btn-primary waves-effect waves-light btnconfirm">CONFIRMAR</button>
             </div>
          </div>
          <div class="col-lg-12">
            <div id="detales_asignacion"></div>
          </div>

          
        </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal">Close</button>

        
          
      </div>
    </div>
  </div>
</div><!-- /.modal -->
  <div id="nuevoPaciente_mod" class="modal "  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close cerrar" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> REGISTRO DE PACIENTE</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="guardar_paciente" name="guardar_paciente">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a href="#info" data-toggle="tab" aria-expanded="false" class="nav-link active nav_info">
                  DATOS PERSONALES
                </a>
              </li>
              <li class="nav-item ">
                <a href="#datos_medicos" data-toggle="tab" aria-expanded="true" class="nav-link  ">
                  DATOS CLÍNICOS
                </a>
              </li>
              <li class="nav-item ">
                <a href="#datos_foto" data-toggle="tab" aria-expanded="true" class="nav-link nav_foto  ">
                  TOMAR FOTO
                </a>
              </li>
            </ul>
          <div class="tab-content">
            <div class="tab-pane show active" id="info">
              <div class="row">
                <div class="col-sm-3">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                      <img class="img_default" src="./img/perfil_default.png" alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"
                      style="max-width: 200px; max-height: 150px;">
                    </div>
                    <div>
                      <span class="btn btn-default btn-file">
                        <span class="fileinput-new btn btn-outline-secondary">IMAGEN/FOTO</span>
                        <span class="fileinput-exists">Cambiar</span>
                        <input type="file" accept="image/*" capture="camera" name="fil_imagen_persona" id="fil_imagen_persona">
                      </span>
                      <a href="#" class="btn btn-default fileinput-exists"
                        data-dismiss="fileinput">
                        Quitar
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="mensaje_usuario"></div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="tipo_iden"   class="control-label">Tipo de identificación:</label>
                        <select class="custom-select tipo_iden "  name="tipo_iden" >
                          
                          <option value="1">CEDULA</option><option value="2">RUC</option><option value="3">PASAPORTE</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="identificacion" class="control-label"># Identificación:</label>
                        <input type="text" class="form-control identificacion"  name="identificacion" autocomplete="off" >
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-check custom-checkbox form-check-inline">
                        <input type="checkbox" class="custom-control-input form-check-input anonimo" id="check_per_edit_anoi" name="anonimo">
                        <label class="custom-control-label" for="check_per_edit_anoi">ID temporal</label>
                      </div>
                      
                    </div>
                    <div class="col-md-2">
                      <button type="button" title="Validar datos, online" class="btn btn-purple btn_validar">
                        <i class="ti-exchange-vertical"></i> VALIDAR</button>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="edit_nombres" class="control-label">NOMBRES:</label>
                        <input type="text"   requiered="true" class="form-control  nombres" id="edit_nombres"  name="nombres" autocomplete="off" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="edit_apellidos" class="control-label">APELLIDOS:</label>
                        <input type="text"   requiered="true" class="form-control  apellidos"   id="edit_apellidos" name="apellidos" autocomplete="off" >
                      </div>
                    </div>  

                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="control-label">e-mail:</label>
                        <input type="emails" class="form-control emails"  name="email" autocomplete="off">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="actividad" class="control-label">Ocupación (actividad):</label>
                        <input class="form-control  actividad"   name="actividad"  autocomplete="off"></textarea>
                      </div>
                    </div>
                    
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label for="telefono" class="control-label">Fecha de nacimiento:</label>
                        <div class="input-group">
                          <input type="text"  requiered="true" class="form-control datepicker fecha_nacimiento" name="fecha_nacimiento" placeholder="mm/dd/yyyy" >
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="ion-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label for="genero" class="control-label">Género:</label>
                        <select class="custom-select genero"  requiered="true"  name="genero" >
                          <option selected value=""></option>
                          <option value="1">Masculino</option><option value="2">Femenino</option>                       </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label for="estado_civil" class="control-label">Estado civil:</label>
                        <select class="custom-select estado_civil"  name="estado_civil" >
                          <option selected value=""></option>
                          <option value="1">Soltero</option><option value="2">Casado</option><option value="3">Union libre</option><option value="4">Divorciado</option><option value="5">Viudo</option>                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                          <label class="control-label">Raza</label>
                          <select class="custom-select raza"  name="raza" >

                            <option value="1">Mestizo</option><option value="2">Afroamericano</option><option value="3">Asiático</option><option value="4">blanco</option><option value="5">Caucásico</option><option value="6">Indigena</option><option value="7">Mulato</option>
                          </select>
                        </div>  
                    </div>  
                  </div>
                </div>
                </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-sm">
                      <input type="hidden" id="manufacturer" name="canton" value="1">
                        <div class="form-group">
                        <label for="canton" class="control-label">Ciudad:</label>
                        <select class="custom-select canton select2"  name="canton"   data-width="100%">
                          <option  value=""></option>
                            <option value="1">CUENCA</option><option value="2">GIRON</option><option value="3">GUALACEO</option><option value="4">NABON</option><option value="5">PAUTE</option><option value="6">PUCARA</option><option value="7">SAN FERNANDO</option><option value="8">SANTA ISABEL</option><option value="9">SIGSIG</option><option value="10">OÑA</option><option value="11">CHORDELEG</option><option value="12">EL PAN</option><option value="13">SEVILLA DE ORO</option><option value="14">GUACHAPALA</option><option value="15">CAMILO PONCE ENRIQUEZ</option><option value="16">GUARANDA</option><option value="17">CHILLANES</option><option value="18">CHIMBO</option><option value="19">ECHEANDIA</option><option value="20">SAN MIGUEL</option><option value="21">CALUMA</option><option value="22">LAS NAVES</option><option value="23">AZOGUES</option><option value="24">BIBLIAN</option><option value="25">CAÑAR</option><option value="26">LA TRONCAL</option><option value="27">EL TAMBO</option><option value="28">DELEG</option><option value="29">SUSCAL</option><option value="30">TULCAN</option><option value="31">BOLIVAR</option><option value="32">ESPEJO</option><option value="33">MIRA</option><option value="34">MONTUFAR</option><option value="35">SAN PEDRO DE HUACA</option><option value="36">LATACUNGA</option><option value="37">LA MANÁ</option><option value="38">PANGUA</option><option value="39">PUJILI</option><option value="40">SALCEDO</option><option value="41">SAQUISIL</option><option value="42">SIGCHOS</option><option value="43">RIOBAMBA</option><option value="44">ALAUSI</option><option value="45">COLTA</option><option value="46">CHAMBO</option><option value="47">CHUNCHI</option><option value="48">GUAMOTE</option><option value="49">GUANO</option><option value="50">PALLATANGA</option><option value="51">PENIPE</option><option value="52">CUMANDÁ</option><option value="53">MACHALA</option><option value="54">ARENILLAS</option><option value="55">ATAHUALPA</option><option value="56">BALSAS</option><option value="57">CHILLA</option><option value="58">EL GUABO</option><option value="59">HUAQUILLAS</option><option value="60">MARCABEL</option><option value="61">PASAJE</option><option value="62">PIÑAS</option><option value="63">PORTOVELO</option><option value="64">SANTA ROSA</option><option value="65">ZARUMA</option><option value="66">LAS LAJAS</option><option value="67">ESMERALDAS</option><option value="68">ELOY ALFARO</option><option value="69">MUISNE</option><option value="70">QUININD</option><option value="71">SAN LORENZO</option><option value="72">ATACAMES</option><option value="73">RIOVERDE</option><option value="74">LA CONCORDIA</option><option value="75">GUAYAQUIL</option><option value="76">ALFREDO BAQUERIZO MORENO (JUJÍN)</option><option value="77">BALAO</option><option value="78">BALZAR</option><option value="79">COLIMES</option><option value="80">DAULE</option><option value="81">DURAN</option><option value="82">EL EMPALME</option><option value="83">EL TRIUNFO</option><option value="84">MILAGRO</option><option value="85">NARANJAL</option><option value="86">NARANJITO</option><option value="87">PALESTINA</option><option value="88">PEDRO CARBO</option><option value="89">SAMBORONDÓN</option><option value="90">SANTA LUCÍA</option><option value="91">SALITRE (URBINA JADO)</option><option value="92">SAN JACINTO DE YAGUACHI</option><option value="93">PLAYAS</option><option value="94">SIMÓN BOLÍVAR</option><option value="95">CORONEL MARCELINO MARIDUEÑA</option><option value="96">LOMAS DE SARGENTILLO</option><option value="97">NOBOL</option><option value="98">GENERAL ANTONIO ELIZALDE</option><option value="99">ISIDRO AYORA</option><option value="100">IBARRA</option><option value="101">ANTONIO ANTE</option><option value="102">COTACACHI</option><option value="103">OTAVALO</option><option value="104">PIMAMPIRO</option><option value="105">SAN MIGUEL DE URCUQU</option><option value="106">LOJA</option><option value="107">CALVAS</option><option value="108">CATAMAYO</option><option value="109">CELICA</option><option value="110">CHAGUARPAMBA</option><option value="111">ESPÍNDOLA</option><option value="112">GONZANAMÁ</option><option value="113">MACARÁ</option><option value="114">PALTAS</option><option value="115">PUYANGO</option><option value="116">SARAGURO</option><option value="117">SOZORANGA</option><option value="118">ZAPOTILLO</option><option value="119">PINDAL</option><option value="120">QUILANGA</option><option value="121">OLMEDO</option><option value="122">BABAHOYO</option><option value="123">BABA</option><option value="124">MONTALVO</option><option value="125">PUEBLOVIEJO</option><option value="126">QUEVEDO</option><option value="127">URDANETA</option><option value="128">VENTANAS</option><option value="129">VINCES</option><option value="130">PALENQUE</option><option value="131">BUENA F</option><option value="132">VALENCIA</option><option value="133">MOCACHE</option><option value="134">QUINSALOMA</option><option value="135">PORTOVIEJO</option><option value="136">BOLIVAR</option><option value="137">CHONE</option><option value="138">EL CARMEN</option><option value="139">FLAVIO ALFARO</option><option value="140">JIPIJAPA</option><option value="141">JUNÍN</option><option value="142">MANTA</option><option value="143">MONTECRISTI</option><option value="144">PAJÁN</option><option value="145">PICHINCHA</option><option value="146">ROCAFUERTE</option><option value="147">SANTA ANA</option><option value="148">SUCRE</option><option value="149">TOSAGUA</option><option value="150">24 DE MAYO</option><option value="151">PEDERNALES</option><option value="152">OLMEDO</option><option value="153">PUERTO LÓPEZ</option><option value="154">JAMA</option><option value="155">JARAMIJ</option><option value="156">SAN VICENTE</option><option value="157">MORONA</option><option value="158">GUALAQUIZA</option><option value="159">LIMÓN INDANZA</option><option value="160">PALORA</option><option value="161">SANTIAGO</option><option value="162">SUCÚA</option><option value="163">HUAMBOYA</option><option value="164">SAN JUAN BOSCO</option><option value="165">TAISHA</option><option value="166">LOGROÑO</option><option value="167">PABLO SEXTO</option><option value="168">TIWINTZA</option><option value="169">TENA</option><option value="170">ARCHIDONA</option><option value="171">EL CHACO</option><option value="172">QUIJOS</option><option value="173">CARLOS JULIO AROSEMENA TOLA</option><option value="174">PASTAZA</option><option value="175">MERA</option><option value="176">SANTA CLARA</option><option value="177">ARAJUNO</option><option value="178">QUITO</option><option value="179">CAYAMBE</option><option value="180">MEJIA</option><option value="181">PEDRO MONCAYO</option><option value="182">RUMIÑAHUI</option><option value="183">SAN MIGUEL DE LOS BANCOS</option><option value="184">PEDRO VICENTE MALDONADO</option><option value="185">PUERTO QUITO</option><option value="186">AMBATO</option><option value="187">BAÑOS DE AGUA SANTA</option><option value="188">CEVALLOS</option><option value="189">MOCHA</option><option value="190">PATATE</option><option value="191">QUERO</option><option value="192">SAN PEDRO DE PELILEO</option><option value="193">SANTIAGO DE PILLARO</option><option value="194">TISALEO</option><option value="195">ZAMORA</option><option value="196">CHINCHIPE</option><option value="197">NANGARITZA</option><option value="198">YACUAMBI</option><option value="199">YANTZAZA (YANZATZA)</option><option value="200">EL PANGUI</option><option value="201">CENTINELA DEL CONDOR</option><option value="202">PALANDA</option><option value="203">PAQUISHA</option><option value="204">SAN CRISTÓBAL</option><option value="205">ISABELA</option><option value="206">SANTA CRUZ</option><option value="207">LAGO AGRIO</option><option value="208">GONZALO PIZARRO</option><option value="209">PUTUMAYO</option><option value="210">SHUSHUFINDI</option><option value="211">SUCUMBÍOS</option><option value="212">CASCALES</option><option value="213">CUYABENO</option><option value="214">ORELLANA</option><option value="215">AGUARICO</option><option value="216">LA JOYA DE LOS SACHAS</option><option value="217">LORETO</option><option value="218">SANTO DOMINGO</option><option value="219">SANTA ELENA</option><option value="220">LA LIBERTAD</option><option value="221">SALINAS</option>                       </select>
                      </div>
                     </div> 
                      <div class="col-sm">
                        <div class="form-group">
                          <label for="parroquia" class="control-label">Parroquia:</label>
                          <select class="custom-select parroquia select2"  name="parroquia"   data-width="100%">
                            <option  value=""></option>
                          </select>
                        </div>
                     </div>
                    <div class="col-sm">
                        <div class="form-group">
                        <label for="provincia" class="control-label">Provincia:</label>
                        <select class="custom-select provincia"  name="provincia">
                        </select>
                      </div>
                     </div>
                     <div class="col-sm">
                      <div class="form-group">
                        <label for="region" class="control-label">Región:</label>
                        <select class="custom-select region "  name="region">
                          <option selected value=""></option>
                            <option value="1">COSTA</option><option value="2">SIERRA</option><option value="3">ORIENTE</option><option value="4">INSULAR</option>                       </select>
                      </div>
                     </div>                      
                  </div>  
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <div class="form-group">
                    <label for="direccion" class="control-label">Dirección:</label>
                    <textarea class="form-control  direccion"  name="direccion" maxlength="255" autocomplete="off"></textarea>
                  </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                      <label for="tipo_persona"  class="control-label">Tipo de registro:</label>
                      <select class="custom-select tipo_persona"  name="tipo_persona" >
                        <option value="1">NORMAL</option><option value="2">PERSONA NATURAL</option><option value="3">EMPRESA PRIVADA</option><option value="4">EMPRESA PUBLICA</option><option value="5">OTROS</option>                     </select>
                    </div>
                </div>
              </div>
                  
              <div class="row">
                <input type="hidden" class="resp_consulta" name="resp_consulta">
              </div>
            </div>
            <div class="tab-pane" id="datos_foto">
              <div class="row">
                <div class="col-lg-12 btns_foto" >
                   <div class="text-center">  
                    <button type="button" class="btn btn-outline-purple btn_continuar_foto"  style="display: none;"><i class="ti-check display-4"></i> <br>OK? </button>
                    <button type="button" class="btn btn-outline-danger btn_continuar_foto_no"  style="display: none;"><i class="ti-close display-4"></i> <br>NO </button>
                    <button type="button" class="btn btn-outline-primary btn_tomar_foto" ><i class="ti-camera display-4"></i> <br>TOMAR FOTO </button>
                   </div>
                  
                </div>  
                <div class="col-lg-12 no_foto" ></div>
                <div class="col-lg-12 d-flex justify-content-center">
                  <video class="video" style="max-width: 500px;" ></video>
                  <canvas class="canvas_foto" style="display: none;"></canvas>
                </div>    
                              
              </div>
            </div>  

            <div class="tab-pane" id="datos_medicos">
              <div class="row">
                <div class="col-lg-8">
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="txt_alergias_reg">ALERGIAS  
                          <div class="form-check custom-checkbox form-check-inline" title="MARCAR ALERGIA">
                            <input type="checkbox" title="" class="custom-control-input form-check-input check_alergia" id="check_alergia_reg" name="check_alergia">
                            <label class="custom-control-label" for="check_alergia_reg">Crítica</label>
                          </div>
                        </label>
                      <div class="input-group">
                        <textarea class="form-control alergias" rows="3" name="alergias" id="txt_alergias_reg"  ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="txt_aqx">AQx</label>
                      <div class="input-group">
                        <textarea class="form-control txt_aqx" rows="3" name="aqx" id="txt_aqx"  ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="txt_app">APP</label>
                      <div class="input-group">
                        <textarea class="form-control txt_app" rows="3" name="app" id="txt_app"  ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="txt_apf">APF</label>
                      <div class="input-group">
                        <textarea class="form-control txt_apf" rows="3" name="apf" id="txt_apf"  ></textarea>
                      </div>
                    </div>
                  </div>
                  <label for="txt_historia_clinica">HISTORIA CLINICA</label>
                  <div class="input-group">
                    <textarea class="form-control txt_historia_clinica" rows="10" name="historia_clinica"   ></textarea>
                  </div>
                  
                </div>
                <div class="col-lg-4">
    
                  <div class="form-group">
                    <label for="mod_grupo_sanguineo_reg" class="control-label">GRUPO SANGUINEO</label>
                    <select class="custom-select grupo_sanguineo"  name="grupo_sanguineo"  id="mod_grupo_sanguineo_reg">
                      <option selected value=""></option>
                      <option value="1">O +</option><option value="2">A +</option><option value="3">B +</option><option value="4">AB +</option><option value="5">O -</option><option value="6">A -</option><option value="7">B -</option><option value="8">AB -</option>                    </select>
                  </div>
                  
                  <div id="add_seguro_reg" style="display: none;">
                    <div class="row">
                      <div class="col-lg-7">
                        <div class="form-group">
                          <label class="control-label">AGREGAR:</label>
                          <input type="text" title="AGREGAR OTRO ELEMENTO"  class="form-control nombre_item_add"  autocomplete="off">
                        </div>
                      </div>
                      <div class="col-lg-5">
                        <label class="control-label">ACCIONES:</label><br>
                        <button type="button"  data="add_seguro_reg" class="cancel_item_reg"><i class="ti-close"></i></button>
                        <button type="button"  data="add_seguro_reg" ref="seguro" param="add_seguro" class="save_item"><i class="ti-save"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mod_seguro_medico_reg" class="control-label">SEGURO <button type="button"  data="add_seguro_reg"  class="add_item" style="font-size: 0.5em;"><i class="ti-plus"></i></button></label>
                    <select class="custom-select seguro"  name="seguro"  id="mod_seguro_medico_reg">
                      <option selected value=""></option>
                      <option value="1">Medec</option><option value="2">Ecuasanitas</option><option value="9">Confiamed</option><option value="10">Salud</option><option value="11">Humana</option><option value="12">BMI</option><option value="13">Particular</option><option value="14">Consulmed</option><option value="15">Atlas</option><option value="16">Transmedical</option><option value="17">Plan Vital</option><option value="18">Bupa</option><option value="19">Vumi</option><option value="20">Asisken</option><option value="21">Best doctor</option><option value="22">Mediken</option><option value="23">IESS</option><option value="24">MSP</option><option value="25">ISSFA</option><option value="26">Particular</option><option value="27">ISSPOL</option><option value="29">Pan American Life</option><option value="30">FUNDASEN</option>                    </select>
                  </div>
                      
                  <div class="form-group">
                    <div class="form-group">
                      FACTORES DE RIESGO:
                      <hr style="margin-top: 0px; ">
                    </div>
                  
                    <div class="row">
                      <div class="col-lg-6">
                        <input type="hidden" class="mod_id_fr" name="mod_id_fr">
                        <div class="form-check custom-checkbox form-check-inline" title="Hipertensión Arterial">
                          <input type="checkbox" class="custom-control-input form-check-input hta"  id="hta_reg_cl" name="hta">
                          <label class="custom-control-label" for="hta_reg_cl">HTA</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-check custom-checkbox form-check-inline" title="En tratamiento hipertensión">
                          <input type="checkbox" title="" class="custom-control-input form-check-input tto_hta" id="tto_hta_reg_cl" name="tto_hta">
                          <label class="custom-control-label" for="tto_hta_reg_cl">Tto HTA</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-check custom-checkbox form-check-inline" title="Diabetes mellitus">
                          <input type="checkbox" class="custom-control-input form-check-input DM" id="DM_reg_cl" name="DM">
                          <label class="custom-control-label" for="DM_reg_cl">DM</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-check custom-checkbox form-check-inline" title="Tabaquismo">
                          <input type="checkbox" class="custom-control-input form-check-input tabaco" id="tabaco_reg_cl" name="tabaco">
                          <label class="custom-control-label" for="tabaco_reg_cl">TABACO</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-check custom-checkbox form-check-inline" title="Perímetro abdominal>
                          <input type="checkbox" class="custom-control-input form-check-input Pabd" id="Pabd_reg_cl" name="Pabd">
                          <label class="custom-control-label" for="Pabd_reg_cl">P Abd</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-check custom-checkbox form-check-inline" title="Dislipidemia" >
                          <input type="checkbox" class="custom-control-input form-check-input DLP" id="DLP_reg_cl" name="DLP">
                          <label class="custom-control-label" for="DLP_reg_cl">DLP</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-check custom-checkbox form-check-inline" title="Alcoholismo">
                          <input type="checkbox" class="custom-control-input form-check-input alcohol" id="alcohol_reg_cl" name="alcohol">
                          <label class="custom-control-label" for="alcohol_reg_cl">ALCOHOL</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-check custom-checkbox form-check-inline" title="Sedentarismo">
                          <input type="checkbox" class="custom-control-input form-check-input seden" id="seden_reg_cl" name="seden">
                          <label class="custom-control-label" for="seden_reg_cl">SEDENT.</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-check custom-checkbox form-check-inline" title="Dieta">
                          <input type="checkbox" class="custom-control-input form-check-input dieta" id="dieta_reg_cl" name="dieta">
                          <label class="custom-control-label" for="dieta_reg_cl">DIETA</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-check custom-checkbox form-check-inline" title="Estrés">
                          <input type="checkbox" class="custom-control-input form-check-input estres" id="estres_reg_cl" name="estres">
                          <label class="custom-control-label" for="estres_reg_cl">ESTRÈS</label>
                        </div>
                      </div>
                      
                    </div>

                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">TA</label>
                      <div class="col-sm-10">
                        <select class="custom-select  rhta"   name="rhta"  id="mod_rhta_reg" title="Tensión arterial">
                          <option  value="null"></option>
                            <option value="<120"><120</option><option value="120-129">120-129</option><option value="130-139">130-139</option><option value="140-149">140-149</option><option value="150-159">150-159</option><option value=">=160">>=160</option>                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">CT</label>
                      <div class="col-sm-10">
                        <select class="custom-select  CTot"  name="CTot"  id="mod_CTot_reg" title="Colesterol total">
                          <option  value="null"></option>
                            <option value="<160"><160</option><option value="160-199">160-199</option><option value="200-239">200-239</option><option value="240-279">240-279</option><option value=">=280">>=280</option>                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">CHDL</label>
                      <div class="col-sm-10">
                        <select class="custom-select  chdl" title="Colesterol bueno (CHDL)"  name="chdl"  id="mod_rhta_reg">
                          <option  value="null"></option>
                          
                            <option value="<35"><35</option><option value="35-44">35-44</option><option value="45-49">45-49</option><option value="50-59">50-59</option><option value=">=60">>=60</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div> 

            </form> 
        </div>

            
        <div class="modal-footer">
          <div class="text-center">
            <button type="button" class="btn btn-outline-success btnregistrar" ><i class="ti-save display-4"></i><br>Guardar</button>
          </div>
          <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal"><i class="ti-close display-4"></i><br>Cerrar</button>
        </div>
      </div>
    </div>
  </div><!-- /.modal -->

  <div id="modReceta" class="modal " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close cerrar" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> RECETA MEDICA</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <input type="hidden" class="mod_id">
            <div class="col-lg-6">
              
              <label for="txt_tratamiento">TRATAMIENTO:</label>
              <div class="input-group">
                <textarea class="form-control txt_tratamiento form_consulta_e" rows="15" id="txt_tratamiento_receta"  ></textarea>
              </div>

              <div class="custom-control custom-radio pr-4">
                <input type="radio" value="1" id="search_nombre_med" checked name="radio_fil_auto_medicina" class="custom-control-input radio_fil_auto_medicina">
                <label class="custom-control-label" for="search_nombre_med">BUSCAR POR NOMBRE</label>
              </div>
              <div class="custom-control custom-radio ">
                <input type="radio"  value="2" id="search_nombre_ge_med" name="radio_fil_auto_medicina" class="custom-control-input radio_fil_auto_medicina">
                <label class="custom-control-label" for="search_nombre_ge_med">BUSCAR POR NOMBRE GENERICO</label>
              </div>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" >
                    <i class="ti-search text-purple"></i> 
                  </div>
                </div>
                  <input type="text"  class="form-control form-control-lg atocom_medicina  " id="atocom_medicina" placeholder="BUSCAR MEDICAMENTOS">
                </div>

              
            </div>
            <div class="col-lg-6">
              <label for="txt_prescripcion">PRESCRIPCION:</label>
              <div class="input-group">
                <textarea class="form-control txt_prescripcion form_consulta_e" rows="14" id="txt_prescripcion_receta"  ></textarea>
              </div>
              
              <div class="row">
                <div class="col-lg-12">
                  <button type="button" class="btn btn-outline-dark" title="USAR MEDICAMENTO,AÑADIR A TRATAMIENTO Y PRESCRIPCION" id="btn_usar_medicamento"><i class="ti-pencil-alt"></i> <br>USAR</button>
                  <button type="button" class="btn btn-outline-danger " id="btn_send_correo" title="ENVIAR CORREO" ><i class="ti-email"></i> <br>ENVIAR</button>  
                  <button type="button" class="btn btn-outline-danger" title="GUARDAR E IMPRIMIR" id="btn_imprimir_receta"><i class="ti-printer"></i> <br>IMPRI</button>
                  <button type="button" class="btn btn-outline-primary" title="CREAR OTRA MEDCINA" id="btn_crear_medicia"><i class="ti-plus"></i> <br>CREAR</button>
                  
                  <button type="button" class="btn btn-outline-success" title="GUARDAR RECETA" id="btn_guardar_receta"><i class="ti-save"></i> <br>GUARDAR</button>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="cant_dosis" class="control-label">DOSIS:</label>
                    <input type="text" class="form-control cant_dosis"  autocomplete="off" id="cant_dosis">
                  </div>
                </div>
                
              </div>
              
              
                <table class="table table-sm table-bordered" id="datos_medicamento_show">
                  <tr>
                    
                    <td colspan="2">MEDICAMENTO</td>
                    <td>----</td>
                  </tr>
                  <tr>
                    
                    <td  colspan="2">NOM GENERICO</td>
                    <td>----</td>
                  </tr>
                  <tr>
                    <td>DOSIS</td>
                    <td colspan="2">----</td>
                  </tr>
                </table>
              
            </div>

            
              
          </div>
        </div>

            
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger CERRAR" data-dismiss="modal">CERRAR</button>
          <button type="button" class="btn btn-primary waves-effect waves-light btnactualizar" style="display: none;">Actualizar</button>
        </div>
        
      </div>
    </div>
  </div><!-- /.modal -->

  <div id="modMedicamento" class="modal " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="max-width: 1000px !important; border: 2px solid #9095ca;
                  border-radius: 5px;-webkit-box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);
              -moz-box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);
              box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close cerrar" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> LISTADO DE MEDICAMENTOS</h4>
        </div>
        <div class="modal-body">
          <div class="row">
          
            <div class="col-lg-6">
              <table class="table table-bordered table-sm" id="table_med">
                  <thead class="thead-light">
                    <tr>
                      <th colspan="4" class="text-center">MEDICAMENTOS</th>
                    </tr>
                    <tr>
                      <th>ID</th>
                      <th>NOMBRE COMERCIAL</th>
                      <th>NOMBRE GENERICO</th>
                      <th title="acciones">AC</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
              </table>
            </div>
            <div class="col-lg-6">
              <form id="form_medicamento">
                <div class="col-lg-12 text-right">
                    <button type="button" class="btn btn-outline-dark" id="btn_buscar_medicamento"><i class="ti-search "></i> <br>BUSCAR</button>
                    <button type="button" class="btn btn-outline-dark" id="btn_new_medicamento"><i class="ti-plus"></i> <br>NUEVO</button>
                    
                    <button type="button" style="display: none;" class="btn btn-outline-success" id="btn_save_medicamento"><i class="ti-save"></i> <br>GUARDAR </button>
                    <button type="button" style="display: none;" class="btn btn-outline-danger" id="btn_cancelar_medicamento"><i class="ti-close"></i> <br>CANCELAR</button>

                  </div>
                <input type="hidden" class="mod_id" name="mod_id">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="inp_fr" class="control-label text-primary">NOMBRE COMERCIAL:</label>
                      <input type="text" title="MEDICAMENTO..."  class="form-control medicamento " name="medicamento"  autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="inp_fr" class="control-label">NOMBRE GENERICO:</label>
                      <input type="text" title="NOMBRE GENERICO..."  class="form-control nombre_generico " name="nombre_generico"  autocomplete="off" >
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="inp_fr" class="control-label">CANTIDAD:</label>
                          <input type="text" title="CANTIDAD..."  class="form-control cantidad_dosis " name="cantidad"  autocomplete="off" >
                        </div>
                      </div>
                      
                    </div>
                    
                  </div>
                  
                  <div class="col-lg-12">
                    <label for="txt_dosis">DOSIS:</label>
                    <div class="input-group">
                      <textarea class="form-control txt_dosis" rows="4" name="dosis" id="txt_dosis"  ></textarea>
                    </div>

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

            
        <div class="modal-footer">
          <button type="button" class="btn btn-primary waves-effect waves-light btnactualizar" style="display: none;">Actualizar</button>
        </div>
        
      </div>
    </div>
  </div><!-- /.modal -->
<div id="M_files_paciente" class="modal "  role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="max-width: 1000px!important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> RESULTADOS DE EXÁMENES</h4>
        </div>
        <div class="modal-body">
           
           <div class="row">

            <input type="hidden" class="mod_id" name="mod_id">
           
            <div class="col-12 pt-2">
                <table class="table table-sm table-bordered" id="mod_tabla_files_paciente">
                  <thead >
                    <tr>
                      <th>#</th>
                      <th>DISP</th>
                      <th>FECHA</th>
                      <th>ARCHIVO</th>
                      <th>PROCEDIMIENTO</th>
                      <th>DESCRIPCIÓN</th>
                      <th>-</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark btn_add_file  " ><i class="ti-plus display-4"></i> <br>Agregar</button>
          <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal"><i class="ti-close display-4"></i><br>Cerrar</button>
        </div>
      </div>
    </div>
  </div><!-- /.modal --><div id="modal_editar_paciente" class="modal "  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" 
style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"><i class='fa fa-edit'></i> EDITAR DATOS CLINICOS</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" id="guardar_paciente" name="guardar_paciente">
          <input type="hidden" class="mod_id" name="mod_id">
          <div class="row"> 
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-6">
                  <label for="txt_alergias">ALERGIAS  
                      <div class="form-check custom-checkbox form-check-inline" title="MARCAR ALERGIA">
                        <input type="checkbox" title="" class="custom-control-input form-check-input check_alergia" id="check_alergia_edit" name="check_alergia">
                        <label class="custom-control-label" for="check_alergia_edit">Crítica</label>
                      </div>
                    </label>
                  <div class="input-group">
                    <textarea class="form-control alergias" rows="3" name="alergias" id="txt_alergias"  ></textarea>
                  </div>
                  <!-- <label for="txt_alergias">ALERGIAS</label>
                  <div class="input-group">
                    <textarea class="form-control alergias" rows="1" name="alergias"   ></textarea>
                  </div> -->
                </div>
                <div class="col-lg-6">
                  <label for="txt_aqx">AQx</label>
                  <div class="input-group">
                    <textarea class="form-control txt_aqx" rows="3" name="aqx" id="txt_aqx"  ></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="txt_app">APP</label>
                  <div class="input-group">
                    <textarea class="form-control txt_app" rows="3" name="app" id="txt_app"  ></textarea>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="txt_apf">APF</label>
                  <div class="input-group">
                    <textarea class="form-control txt_apf" rows="3" name="apf" id="txt_apf"  ></textarea>
                  </div>
                </div>  
              </div>
              <label for="txt_historia_clinica">HISTORIA CLINICA</label>
              <div class="input-group">
                <textarea class="form-control txt_historia_clinica" rows="10" name="historia_clinica"   ></textarea>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="mod_grupo_sanguineo_edit" class="control-label">GRUPO SANGUINEO</label>
                <select class="custom-select grupo_sanguineo"  name="grupo_sanguineo"  id="mod_grupo_sanguineo_edit">
                  <option selected value=""></option>
                  <option value="1">O +</option><option value="2">A +</option><option value="3">B +</option><option value="4">AB +</option><option value="5">O -</option><option value="6">A -</option><option value="7">B -</option><option value="8">AB -</option>                </select>
              </div>
                
              <div class="form-group">
                <div id="add_seguro_edit" style="display: none;">
                  <div class="row">
                    <div class="col-lg-7">
                      <div class="form-group">
                        <label class="control-label">AGREGAR:</label>
                        <input type="text" title="AGREGAR OTRO ELEMENTO"  class="form-control nombre_item_add"  autocomplete="off">
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <label class="control-label">ACCIONES:</label><br>
                      <button type="button"  data="add_seguro_edit" class="cancel_item_edit"><i class="ti-close"></i></button>
                      <button type="button"  data="add_seguro_edit" ref="seguro" param="add_seguro" class="save_item"><i class="ti-save"></i></button>
                    </div>
                  </div>
                    
                </div>
                <div class="form-group">
                  <label for="mod_seguro_medico_edit" class="control-label">SEGURO <button type="button"  data="add_seguro_edit"  class="add_item" style="font-size: 0.5em;"><i class="ti-plus"></i></button></label>
                  <select class="custom-select seguro"  name="seguro"  id="mod_seguro_medico_edit">
                    <option selected value=""></option>
                    <option value="1">Medec</option><option value="2">Ecuasanitas</option><option value="9">Confiamed</option><option value="10">Salud</option><option value="11">Humana</option><option value="12">BMI</option><option value="13">Particular</option><option value="14">Consulmed</option><option value="15">Atlas</option><option value="16">Transmedical</option><option value="17">Plan Vital</option><option value="18">Bupa</option><option value="19">Vumi</option><option value="20">Asisken</option><option value="21">Best doctor</option><option value="22">Mediken</option><option value="23">IESS</option><option value="24">MSP</option><option value="25">ISSFA</option><option value="26">Particular</option><option value="27">ISSPOL</option><option value="29">Pan American Life</option><option value="30">FUNDASEN</option>                  </select>
                </div>
              </div>  
              
              
              <div class="form-group">
                <div class="form-group">
                  FACTORES DE RIESGO:
                  <hr style="margin-top: 0px; ">
                </div>
                
                <div class="row">
                  <div class="col-lg-6">
                    <input type="hidden" class="mod_id_fr" name="mod_id_fr">
                    <div class="form-check custom-checkbox form-check-inline" title="Hipertensión Arterial">
                      <input type="checkbox" class="custom-control-input form-check-input hta"  id="hta_edit_cl" name="hta">
                      <label class="custom-control-label" for="hta_edit_cl">HTA</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-check custom-checkbox form-check-inline" title="En tratamiento hipertensión">
                      <input type="checkbox" title="" class="custom-control-input form-check-input tto_hta" id="tto_hta_edit_cl" name="tto_hta">
                      <label class="custom-control-label" for="tto_hta_edit_cl">Tto HTA</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-check custom-checkbox form-check-inline" title="Diabetes mellitus">
                      <input type="checkbox" class="custom-control-input form-check-input DM" id="DM_edit_cl" name="DM">
                      <label class="custom-control-label" for="DM_edit_cl">DM</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-check custom-checkbox form-check-inline" title="Tabaquismo">
                      <input type="checkbox" class="custom-control-input form-check-input tabaco" id="tabaco_edit_cl" name="tabaco">
                      <label class="custom-control-label" for="tabaco_edit_cl">TABACO</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-check custom-checkbox form-check-inline" title="Perímetro abdominal">
                      <input type="checkbox" class="custom-control-input form-check-input Pabd" id="Pabd_edit_cl" name="Pabd">
                      <label class="custom-control-label" for="Pabd_edit_cl">P Abd</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-check custom-checkbox form-check-inline" title="Dislipidemia">
                      <input type="checkbox" class="custom-control-input form-check-input DLP" id="DLP_edit_cl" name="DLP">
                      <label class="custom-control-label" for="DLP_edit_cl">DLP</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-check custom-checkbox form-check-inline" title="Alcoholismo">
                      <input type="checkbox" class="custom-control-input form-check-input alcohol" id="alcohol_edit_cl" name="alcohol">
                      <label class="custom-control-label" for="alcohol_edit_cl">ALCOHOL</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-check custom-checkbox form-check-inline" title="Sedentarismo">
                      <input type="checkbox" class="custom-control-input form-check-input seden" id="seden_edit_cl" name="seden">
                      <label class="custom-control-label" for="seden_edit_cl">SEDENT.</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-check custom-checkbox form-check-inline" title="Dieta">
                      <input type="checkbox" class="custom-control-input form-check-input dieta" id="dieta_edit_cl" name="dieta">
                      <label class="custom-control-label" for="dieta_edit_cl">DIETA</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-check custom-checkbox form-check-inline" title="Estrés">
                      <input type="checkbox" class="custom-control-input form-check-input estres" id="estres_edit_cl" name="estres">
                      <label class="custom-control-label" for="estres_edit_cl">ESTRÈS</label>
                    </div>
                  </div>
                  
                </div>

              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">TA</label>
                <div class="col-sm-10">
                  <select class="custom-select  rhta"   name="rhta"  id="mod_rhta_edit" title="Tensión arterial">
                    <option  value=""></option>
                      <option value="<120"><120</option><option value="120-129">120-129</option><option value="130-139">130-139</option><option value="140-149">140-149</option><option value="150-159">150-159</option><option value=">=160">>=160</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">CT</label>
                <div class="col-sm-10">

                  <select class="custom-select  CTot"  name="CTot"  id="mod_CTot_edit" title="Colesterol total">
                    <option  value=""></option>
                      <option value="<160"><160</option><option value="160-199">160-199</option><option value="200-239">200-239</option><option value="240-279">240-279</option><option value=">=280">>=280</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">CHDL</label>
                <div class="col-sm-10">
                  <select class="custom-select  chdl" title="Colesterol bueno (CHDL)"  name="chdl"  id="mod_rhta_edit">
                    <option  value=""></option>
                      <option value="<35"><35</option><option value="35-44">35-44</option><option value="45-49">45-49</option><option value="50-59">50-59</option><option value=">=60">>=60</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </form> 
      </div>


      <<div class="modal-footer">
              
                <div class="text-center">
                  <button type="button" class="btn btn-outline-success btnactualizar" ><i class="ti-save display-4"></i><br>Guardar</button>
                </div>
              <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal"><i class="ti-close display-4"></i><br>Cerrar</button>
            </div>
    </div>
  </div>
</div><!-- /.modal --><div id="Modaluploadfilepa" class="modal "  role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog  modal-lg" style=" margin-top: 5%; border: 2px solid #9095ca;
                  border-radius: 5px;-webkit-box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);
              -moz-box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);
              box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"><i class='fa fa-edit'></i> AGREGAR EXAMEN</h4>
      </div>
      <div class="modal-body" >
        <form action="">
          <input type="hidden" class="mod_id" name="mod_id">
          <div class="row">
            <div class="col-sm-12">
              <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                  <img class="img_default" src="./img/files_default.png" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail negrita">
                </div>
               <div>
                <span class="btn btn-default btn-file">
                  <span class="fileinput-new btn btn-outline-secondary">EXAMINAR</span>
                  <span class="fileinput-exists">Cambiar</span>
                  <input type="file"  name="file_examen" id="file_examen_subir">
                </span>
                <a href="#" class="btn btn-default fileinput-exists"
                    data-dismiss="fileinput">
                    Quitar
                </a>
                 </div>
               </div>
             </div>
             <div class="col-lg-6">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="telefono" class="control-label">Fecha:</label>
                      <div class="input-group">
                        <input type="text" autocomplete="off" class="form-control datepicker fecha_actual_val fecha_consulta " name="fecha" id="fecha_consulta" placeholder="mm/dd/yyyy" >
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="ion-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="mod_TIPO_PRO_SUBIR" class="control-label">PROCEDIMIENTO</label>
                      <select class="custom-select tipo_procedimiento"  name="tipo_procedimiento"  id="mod_TIPO_PRO_SUBIR">
                        <option  value=""></option>
                        <option value="2">Colonoscopia</option><option value="1">Endoscopia</option>                      </select>
                    </div>

                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="nombre_archivo_up_pa_fil" class="control-label">ARCHIVO:</label>
                      <input type="text"  class="form-control nombre_archivo " name="nombre_archivo"  autocomplete="off" id="nombre_archivo_up_pa_fil">
                    </div>
                  </div>
                </div>
                <label for="txt_historia_clinica">DESCRIPCIÓN:</label>
                <div class="input-group">
                  <textarea class="form-control txt_observacion_file" rows="3" name="observacion" ></textarea>
                </div>
             </div>
             <div class="col-lg-6">
               <div class="col-lg-12">
                <div class="tipo_archivo"></div>
               </div>
               <div class="col-lg-12">

                  
                  <div class="loader">
                    <div class="text-center">SUBIENDO ARCHIVO.. ESPERE..</div> 
                    <div class="spinner">
                      <div class="dot1"></div>
                      <div class="dot2"></div>
                    </div>
                  </div>
               </div>
             </div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success btn_subir" ><i class="ti-save-alt display-4"></i> <br>GUARDAR</button>
        <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal"><i class="ti-close display-4"></i><br>Cerrar</button>
      </div>
    </div>
  </div>
</div><!-- /.modal -->
  <div id="mod_solicitud" class="modal " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close cerrar" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> DOCUMENTO</h4>
        </div>
        <div class="modal-body">
           <form action="" name="form_soli">
            
                  <input type="hidden" name="mod_id" class="mod_id">
                  <div class="row">
                    <div class="col-lg-6"  style="padding-right: 1px;">
                      <label for="tipo_documento_soli" class="control-label">TIPO DOCUMENTO</label>
                      <select class="custom-select tipo_documento_soli"  name="tipo_documento_soli"  id="tipo_documento_soli">
                        
                        <option value="2">CERTIFICADO</option><option value="8">INFORME DE PROCEDIMIENTO</option><option value="9">SOLICITUD DE PATOLOGÍA</option>                      </select>
                    </div>
                    <div class="col-lg-6">
                      <label for="laboratorio_soli" class="control-label">DIRIGIDO A:</label>
                      <input type="text" title="LABORATORIO"  class="form-control laboratorio_soli " name="laboratorio"  autocomplete="off" id="laboratorio_soli">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="enfermedades_soli" class="control-label">DIAGNÓSTICO:</label>
                      <input type="text" title=">ENFERMEDADES SUBYACENTES"  class="form-control enfermedades_soli " name="enfermedades"  autocomplete="off" id="enfermedades_soli">
                    </div>
                    <div class="col-lg-6">
                      <label for="comentario_soli" class="control-label">COMENTARIO:</label>
                      <input type="text" title="COMENTARIO"  class="form-control comentario_soli " name="comentario"  autocomplete="off" id="medico_refiere_soli">
                    </div>
                  </div>
                  
                  <div class="col-lg-6">
                    
                  </div>
                  <div class="col-lg-12">
                    <label for="contenido_soli">DETALLE:</label>
                    <div class="input-group">
                      <textarea class="form-control contenido_soli summernote_basic" rows="15" id="contenido_soli"  name="contenido" style="width: 100%;"></textarea>
                    </div>
                  </div>
            
           </form>
        </div>

            
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success btnguardar"><i class="ti-save display-4"></i><br>Guardar</button>
          <button type="button" class="btn btn-outline-danger CERRAR" data-dismiss="modal"><i class="ti-close display-4"></i><br>Cerrar</button>        
        </div>
        
      </div>
    </div>
  </div><!-- /.modal -->
<div id="M_select_documentos" class="modal "  role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="max-width: 1000px!important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> DOCUMENTOS</h4>
        </div>
        <div class="modal-body">
           
           <div class="row">
            <div class="col-12 pt-2">
                <table class="table table-sm table-bordered" id="mod_tabla_doc_consulta">
                  <thead >
                    <tr>
                      <th>#</th>
                      <th>CONSULTA</th>
                      <th>TIPO DOCUMENTO</th>
                      <th>DIRIGIDO A:</th>
                      <th>SOLICITADO POR:</th>
                      <th>-</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" id="btn_add_documents">
                  <i class="ti-plus display-4"></i> <br>Agregar</button>
          <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal"><i class="ti-close display-4"></i><br>Cerrar</button>
        </div>
      </div>
    </div>
  </div><!-- /.modal -->
  <div id="mod_informe" class="modal " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close cerrar" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> INFORME DE PROCEDIMIENTO MÉDICO</h4>
        </div>
        <div class="modal-body">
           <form action="" name="form_informe">
            
            <input type="hidden" name="mod_id_proceddx" class="mod_id_proceddx">
            <div class="row">
              <div class="col-lg-6">
                <label for="mod_proceddx_edit" class="control-label">TIPO DE PROCEDIMIENTO:</label>
                <select class="custom-select mod_proceddx_edit"  name="mod_proceddx_edit"  id="mod_proceddx_edit">
                  <option selected value=""></option>
                  <option value="2">Colonoscopia</option><option value="1">Endoscopia</option>                </select>
              </div>
              <div class="col-lg-6" >
                  <div class="form-group" style="margin-bottom: 0px; ">
                    <label for="telefono" class="control-label">FECHA:</label>
                    <div class="input-group">
                      <input type="text" autocomplete="off" class="form-control datepicker fecha_actual_val fecha_proced " name="fecha_proced" id="fecha_proced" placeholder="mm/dd/yyyy" >
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="ion-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>  
            <div class="row">
              <div class="col-lg-6">
                <label for="slc_medico_referido" class="control-label">MEDICO EXAMINADOR</label>
                <select class="custom-select slc_medico_referido "  name="slc_medico_referido"  id="slc_medico_referido">
                </select>
              </div>  

              <div class="col-lg-6">
                <label for="medico_refiere_soli" class="control-label">MEDICO QUE REFIERE:</label>
                <input type="text" title="MEDICO QUE REFIERE"  class="form-control medico_refiere_soli " name="medico_refiere"  autocomplete="off" id="medico_refiere_soli">
              </div>
            </div>  
            
            <div class="col-lg-6">
              
            </div>
            <div class="col-lg-12">
              <label for="contenido_soli">DETALLE:</label>
              <div class="input-group">
                <textarea class="form-control contenido_informe summernote_basic" rows="20" id="contenido_informe"  name="contenido_informe" style="width: 100%;"></textarea>
              </div>
            </div>
            <div class="col-lg-12">
                <label for="txt_hallazgo" class="control-label">CONCLUSIÓN:</label>
                <textarea class="form-control txt_hallazgo " rows="4" name="txt_hallazgo" id="txt_hallazgo"  ></textarea>
            </div>      
            
          </form>
        </div>

            
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success btnguardar_informe"><i class="ti-save display-4"></i><br>Guardar</button>
          <button type="button" class="btn btn-outline-danger CERRAR" data-dismiss="modal"><i class="ti-close display-4"></i><br>Cerrar</button>  
          
        </div>
        
      </div>
    </div>
  </div><!-- /.modal -->

  <div id="M_editpersonal" class="modal " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> EDITAR DATOS PERSONALES</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
            <input type="hidden" class="mod_id" name="mod_id">
            
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a href="#info_edit_persona" data-toggle="tab" aria-expanded="false" class="nav-link active">
                  DATOS PERSONALES 
                </a>
              </li>
              <li class="nav-item hide-phone">
                <a href="#datos_foto_edit" data-toggle="tab" aria-expanded="true" class="nav-link nav_foto  ">
                  TOMAR FOTO
                </a>
              </li>
            </ul>
            
            <div class="tab-content">
              <div class="tab-pane show active" id="info_edit_persona">
                <div class="row">
                   <div class="col-sm-3">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img class="img_default" src="./img/perfil_default.png" alt="...">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail"
                            style="max-width: 200px; max-height: 150px;">
                          </div>
                          <div>
                            <span class="btn btn-default btn-file">
                              <span class="fileinput-new btn btn-outline-secondary">IMAGEN/FOTO</span>
                              <span class="fileinput-exists">Cambiar</span>
                              <input type="file" accept="image/*" capture="camera" name="fil_imagen_persona" id="fil_imagen_persona">
                            </span>
                            <a href="#" class="btn btn-default fileinput-exists"
                              data-dismiss="fileinput">
                              Quitar
                            </a>
                          </div>
                        </div>
                   </div>
                   <div class="col-lg-9">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mensaje_usuario"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="tipo_iden"  requiered="true" class="control-label">Tipo de identificación:</label>
                          <select class="custom-select tipo_iden "  name="tipo_iden" >
                            
                            <option value="1">CEDULA</option><option value="2">RUC</option><option value="3">PASAPORTE</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="identificacion" class="control-label"># Identificación:</label>
                          <input type="text"  requiered="true" class="form-control identificacion"  name="identificacion" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-check custom-checkbox form-check-inline">
                          <input type="checkbox" class="custom-control-input form-check-input anonimo" id="check_per_edit_anoi" name="anonimo">
                          <label class="custom-control-label" for="check_per_edit_anoi">ID temporal</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="edit_nombres" class="control-label">NOMBRES:</label>
                          <input type="text"   requiered="true" class="form-control  nombres" id="edit_nombres"  name="nombres" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="edit_apellidos" class="control-label">APELLIDOS:</label>
                          <input type="text"   requiered="true" class="form-control  apellidos"   id="edit_apellidos" name="apellidos" autocomplete="off" >
                        </div>
                      </div>  

                      <div class="col-lg-8">
                        <div class="form-group">
                          <label class="control-label">e-mail:</label>
                          <input type="emails" class="form-control emails"  name="email" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="actividad" class="control-label">Ocupación (actividad):</label>
                          <input class="form-control  actividad"   name="actividad"  autocomplete="off"></textarea>
                        </div>
                      </div>
                      

                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="telefono" class="control-label">Fecha de nacimiento:</label>
                          <div class="input-group">
                            <input type="text"  requiered="true" class="form-control datepicker fecha_nacimiento" name="fecha_nacimiento" placeholder="mm/dd/yyyy" >
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="ion-calendar"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="genero" class="control-label">Género</label>
                          <select class="custom-select genero"  requiered="true"  name="genero" >
                            <option selected value="">Seleccione</option>
                            <option value="1">Masculino</option><option value="2">Femenino</option>                         </select>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="estado_civil" class="control-label">Estado civil</label>
                          <select class="custom-select estado_civil"  name="estado_civil" >
                            <option selected value="">Seleccione</option>
                            <option value="1">Soltero</option><option value="2">Casado</option><option value="3">Union libre</option><option value="4">Divorciado</option><option value="5">Viudo</option>                          </select>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                            <label class="control-label">Raza</label>
                            <select class="custom-select raza"  name="raza" >
                            <option value=""></option>
                              <option value="1">Mestizo</option><option value="2">Afroamericano</option><option value="3">Asiático</option><option value="4">blanco</option><option value="5">Caucásico</option><option value="6">Indigena</option><option value="7">Mulato</option>
                            </select>
                          </div>
                      </div>
                    </div>
                  </div>
                  </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-3">
                          <div class="form-group">
                          <label for="canton" class="control-label">Ciudad:</label>
                          <select class="custom-select canton"  name="canton" >
                            <option selected value="">Seleccione</option>
                              <option value="1">CUENCA</option><option value="2">GIRON</option><option value="3">GUALACEO</option><option value="4">NABON</option><option value="5">PAUTE</option><option value="6">PUCARA</option><option value="7">SAN FERNANDO</option><option value="8">SANTA ISABEL</option><option value="9">SIGSIG</option><option value="10">OÑA</option><option value="11">CHORDELEG</option><option value="12">EL PAN</option><option value="13">SEVILLA DE ORO</option><option value="14">GUACHAPALA</option><option value="15">CAMILO PONCE ENRIQUEZ</option><option value="16">GUARANDA</option><option value="17">CHILLANES</option><option value="18">CHIMBO</option><option value="19">ECHEANDIA</option><option value="20">SAN MIGUEL</option><option value="21">CALUMA</option><option value="22">LAS NAVES</option><option value="23">AZOGUES</option><option value="24">BIBLIAN</option><option value="25">CAÑAR</option><option value="26">LA TRONCAL</option><option value="27">EL TAMBO</option><option value="28">DELEG</option><option value="29">SUSCAL</option><option value="30">TULCAN</option><option value="31">BOLIVAR</option><option value="32">ESPEJO</option><option value="33">MIRA</option><option value="34">MONTUFAR</option><option value="35">SAN PEDRO DE HUACA</option><option value="36">LATACUNGA</option><option value="37">LA MANÁ</option><option value="38">PANGUA</option><option value="39">PUJILI</option><option value="40">SALCEDO</option><option value="41">SAQUISIL</option><option value="42">SIGCHOS</option><option value="43">RIOBAMBA</option><option value="44">ALAUSI</option><option value="45">COLTA</option><option value="46">CHAMBO</option><option value="47">CHUNCHI</option><option value="48">GUAMOTE</option><option value="49">GUANO</option><option value="50">PALLATANGA</option><option value="51">PENIPE</option><option value="52">CUMANDÁ</option><option value="53">MACHALA</option><option value="54">ARENILLAS</option><option value="55">ATAHUALPA</option><option value="56">BALSAS</option><option value="57">CHILLA</option><option value="58">EL GUABO</option><option value="59">HUAQUILLAS</option><option value="60">MARCABEL</option><option value="61">PASAJE</option><option value="62">PIÑAS</option><option value="63">PORTOVELO</option><option value="64">SANTA ROSA</option><option value="65">ZARUMA</option><option value="66">LAS LAJAS</option><option value="67">ESMERALDAS</option><option value="68">ELOY ALFARO</option><option value="69">MUISNE</option><option value="70">QUININD</option><option value="71">SAN LORENZO</option><option value="72">ATACAMES</option><option value="73">RIOVERDE</option><option value="74">LA CONCORDIA</option><option value="75">GUAYAQUIL</option><option value="76">ALFREDO BAQUERIZO MORENO (JUJÍN)</option><option value="77">BALAO</option><option value="78">BALZAR</option><option value="79">COLIMES</option><option value="80">DAULE</option><option value="81">DURAN</option><option value="82">EL EMPALME</option><option value="83">EL TRIUNFO</option><option value="84">MILAGRO</option><option value="85">NARANJAL</option><option value="86">NARANJITO</option><option value="87">PALESTINA</option><option value="88">PEDRO CARBO</option><option value="89">SAMBORONDÓN</option><option value="90">SANTA LUCÍA</option><option value="91">SALITRE (URBINA JADO)</option><option value="92">SAN JACINTO DE YAGUACHI</option><option value="93">PLAYAS</option><option value="94">SIMÓN BOLÍVAR</option><option value="95">CORONEL MARCELINO MARIDUEÑA</option><option value="96">LOMAS DE SARGENTILLO</option><option value="97">NOBOL</option><option value="98">GENERAL ANTONIO ELIZALDE</option><option value="99">ISIDRO AYORA</option><option value="100">IBARRA</option><option value="101">ANTONIO ANTE</option><option value="102">COTACACHI</option><option value="103">OTAVALO</option><option value="104">PIMAMPIRO</option><option value="105">SAN MIGUEL DE URCUQU</option><option value="106">LOJA</option><option value="107">CALVAS</option><option value="108">CATAMAYO</option><option value="109">CELICA</option><option value="110">CHAGUARPAMBA</option><option value="111">ESPÍNDOLA</option><option value="112">GONZANAMÁ</option><option value="113">MACARÁ</option><option value="114">PALTAS</option><option value="115">PUYANGO</option><option value="116">SARAGURO</option><option value="117">SOZORANGA</option><option value="118">ZAPOTILLO</option><option value="119">PINDAL</option><option value="120">QUILANGA</option><option value="121">OLMEDO</option><option value="122">BABAHOYO</option><option value="123">BABA</option><option value="124">MONTALVO</option><option value="125">PUEBLOVIEJO</option><option value="126">QUEVEDO</option><option value="127">URDANETA</option><option value="128">VENTANAS</option><option value="129">VINCES</option><option value="130">PALENQUE</option><option value="131">BUENA F</option><option value="132">VALENCIA</option><option value="133">MOCACHE</option><option value="134">QUINSALOMA</option><option value="135">PORTOVIEJO</option><option value="136">BOLIVAR</option><option value="137">CHONE</option><option value="138">EL CARMEN</option><option value="139">FLAVIO ALFARO</option><option value="140">JIPIJAPA</option><option value="141">JUNÍN</option><option value="142">MANTA</option><option value="143">MONTECRISTI</option><option value="144">PAJÁN</option><option value="145">PICHINCHA</option><option value="146">ROCAFUERTE</option><option value="147">SANTA ANA</option><option value="148">SUCRE</option><option value="149">TOSAGUA</option><option value="150">24 DE MAYO</option><option value="151">PEDERNALES</option><option value="152">OLMEDO</option><option value="153">PUERTO LÓPEZ</option><option value="154">JAMA</option><option value="155">JARAMIJ</option><option value="156">SAN VICENTE</option><option value="157">MORONA</option><option value="158">GUALAQUIZA</option><option value="159">LIMÓN INDANZA</option><option value="160">PALORA</option><option value="161">SANTIAGO</option><option value="162">SUCÚA</option><option value="163">HUAMBOYA</option><option value="164">SAN JUAN BOSCO</option><option value="165">TAISHA</option><option value="166">LOGROÑO</option><option value="167">PABLO SEXTO</option><option value="168">TIWINTZA</option><option value="169">TENA</option><option value="170">ARCHIDONA</option><option value="171">EL CHACO</option><option value="172">QUIJOS</option><option value="173">CARLOS JULIO AROSEMENA TOLA</option><option value="174">PASTAZA</option><option value="175">MERA</option><option value="176">SANTA CLARA</option><option value="177">ARAJUNO</option><option value="178">QUITO</option><option value="179">CAYAMBE</option><option value="180">MEJIA</option><option value="181">PEDRO MONCAYO</option><option value="182">RUMIÑAHUI</option><option value="183">SAN MIGUEL DE LOS BANCOS</option><option value="184">PEDRO VICENTE MALDONADO</option><option value="185">PUERTO QUITO</option><option value="186">AMBATO</option><option value="187">BAÑOS DE AGUA SANTA</option><option value="188">CEVALLOS</option><option value="189">MOCHA</option><option value="190">PATATE</option><option value="191">QUERO</option><option value="192">SAN PEDRO DE PELILEO</option><option value="193">SANTIAGO DE PILLARO</option><option value="194">TISALEO</option><option value="195">ZAMORA</option><option value="196">CHINCHIPE</option><option value="197">NANGARITZA</option><option value="198">YACUAMBI</option><option value="199">YANTZAZA (YANZATZA)</option><option value="200">EL PANGUI</option><option value="201">CENTINELA DEL CONDOR</option><option value="202">PALANDA</option><option value="203">PAQUISHA</option><option value="204">SAN CRISTÓBAL</option><option value="205">ISABELA</option><option value="206">SANTA CRUZ</option><option value="207">LAGO AGRIO</option><option value="208">GONZALO PIZARRO</option><option value="209">PUTUMAYO</option><option value="210">SHUSHUFINDI</option><option value="211">SUCUMBÍOS</option><option value="212">CASCALES</option><option value="213">CUYABENO</option><option value="214">ORELLANA</option><option value="215">AGUARICO</option><option value="216">LA JOYA DE LOS SACHAS</option><option value="217">LORETO</option><option value="218">SANTO DOMINGO</option><option value="219">SANTA ELENA</option><option value="220">LA LIBERTAD</option><option value="221">SALINAS</option>                         </select>
                        </div>
                       </div>  
                       <div class="col-lg-3">
                          <div class="form-group">
                            <label for="parroquia" class="control-label">Parroquia:</label>
                            <select class="custom-select parroquia"  name="parroquia" >
                              <option selected value="">Seleccione</option>
                            </select>
                          </div>
                       </div>
                       
                       <div class="col-lg-3">
                          <div class="form-group">
                          <label for="provincia" class="control-label">Provincia:</label>
                          <select class="custom-select provincia"  name="provincia" >
                          </select>
                        </div>
                       </div>
                       <div class="col-lg-3">
                        <div class="form-group">
                          <label for="region" class="control-label">Región:</label>
                          <select class="custom-select region"  name="region" >
                            <option selected value="">Seleccione</option>
                              <option value="1">COSTA</option><option value="2">SIERRA</option><option value="3">ORIENTE</option><option value="4">INSULAR</option>                         </select>
                        </div>
                       </div>
                       
                    </div>  

                  </div>  
                </div>
                <div class="row">
                  <div class="col-md-10">
                    <div class="form-group">
                      <label for="direccion" class="control-label">Dirección:</label>
                      <textarea class="form-control  direccion"  name="direccion" maxlength="255" autocomplete="off"></textarea>
                    </div>

                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                        <label for="tipo_persona" class="control-label">Tipo de registro</label>
                        <select class="custom-select tipo_persona"  name="tipo_persona" >
                          <option value="1">NORMAL</option><option value="2">PERSONA NATURAL</option><option value="3">EMPRESA PRIVADA</option><option value="4">EMPRESA PUBLICA</option><option value="5">OTROS</option>                       </select>
                      </div>
                  </div>
                </div>
                
                <div class="row">
                  <input type="hidden" class="resp_consulta" name="resp_consulta">
                </div>
              </div>
              <div class="tab-pane" id="datos_foto_edit">
                <div class="row">
                  <div class="col-lg-12 btns_foto" >
                     <div class="text-center">  
                      <button type="button" class="btn btn-outline-purple btn_continuar_foto"  style="display: none;"><i class="ti-check display-4"></i> <br>OK? </button>
                      <button type="button" class="btn btn-outline-danger btn_continuar_foto_no"  style="display: none;"><i class="ti-close display-4"></i> <br>NO </button>
                      <button type="button" class="btn btn-outline-primary btn_tomar_foto" ><i class="ti-camera display-4"></i> <br>TOMAR FOTO </button>
                     </div>
                    
                  </div>  
                  <div class="col-lg-12 no_foto" ></div>
                  <div class="col-lg-12 d-flex justify-content-center">
                    <video class="video" style="max-width: 500px;" ></video>
                    <canvas class="canvas_foto" style="display: none;"></canvas>
                  </div>    
                                
                </div>
            </div>

            </div>
        </div>

            <div class="modal-footer">
              
                <div class="text-center">
                  <button type="button" class="btn btn-outline-success btnactualizar" ><i class="ti-save display-4"></i><br>Guardar</button>
                </div>
              <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal"><i class="ti-close display-4"></i><br>Cerrar</button>
            </div>
          
        </form>
      </div>
    </div>
  </div><!-- /.modal -->
  <div id="M_enviar_correo" class="modal " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg modal-dialog-centered" >
      <div class="modal-content" style=" margin-top: 5%; border: 2px solid #9095ca;
                                    border-radius: 5px;-webkit-box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);
                            -moz-box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);
                            box-shadow: 0px 0px 53px 9px rgba(0,0,0,0.19);"> 
        <div class="modal-header">
          <h4 class="modal-title">ENVIAR CORREO</h4>
        </div>
          <div class="modal-body">
                        <form action="" id="form_eviar_correo">
                <div class="row">
                                <div class="col-sm-12">
                                    <div class="p-20">
                                            <input type="hidden" class="mod_id" name="mod_id">
                                            <div class="text-center titulo">
                                                
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="para_reenvio" class="control-label">PARA:</label>
                                                       <input type="text" class="form-control correo_para" name="correo_para" placeholder="PARA">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="cc_reenvio" class="control-label">CC:</label>
                                                        <input type="text" class="form-control con_copy"  name="con_copy" placeholder="Cc">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                         <label for="asunto_reenvio" class="control-label">ASUNTO:</label>
                                                        <input type="text" class="form-control asunto" name="asunto"  placeholder="ASUNTO">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <label for="txt_alergias">DETALLES</label>
                                            <div class="input-group">
                                                <textarea class="form-control detalle_envio" rows="8"  name="detalle_envio"></textarea>
                                            </div>

                                            <div class="text-right form-group m-b-0">
                                                <div class="pull-right text-center">
                                                                
                                                   <button class="btn btn-lg btn-danger waves-effect waves-light btn_enviar_correo"> <span>ENVIAR CORREO</span> <i class="fa fa-send m-l-10"></i> </button>
                                                </div>
                                            </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </form>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div><!-- /.modal -->  <div id="M_directorio" class="modal " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i>DIRECTORIO TELEFONICO</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" >
            <input type="hidden" class="mod_id" name="mod_id"/>
            <input type="hidden" class="mod_id_fono" name="mod_id_fono"/>
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <label for="genero" class="control-label">OPERADORA</label>
                  <select class="custom-select slc_operadora "   name="operadora" >
                    <option selected value="">Seleccione</option>
                    <option value="1">claro</option><option value="2">movistar</option><option value="3">CNT</option><option value="4">FIJO</option><option value="5">DEFAULT</option>                  </select>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="personal" id="check_fono">
                  <label class="form-check-label" for="check_fono">PERSONAL?</label>
                </div>
              </div>

              <div class="col-sm">
                    <div class="form-group">
                        <label for="nombre" class="control-label">TELEFONO</label>
                        <input type="text" class="form-control UpperCase txt_telefono"  name="telefono" autocomplete="off" >
                      </div>
              </div>
              <div class="col-4">
                <br>
                <button type="button" class="btn btn-success btn_addtabla"><i class="ti-plus"></i> GUARDAR</button>
              </div>
            </div>
          </form> 
            
            <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm" id="tabla_directoriotelefonico">
                      <thead>
                        <tr  class="info">
                          <th>Id</th>
                          <th>NUMERO</th>
                          <th>OPERADORA</th>
                          <th>PERSONAL?</th>
                          <th class='text-right'>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>

           </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div><!-- /.modal -->
  <div id="moddx" class="modal " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close cerrar" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><i class='fa fa-edit'></i> DIAGNÓSTICOS</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <input type="hidden" class="mod_id">
            <div class="col-lg-6">
              <label for="txt_tratamiento">Impresión diagnóstica:</label>
              <div class="input-group">
                <textarea class="form-control txt_tratamiento form_consulta_e" rows="10" id="txt_dx"  ></textarea>
              </div>
            </div>
            <div class="col-lg-6">
              <table class="table table-sm table-bordered" id="datos_dx_show">
                <tr>
                  <td colspan="2">DIAGNÓSTICO</td>
                  <td>----</td>
                </tr>
                <tr>
                  <td colspan="2">CÓDIGO</td>
                  <td>----</td>
                </tr>
                <tr>
                  <td colspan="2">CLASIFICACIÓN</td>
                  <td>----</td>
                </tr>
              </table>
              <div class="custom-control custom-radio pr-4">
                <input type="radio" value="1" id="search_nombre_dx" checked name="radio_fil_auto_dx" class="custom-control-input radio_fil_auto_dx">
                <label class="custom-control-label" for="search_nombre_dx">BUSCAR POR DIAGNÓSTICO</label>
              </div>
              <div class="custom-control custom-radio ">
                <input type="radio"  value="2" id="search_cod_dx" name="radio_fil_auto_dx" class="custom-control-input radio_fil_auto_dx">
                <label class="custom-control-label" for="search_cod_dx">BUSCAR POR CÓDIGO</label>
              </div>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" >
                    <i class="ti-search text-purple"></i> 
                  </div>
                </div>
                  <input type="text"  class="form-control form-control-lg atocom_dx  " id="atocom_dx" placeholder="BUSCAR DIAGNÓSTICO">
                </div>
              
              <div class="row">
                <div class="col-lg-12">
                  <button type="button" class="btn btn-outline-dark" title="Agregar el diagnóstico seleccionado" id="btn_usar_dx"><i class="ti-arrow-left"></i> <br>Agregar</button>                
                </div>
              </div>
            </div>

            
              
          </div>
        </div>

            
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger CERRAR" data-dismiss="modal">CERRAR</button>
          <button type="button" class="btn btn-primary waves-effect waves-light btnactualizar" style="display: none;">Actualizar</button>
        </div>
        
      </div>
    </div>
  </div><!-- /.modal -->
        </div>
        <!-- end container -->
      </div>
      <!-- end content -->
<!-- /page content -->
          </div>
       </div>
      </div>
    </div>
</div>

      
    



