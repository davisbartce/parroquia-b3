<?php
Util::tsRegisterAssetJs('admin.js');
?>
<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
            <!--<small>-->
            <i class="fa fa-bell"></i>  Comunión<!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
        <a class="btn btn-success actionMenuAdmin" href="<?php echo Yii::app()->createUrl('comuniones/comunion/create') ?>"><i
                class="fa fa-plus"></i>&nbsp; Crear 
        </a>
    </section>

    <div class="col-lg-12 col-sm-12">
        <br>
        <div id="flashMsg"  class="flash-messages">

        </div> 

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Administrar' . ' ' . Comunion::label(2); ?></h3>
            </div>
            <div class="panel-body">

                <div class="input-group input-group-sm col-sm-4">
                    <input type="text" id="busquedaSearch" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button" onclick="js:search();"><i class="fa fa-search"></i></button>
                    </span>
                </div>

                <?php
                $this->widget('booster.widgets.TbGridView', array(
                    'id' => 'comunion-grid',
                    'type' => 'striped bordered hover advance',
                    'dataProvider' => $model->search(),
                    'columns' => array(
                        array(
                            'name' => 'persona_id',
                            'value' => '$data->persona->campo_completo'
                        ),
                        'fecha_comunion',
                        'iglesia',
                        array(
                            'name' => 'padre_parroquia_id',
                            'value' => '$data->padre->nombres." ".$data->padre->apellidos'
                        ),
                        array(
                            'name' => 'papa_id',
//                            'value' => '$data->papa->nombres." ".$data->papa->apellidos'
                            'value' => '$data->papa->campo_completo'
                        ),
                        array(
                            'name' => 'mama_id',
                            'value' => '$data->mama->campo_completo'
//                            'value' => '$data->mama->nombres." ".$data->mama->apellidos'
                        ),
                        /*
                          'feligreses_de',
                          'padrino_id',
                          'madrina_id',
                          'tomo_id',
                          'pagina',
                          'numero',
                          'nota',
                          'rc_ano',
                          'rc_tomo',
                          'rc_folio',
                          'rc_acta',
                          'rc_fecha',
                         */
                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{view} {update} {delete}',
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
                            ),
                            'htmlOptions' => array(
                                'width' => '140px'
                            )
                        ),
                    ),
                ));
                ?>
            </div>
        </div>
    </div>

</aside>