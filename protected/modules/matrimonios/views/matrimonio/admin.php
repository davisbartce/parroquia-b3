<?php
Util::tsRegisterAssetJs('admin.js');
?>
<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
            <!--<small>-->
            <i class="fa fa-slideshare"></i>  Matrimonios<!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
        <a class="btn btn-success actionMenuAdmin" href="<?php echo Yii::app()->createUrl('matrimonios/matrimonio/create') ?>"><i
                class="fa fa-plus"></i>&nbsp; Crear 
        </a>
    </section>

    <div class="col-lg-12 col-sm-12">
        <br>
        <div id="flashMsg"  class="flash-messages">

        </div> 

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Administrar' . ' ' . Matrimonio::label(2); ?></h3>
            </div>
            <div class="panel-body">
                <div class="input-group input-group-sm col-sm-4">
                    <input type="text" id="busquedaSearch" class="form-control" placeholder=" Buscar Novios">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button" onclick="js:search();"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                <div class="scrollable">

                    <?php
                    $this->widget('booster.widgets.TbGridView', array(
                        'id' => 'matrimonio-grid',
                        'type' => 'striped bordered hover advance',
                        'dataProvider' => $model->search(),
                        'columns' => array(
                            array(
                                'name' => 'novio_id',
                                'value' => '$data->novio->campo_completo'
                            ),
                            array(
                                'name' => 'novia_id',
                                'value' => '$data->novia->campo_completo'
                            ),
                            'fecha_matrimonio',
                            'iglesia',
//                        'padre_parroquia_id',
                            array(
                                'name' => 'padre_parroquia_id',
                                'value' => '$data->padre->nombres." ".$data->padre->apellidos'
                            ),
//                        'novio_id',
//                        'papa_novio_id',
//                        'mama_novio_id',
                            /*
                              'testigo_novio_1',
                              'testigo_novio_2',
                              'novia_id',
                              'papa_novia_id',
                              'mama_novia_id',
                              'testigo_novia_1',
                              'testigo_novia_2',
                              'tomo_id',
                              'pagina',
                              'numero',
                              'rc_ano',
                              'rc_tomo',
                              'rc_folio',
                              'rc_acta',
                              'rc_lugar',
                              'rc_fecha',
                             */
                            array(
                                'class' => 'CButtonColumn',
                                'template' => '{view} {update} {delete} {print}',
                                'afterDelete' => 'function(link,success,data){ 
                if(success) {
                $("#flashMsg").empty();
                $("#flashMsg").css("display","");
                $("#flashMsg").html(data).animate({opacity: 1.0}, 5500).fadeOut("slow");
                }
                }',
                                'buttons' => array(
                                    'view' => array(
                                        'label' => '<button class="btn btn-info"><i class="fa fa-eye"></i></button>',
                                        'options' => array('title' => 'Ver'),
                                        'imageUrl' => false,
                                    //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_update"))'
                                    ),
                                    'update' => array(
                                        'label' => '<button class="btn btn-primary"><i class="fa fa-pencil"></i></button>',
                                        'options' => array('title' => 'Actualizar'),
                                        'imageUrl' => false,
                                    //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_update"))'
                                    ),
                                    'delete' => array(
                                        'label' => '<button class="btn btn-danger"><i class="fa fa-trash"></i></button>',
                                        'options' => array('title' => 'Eliminar'),
                                        'imageUrl' => false,
                                    //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_delete"))'
                                    ),
                                    'print' => array(
                                        'label' => '<button class="btn btn-success"><i class="fa fa-file-text"></i></button>',
                                        'options' => array('title' => 'Imprimir', 'target' => '_blank'),
                                        'imageUrl' => false,
                                        'url' => 'Yii::app()->createUrl("matrimonios/matrimonio/viewPrint", array("id"=>$data->id))',
                                    //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_delete"))'
                                    ),
                                ),
                                'htmlOptions' => array(
                                    'width' => '180px'
                                )
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>

</aside>