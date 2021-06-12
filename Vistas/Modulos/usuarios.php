<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Administrar Usuarios</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
          <div class="input-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Nuevo usuario</button>

            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">DATOS DEL NUEVO USUARIO</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h4>Text in a modal</h4>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>

                </div>
              </div>
            </div>


            <div class="clearfix"></div>
          </div>
          <!--TABLA DE USUARIOS-->

          <table class="table table-striped projects">

            <thead>

            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Ultimo Ingreso</th>
              <th>Acciones</th>

            </tr>

            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Pedro Ormaza </td>
                <td>Admin</td>

                <td><img src="vistas/img/usuarios/imguser.png" class="avatar" alt="Avatar"></td>
                <td>Admin del Sistema</td>
                <td><button type="button" class="btn btn-success btn-xs">Success</button></td>
                <td>2021-Junio-12 </td>
                <td>
                  <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                  <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Borrar </a>
                </td>
              </tr>







          </table>



      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->
