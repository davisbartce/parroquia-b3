<?php
/** @var PersonaController $this */
/** @var Persona $model */
$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create'), 'icon' => 'plus', 'url' => array('create'),
//'visible' => (Util::checkAccess(array('action_incidenciaPrioridad_create')))
    ),
);
?>
<aside class="right-side">
    <section class="content-header">
        <h1>
            <!--<small>-->
            <i class="fa fa-user"></i>  Personas<!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
    </section>

    <div class="col-lg-12 col-sm-12">
        <br>
        <div id="flashMsg"  class="flash-messages">

        </div> 

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Administrar'; ?></h3>
            </div>
            <div class="panel-body">
                <!--<div class="row">-->

                    <!--<div class="col-xs-12">-->

                        <?php
                        $this->widget('booster.widgets.TbGridView', array(
                            'id' => 'persona-grid',
                            'type' => 'striped bordered hover advance',
                            'dataProvider' => $model->search(),
                            'columns' => array(
                                'documento',
                                'nombres',
                                'apellidos',
                                'fecha_nacimiento',
                                'lugar_nacimiento',
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
                                            'label' => '<button class="btn btn-primary"><i class="icon-pencil"></i></button>',
                                            'options' => array('title' => 'Actualizar'),
                                            'imageUrl' => false,
                                        //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_update"))'
                                        ),
                                        'delete' => array(
                                            'label' => '<button class="btn btn-danger"><i class="icon-trash"></i></button>',
                                            'options' => array('title' => 'Eliminar'),
                                            'imageUrl' => false,
                                        //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_delete"))'
                                        ),
                                    ),
                                    'htmlOptions' => array(
                                        'width' => '80px'
                                    )
                                ),
                            ),
                        ));
                        ?>
                    <!--</div>-->
                <!--</div>-->
            </div>
        </div>
    </div>

</aside>