<?php
// Obtener Tareas activos
$tareas = Tarea::model()->activos()->noConcluidas()->ordenFechaFin()->limite()->findAll();
$styles = array("", "-danger", "-warning", "-success");
$label_styles = array("-info", "-important", "-warning", "-success");
?>
<?php if ($tareas): ?>

    <div class="widget red" id="tareaReporte">
        <div class="widget-title">
            <h4><i class="icon-tasks"></i> Tareas en proceso</h4>
            <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
            </span>
        </div>
        <div class="widget-body">


            <div class="row-fluid">

                <ul class="unstyled">
                    <?php foreach ($tareas as $k => $tarea): ?>
                        <li>
                            <?php echo CHtml::link($tarea->nombre, array('/tareas/tarea/view', 'id' => $tarea->id)); ?>
                            <strong class="label label<?php echo $label_styles[$k] ?> pull-right"><?php echo $tarea->etapa->porcentaje ?>%</strong>
                            <div class="space10"></div>
                            <div class="progress progress<?php echo $styles[$k] ?>">
                                <div style="width: <?php echo $tarea->etapa->porcentaje . '%' ?>;" class="bar"></div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php
                $this->widget(
                        'bootstrap.widgets.TbButton', array(
                    'label' => 'Ver todas',
                    'type' => 'primary',
                    'url' => Yii::app()->createUrl('/tareas/tarea/admin')
                        )
                );
                ?>



            </div>
        </div>
    </div>
<?php endif; ?>