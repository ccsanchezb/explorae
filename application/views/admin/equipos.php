<?php $data['page'] = "admin-equipo"; ?>
<div class="container" id="content-backend">
    <div class="row">
        <div class="col-md-3">
            <?php $this->load->view('layout/navs_backend', $data); ?>
        </div>
        <div class="col-md-9">            
            <div class="row" id="head-backend">
                <div class="col-md-6">
                    <a href="<?php echo base_url(); ?>Admin/add_tool" type="button" class="btn btn-primary btn-block iframe cboxElement" data-toggle="tooltip" data-placement="bottom" title="AGREGAR">
                        Agregar Equipo
                    </a>
                </div>
                <div class="col-md-6">                                
                    <div class="btn-group btn-block">                                
                        <button type="button" class="btn btn-warning dropdown-toggle btn-block" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $this->session->userdata('nameUser'); ?>&nbsp;<span class="caret"></span>            
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Ir a pagina</a></li>                                    
                            <li><a href="<?php echo base_url(); ?>Admin/data_upd/<?php echo $this->session->userdata('idUser'); ?>" class="iframe cboxElement">Modificar Perfil</a></li>                                                                                               
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>Login/close">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div role="tabpanel">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#cate1" aria-controls="cate1" role="tab" data-toggle="tab">Categoria: <span class="glyphicon glyphicon-star"></span></a></li>
                    <li role="presentation"><a href="#cate2" aria-controls="cate2" role="tab" data-toggle="tab">Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></a></li>
                    <li role="presentation"><a href="#cate3" aria-controls="cate3" role="tab" data-toggle="tab">Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></a></li>                    
                </ul>

              <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="cate1">    
                        <table class="table table-striped" id="panel">
                            <tr>
                                <th>Nombre del equipo</th>                                
                                <th>Precio del alquiler</th>                               
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($equipo1 as $key): ?>
                            <tr>
                                <td><?php echo $key->nombre_equipo; ?></td>                                
                                <td><?php echo $key->precio_alquiler; ?></td>                                
                                <td>                    
                                    <a href="<?php echo base_url(); ?>Admin/list_tool/<?php echo $key->id_equipo; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                        <span class='glyphicon glyphicon-eye-open'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>Admin/upd_tool/<?php echo $key->id_equipo; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                        <span class='glyphicon glyphicon-cog'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_equipo; ?>" data-rol="equipo" data-toggle="tooltip" data-placement="bottom" title="ELIMINAR">
                                        <span class='glyphicon glyphicon-trash'></span>
                                    </a>                    
                                </td>
                            </tr>
                        </table>                            
                        <?php endforeach ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="cate2">
                        <table class="table table-striped" id="panel">
                            <tr>
                                <th>Nombre del equipo</th>                                
                                <th>Precio del alquiler</th>                               
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($equipo2 as $key): ?>
                            <tr>
                                <td><?php echo $key->nombre_equipo; ?></td>                            
                                <td><?php echo $key->precio_alquiler; ?></td>                               
                                <td>                    
                                    <a href="<?php echo base_url(); ?>Admin/list_tool/<?php echo $key->id_equipo; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                        <span class='glyphicon glyphicon-eye-open'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>Admin/upd_tool/<?php echo $key->id_equipo; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                        <span class='glyphicon glyphicon-cog'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_equipo; ?>" data-rol="equipo" data-toggle="tooltip" data-placement="bottom" title="ELIMINAR">
                                        <span class='glyphicon glyphicon-trash'></span>
                                    </a>                    
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="cate3">
                        <table class="table table-striped" id="panel">
                            <tr>
                                <th>Nombre del equipo</th>                                
                                <th>Precio del alquiler</th>                                
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($equipo3 as $key): ?>
                            <tr>
                                <td><?php echo $key->nombre_equipo; ?></td>                                
                                <td><?php echo $key->precio_alquiler; ?></td>                                
                                <td>                    
                                    <a href="<?php echo base_url(); ?>Admin/list_tool/<?php echo $key->id_equipo; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                        <span class='glyphicon glyphicon-eye-open'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>Admin/upd_tool/<?php echo $key->id_equipo; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                        <span class='glyphicon glyphicon-cog'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_equipo; ?>" data-rol="equipo" data-toggle="tooltip" data-placement="bottom" title="ELIMINAR">
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