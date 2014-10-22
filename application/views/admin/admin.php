<?php $data['page'] = "admin"; ?>
    <div class="container" id="content-backend">
        <div class="row">
            <div class="col-md-3">
                <?php $this->load->view('layout/navs_backend', $data); ?>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="usuarios">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="btn btn-primary btn-block" data-toggle="modal" data-target="#add_user" data-toggle="tooltip" data-placement="bottom" title="AGREGAR">
                                    Agregar Usuario
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="btn btn-warning btn-block">
                                    Ir a pagina
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="btn btn-success btn-block">
                                    Modificar Perfil
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs" role="tablist" id="page-backend">
                            <li class="active"><a href="#asesor" role="tab" data-toggle="tab">Asesores</a></li>
                            <li><a href="#cliente" role="tab" data-toggle="tab">Clientes</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="asesor">
                                <table class="table table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre Completo</th>
                                        <th>Telefono Movil</th>
                                        <th>Correo</th>
                                        <th>Acciones</th>
                                    </tr>
                                    <?php foreach ($lsts as $key): ?>
                                    <tr>
                                        <td><?php echo $key->no_identificacion; ?></td>
                                        <td><?php echo $key->nombres." ".$key->apellidos; ?></td>
                                        <td><?php echo $key->telefono_movil; ?></td>
                                        <td><?php echo $key->email; ?></td>
                                        <td>                    
                                            <a href="<?php echo base_url(); ?>Admin/lstUser/<?php echo $key->id_usuario; ?>" type='button' class='btn btn-sm btn-primary'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                                <span class='glyphicon glyphicon-eye-open'></span>
                                            </a>
                                            <a href="<?php echo base_url(); ?>Admin/updUser/<?php echo $key->id_usuario; ?>" type='button' class='btn btn-sm btn-primary'  data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                                <span class='glyphicon glyphicon-cog'></span>
                                            </a>
                                            <?php if ($key->estado == "Activo"): ?>
                                            <a href="<?php echo base_url(); ?>Admin/updUser/<?php echo $key->id_usuario; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="bottom" title="CAMBIAR ESTADO / DESACTIVAR">
                                                <span class='glyphicon glyphicon-remove'></span>
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url(); ?>Admin/updUser/<?php echo $key->id_usuario; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="bottom" title="CAMBIAR ESTADO / ACTIVAR">
                                                <span class='glyphicon glyphicon-ok'></span>
                                            </a>
                                        <?php endif ?>
                                            <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_usuario; ?>" data-rol="usuario"  data-toggle="tooltip" data-placement="bottom" title="ELIMINAR">
                                                <span class='glyphicon glyphicon-trash'></span>
                                            </a>                    
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </table>
                            </div>
                            <div class="tab-pane" id="cliente">
                                <table class="table table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre Completo</th>
                                        <th>Telefono Movil</th>
                                        <th>Correo</th>
                                        <th>Acciones</th>
                                    </tr>
                                    <?php foreach ($lstc as $key): ?>
                                    <tr>
                                        <td><?php echo $key->no_identificacion; ?></td>
                                        <td><?php echo $key->nombres." ".$key->apellidos; ?></td>
                                        <td><?php echo $key->telefono_movil; ?></td>
                                        <td><?php echo $key->email; ?></td>
                                        <td>                    
                                            <a href="<?php echo base_url(); ?>Admin/lstUser/<?php echo $key->id_usuario; ?>" type='button' class='btn btn-sm btn-primary'  data-toggle="tooltip" data-placement="left" title="CONSULTAR">
                                                <span class='glyphicon glyphicon-eye-open'></span>
                                            </a>
                                            <a href="<?php echo base_url(); ?>Admin/updUser/<?php echo $key->id_usuario; ?>" type='button' class='btn btn-sm btn-primary'  data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                                <span class='glyphicon glyphicon-cog'></span>
                                            </a>
                                        <?php if ($key->estado == "Activo"): ?>
                                            <a href="<?php echo base_url(); ?>Admin/updUser/<?php echo $key->id_usuario; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="bottom" title="CAMBIAR ESTADO / DESACTIVAR">
                                                <span class='glyphicon glyphicon-remove'></span>
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url(); ?>Admin/updUser/<?php echo $key->id_usuario; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="bottom" title="CAMBIAR ESTADO / ACTIVAR">
                                                <span class='glyphicon glyphicon-ok'></span>
                                            </a>
                                        <?php endif ?>
                                            <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_usuario; ?>" data-rol="usuario"  data-toggle="tooltip" data-placement="right" title="ELIMINAR">
                                                <span class='glyphicon glyphicon-trash'></span>
                                            </a>                    
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>