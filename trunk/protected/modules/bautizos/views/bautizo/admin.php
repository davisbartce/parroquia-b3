<?php
/** @var BautizoController $this */
/** @var Bautizo $model */
$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create'), 'icon' => 'plus', 'url' => array('create'),
//'visible' => (Util::checkAccess(array('action_incidenciaPrioridad_create')))
    ),
);
?>
<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
              <!--<small>-->
            <i class="fa fa-child"></i>  Bautizo<!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
        <a class="btn btn-success actionMenuAdmin" href="<?php echo Yii::app()->createUrl('bautizos/bautizo/create') ?>"><i
                class="fa fa-plus"></i>&nbsp; Crear 
        </a>
    </section>

    <div class="col-lg-12 col-sm-12">
        <br>
        <div id="flashMsg"  class="flash-messages">

        </div> 

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Administrar' . ' ' . Bautizo::label(2); ?></h3>
            </div>
            <div class="panel-body">
                <div class="scrollable">



                    <?php
                    $this->widget('booster.widgets.TbGridView', array(
                        'id' => 'bautizo-grid',
                        'type' => 'striped bordered hover advance',
                        'dataProvider' => $model->search(),
//                        'filters'=>true,
                        'filter'=>$model,
                        'columns' => array(
                            array(
                                'name'=>'persona_id',
                                'value'=>'$data->persona->campo_completo',
                                'filter'=> CHtml::listData(Persona::model()->findAll(), 'id', 'nombres'),
                            ),
//                            'persona_id',
                            'fecha_bautizo',
                            'iglesia',
//                            'padre_parroquia_id',
                              array(
                                'name'=>'padre_parroquia_id',
                                'value'=>'$data->padre->nombres." ".$data->padre->apellidos'
                            ),
                              array(
                                'name'=>'papa_id',
                                'value'=>'$data->papa->campo_completo'
                            ),
                             array(
                                'name'=>'mama_id',
                                'value'=>'$data->mama->campo_completo'
                            ),
//                            'papa_id',
//                            'mama_id',
                            /*
                              'feligreses_de',
                              'padrino_id',
                              'madrina_id',
                              'tomo_id',
                              'pagina',
                              'numero',
                              'nota',
                              'rc_año',
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
    </div>

</aside>