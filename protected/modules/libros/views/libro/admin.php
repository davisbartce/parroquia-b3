<?php
/** @var LibroController $this */
/** @var Libro $model */
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
            <i class="fa fa-book"></i>  Libros<!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
        <a class="btn btn-success actionMenuAdmin" href="<?php echo Yii::app()->createUrl('libros/libro/create') ?>"><i
                class="fa fa-plus"></i>&nbsp; Crear 
        </a>

    </section>

    <div class="col-lg-12 col-sm-12">
        <br>
        <div id="flashMsg"  class="flash-messages">

        </div> 

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Administrar' ?></h3>
            </div>
            <div class="panel-body">
                <div class="scrollable">


                    <?php
                    $this->widget('booster.widgets.TbGridView', array(
                        'id' => 'libro-grid',
                        'type' => 'striped bordered hover advance',
                        'dataProvider' => $model->search(),
                        'columns' => array(
                            'ano',
                            'tomo',
                            array(
                                'name' => 'tipo',
                                'filter' => array('BAUTIZOS' => 'BAUTIZOS', 'MATRIMONIOS' => 'MATRIMONIOS', 'CONFIRMACIONES' => 'CONFIRMACIONES', 'PRIMERAS COMUNIONES' => 'PRIMERAS COMUNIONES',),
                            ),
                            array(
                                'class' => 'CButtonColumn',
                                'template' => '{update} {delete}',
                                'afterDelete' => 'function(link,success,data){ 
                if(success) {
                $("#flashMsg").empty();
                $("#flashMsg").css("display","");
                $("#flashMsg").html(data).animate({opacity: 1.0}, 5500).fadeOut("slow");
                }
                }',
                                'buttons' => array(
                                    'update' => array(
                                        'label' => '<button class="btn btn-primary"><i class=" fa fa-pencil"></i></button>',
                                        'options' => array('title' => 'Actualizar'),
                                        'imageUrl' => false,
                                    //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_update"))'
                                    ),
                                    'delete' => array(
                                        'label' => '<button class="btn btn-danger"><i class="fa fa-trash"></i></button>',
                                        'options' => array('title' => 'Eliminar'),
                                        'imageUrl' => false,
                                    //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_delete"))'
                                     'visible' => '$data->validarDependencias()'
                                    ),
                                ),
                                'htmlOptions' => array(
                                    'width' => '100px'
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