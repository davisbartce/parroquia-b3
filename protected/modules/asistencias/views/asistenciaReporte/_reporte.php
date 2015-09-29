<?php
/** @var AsistenciaController $this */
/** @var Asistencia $model */
/** @var AweActiveForm $form */
?>
<aside class="right-side">

    <section class="content-header">
        <h1>
            <!--<small>-->
            Reporte de Asistencia            <!--</small>-->
        </h1>
    </section>

    <?php
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'type' => 'horizontal',
        'id' => 'asistencia-reporte-form',
        'enableAjaxValidation' => true,
        'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
        'enableClientValidation' => false,
    ));
    ?>
    <div class="col-lg-12 col-sm-12">

        <br>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Reporte de Asistencias'; ?></h3>
            </div>
            <div class="panel-body">





                <?php
                echo $form->dateRangeGroup(
                        $model, 'fechas', array(
                    'widgetOptions' => array(
//                        'callback' => 'js:function(start, end){console.log(start.toString("MMMM d, yyyy") + " - " + end.toString("MMMM d, yyyy"));}',
                        'options' => array(
                            'format' => 'DD/MM/YYYY',
                           // 'autoclose' => true
                        ),
                    ),
                    'wrapperHtmlOptions' => array(
                        'class' => 'col-sm-5',
                    ),
//				'hint' => 'Click inside! An even a date range field!.',
                    'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                        )
                );
                ?>


                <?php
                $this->widget('booster.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'label' => 'Buscar',
                ));
                ?>
                <?php if ($reporte) : ?>
                    <?php
                    $this->Widget('ext.highcharts.HighchartsWidget', array(
                        'scripts' => array(
                            'modules/exporting', // adds Exporting button/menu to chart
                        ),
                        'options' => $reporte
                    ));
                    ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->endWidget(); ?>
</aside>