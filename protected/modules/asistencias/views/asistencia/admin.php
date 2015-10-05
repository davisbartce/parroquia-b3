
<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
            <!--<small>-->
            <i class="fa fa-calendar"></i>  Asistencia<!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
        <a class="btn btn-success actionMenuAdmin" href="<?php echo Yii::app()->createUrl('asistencias/asistencia/create') ?>"><i
                class="fa fa-plus"></i>&nbsp; Crear 
        </a>
    </section>

    <div class="col-lg-12 col-sm-12">
        <br>
        <div id="flashMsg"  class="flash-messages">

        </div> 

        <div class="box box-solid box-info">
            <div class="box-header">
                <h3 class="box-title">Info Solid Box</h3>
                <div class="box-tools pull-right">
                    <a class="btn btn-warning btn-sm" style="color:white" href="<?php echo Yii::app()->createUrl('asistencias/asistenciaReporte/reporte') ?>"><i
                            class="fa fa-line-chart"></i>&nbsp; Reportes 
                    </a>

<!--<button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
<!--                    <button class="btn btn-warning btn-sm" ><i class="fa  fa-line-chart"></i>  <a class="" style="color:white; font-weight: bolder;" href="<?php echo Yii::app()->createUrl('asistencias/asistenciaReporte/reporte') ?>">&nbsp; Reporte 
    </a></button>-->
                </div>
            </div>
            <div class="box-body">

                <?php
                $this->widget('booster.widgets.TbGridView', array(
                    'id' => 'asistencia-grid',
                    'type' => 'striped bordered hover advance',
                    'dataProvider' => $model->search(),
                    'columns' => array(
                        'fecha',
                        'numero_asistentes',
                        'numero_comulgados',
                        array(
                            'class' => 'CButtonColumn',
//                'template' => '{update} {delete}',
                            'template' => '{delete}',
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
                                    'label' => '<button class="btn btn-danger"><i class="fa fa-trash"></i></button>',
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
            </div>
        </div>
    </div>

</aside>