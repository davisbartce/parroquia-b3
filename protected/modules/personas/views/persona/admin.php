<?php
Util::tsRegisterAssetJs('admin.js');
?>
<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
            <!--<small>-->
            <i class="fa fa-user"></i>  Personas<!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
        <a class="btn btn-success actionMenuAdmin" href="<?php echo Yii::app()->createUrl('personas/persona/create') ?>"><i
                class="fa fa-plus"></i>&nbsp; Crear 
        </a>


    </section>

    <div class="col-lg-12 col-sm-12">
        <br>
        <div id="flashMsg"  class="flash-messages">

        </div> 

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Administrar'; ?></h3>
                <?php
//                   $this->widget(
//                                     'booster.widgets.TbButton', array(
//                                'id' => 'add-contact',
//                                'label' => 'Agregar Contacto',
//                                'encodeLabel' => false,
//                                'icon' => 'user',
//                                'htmlOptions' => array(
//                                    'onClick' => 'js:viewModal("personas/persona/createModal",function(){'
//                                    . '})',
//                                    'class' => '',
//                                ),
//                                    )
//                            ) ;
            ?>
            </div>
            <div class="panel-body">
                
                 <div class="input-group input-group-sm col-sm-4">
                    <input type="text" id="busquedaSearch" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button" onclick="js:search();"><i class="fa fa-search"></i></button>
                    </span>
                </div>

                <div class="scrollable">


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
                                'template' => '{update} {view} {delete}',
                                'afterDelete' => 'function(link,success,data){ 
                if(success) {
                $("#flashMsg").empty();
                $("#flashMsg").css("display","");
                $("#flashMsg").html(data).animate({opacity: 1.0}, 5500).fadeOut("slow");
                }
                }',
                                'buttons' => array(
                                    'update' => array(
                                        'label' => '<button class="btn btn-primary"><i class="fa fa-pencil"></i></button>',
                                        'options' => array('title' => 'Actualizar'),
                                        'imageUrl' => false,
                                    //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_update"))'
                                    ),
                                    'view' => array(
                                        'label' => '<button class="btn btn-success"><i class="fa fa-eye"></i></button>',
                                        'options' => array('title' => 'Ver'),
                                        'imageUrl' => false,
                                    //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_update"))'
                                    ),
                                    'delete' => array(
                                        'label' => '<button class="btn btn-danger"><i class="fa fa-trash"></i></button>',
                                        'options' => array('title' => 'Eliminar'),
//                                        'url' => false,
                                        'imageUrl' => false,
                                    'visible' => '$data->validarDependencias()'
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