<!DOCTYPE html>
        <!-- page content -->
        <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"><i class='fa fa-edit'></i> Agendar cita médica</h4>
      </div>
      <div class="modal-body" >
        <div class="row">
          <div class="col-lg-6">
            <form action="" id="form_data">
              <!-- <input type="hidden" name="fecha_consulta" class="fecha_consulta_select"> -->
              <div class="row">
                
                <div class="text-center">
                  <span class="fecha_consulta_str negrita text-danger display-4"></span> 
                </div>  
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="atocom_paciente" class="control-label">PACIENTE</label>
                    <div class="input-group">
                      
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="ti-search text-purple"></i> 
                        </div>
                      </div>
                      
                      <input type="text" class="form-control atocom_paciente" id="atocom_paciente"   placeholder="BUSCAR PACIENTE">
                    </div>
                  </div>  
                </div>
                  <!-- <div class="data-doctor"></div> -->
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="tipoconsulta" class="control-label">TIPO DE CONSULTA</label>
                    <select class="custom-select tipoconsulta "  required="true" id="tipoconsulta" name="tipoconsulta" >
                      <option value="1">Consulta</option><option value="2">Endoscopía</option><option value="4">Rev examen</option><option value="6">Ecografia</option><option value="9">Anoscopia de alta resolución</option><option value="10">Manometría anorrectal</option>                   </select>
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="inp_fr" class="control-label">COMENTARIO</label>
                    <input type="text" title="COMENTARIOS" name="comentario_cita"  class="form-control inp_comentario_cita form_consulta_e" id="comentario_cita_slc" autocomplete="off" >
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="slc_medico_referido" class="control-label">MÉDICO</label>
                    <select class="custom-select slc_medico_referido "  name="slc_medico_referido" id="slc_medico_referido_cita">

                    </select>
                  </div>
                </div>
                
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="telefono" class="control-label">FECHA:</label>
                    <div class="input-group">
                      <input type="text" autocomplete="off"  class="form-control datepicker-hide  fecha_consulta_select " name="fecha_consulta" placeholder="mm/dd/yyyy" id="fecha_consulta_cita">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="ion-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-6">
                  <input type="hidden" class="inp_fecha form_consulta_e">

                  <div class="form-group">
                    <label for="slc_hora_disp" class="control-label">HORA</label>
                    <div class="input-group ">
                      <input type="text"  class="form-control timepicker slc_hora_disp form_consulta_e" name="slc_hora_disp" placeholder="H:M" id="slc_hora_disp"/>
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="ion-calendar"></i></span>
                      </div>
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
                
                
                
                
                
              </div>
            </form>
          </div>
          <div class="col-lg-6">
            <div class="text-center negrita text-pruple display-4 ">
              PACIENTE <i class="ti-user"></i>
            </div>
            
            <table class="table table-sm table-bordered" id="datos_paciente_show" style="overflow: hidden;">
              <tr>
                <td rowspan="6" class="">
                  <img src="./img/personas/default.png" alt="" style="max-height: 200px; max-width: 120px;">
                </td>
                <td>NOMBRES</td>

                <td class="show_genero">
                  ----------
                </td>
              </tr>
              <tr>
                <td>
                  APELLIDOS
                </td>
                <td class="show_f_nacimiento">
                  ----------
                </td>
              </tr>
              <tr>
                <td>
                  CI
                </td>
                <td class="show_f_nacimiento">
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
                <td class="show_estado_civil">
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
            <div class="btn_pac">
            </div>
          </div>
          <div class="col-lg-12">
            <div id="detales_asignacion"></div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <div class="text-right">
          <button type="button" class="btn btn-success waves-effect waves-green btnconfirm">AGENDAR CITA</button>
        </div>
        
        <div class="text-right">
          <button type="button" class="btn btn-primary waves-effect waves-light btn_new_paciente">CREAR PACIENTE</button>
        </div>
        

        <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal">Cerrar</button>

        
          
      </div>
    </div>
  </div>
</div>
    <!-- /calendar modal -->
