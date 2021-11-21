
  
    

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

        


          <!--TABLA DE PERSONAS-->
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
                        <input type="text" class="form-control identificacion"  name="nuevaCedula" id="nuevaCedula"autocomplete="off" >
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-check custom-checkbox form-check-inline">
                        <input type="checkbox" class="custom-control-input form-check-input anonimo" id="check_per_edit_anoi" name="anonimo">
                        <label class="custom-control-label" for="check_per_edit_anoi">ID temporal</label>
                      </div>
                      
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="edit_nombres" class="control-label">Nombres:</label>
                        <input type="text"   requiered="true" class="form-control  nombres" id="nuevoNombre"  name="nuevoNombres" autocomplete="off" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="edit_apellidos" class="control-label">Apellido Paterno:</label>
                        <input type="text"   requiered="true" class="form-control  apellidos"   id="nuevoApellidop" name="nuevoApellidoP" autocomplete="off" >
                      </div>
                    </div>  
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="edit_apellidos" class="control-label">Apellido Materno:</label>
                        <input type="text"   requiered="true" class="form-control  apellidos"   id="nuevoApellidom" name="nuevoApellidom" autocomplete="off" >
                      </div>
                    </div>  
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="control-label">Correo:</label>
                        <input type="emails" class="form-control emails"  name="email" autocomplete="off">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="actividad" class="control-label">Ocupación (actividad):</label>
                        <input class="form-control  actividad"   name="nuevaOcopacion" Id="nuevaOcupacion" autocomplete="off"></textarea>
                      </div>
                    </div>
                    
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label for="telefono" class="control-label">Fecha de nacimiento:</label>
                        <div class="input-group">
                          <input type="date"  requiered="true" class="form-control datepicker fecha_nacimiento" name="nuevaFechaNacimiento" placeholder="mm/dd/yyyy" >
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="ion-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label for="genero" class="control-label">Género:</label>
                        <select class="custom-select genero"  requiered="true"  name="nuevoGenero" id="nuevoGenero" >
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
                        <div class="form-group">
                          <label for="parroquia" class="control-label">Provincia:</label>
                          <select class="custom-select parroquia select2"  name="idProvincia" id="idProvincia"  data-width="100%">
                            <option  value=""></option>
                          </select>
                        </div>
                     </div>
                    <div class="col-sm">
                        <div class="form-group">
                        <label for="provincia" class="control-label">Canton:</label>
                        <select class="custom-select provincia"  name="provincia" id="idCanton">
                        </select>
                      </div>
                     </div>
                      <div class="col-sm">
                        <div class="form-group">
                        <label for="provincia" class="control-label">Parroquia:</label>
                        <select class="custom-select provincia"  name="provincia" id="idParroquia">
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
            <button type="button" class="btn btn-outline-success btnregistrar" >Guardar</button>
          </div>
          <button type="button" class="btn btn-outline-danger cerrar">Cerrar</button>
        </div>
      </div>
    </div>
  </div><!-- /.modal -->
<div id="modal_editar_paciente" class="modal "  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" 
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
                  <button type='submit' class="btn btn-primary"><i class="ti-save display-4"></i><br>Guardar</button>
                </div>
              <button type="button" class="btn btn-outline-danger cerrar" data-dismiss="modal"><i class="ti-close display-4"></i><br>Cerrar</button>
            </div>
    </div>
  </div>
</div><!-- /.modal --><div id="M_files_paciente" class="modal "  role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
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
