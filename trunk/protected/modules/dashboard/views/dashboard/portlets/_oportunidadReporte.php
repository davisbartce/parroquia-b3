<?php
// Obtener Tareas activos
//$piereport = $model->generatePieReport();
$piereport = Oportunidad::model()->generatePieReport();
?>
<?php if ($piereport['series'][0]['data']): ?>

    <div class="widget bluesky "id="oportunidadReporte" >
        <div class="widget-title">
            <h4><i class="icon-tags"></i> <?php echo "Informe Oportunidades" ?></h4>
            <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
            </span>
        </div>
        <div class="widget-body center">
           <?php
            $this->Widget('ext.highcharts.HighchartsWidget', array(
                'scripts' => array(
                    'modules/exporting', // adds Exporting button/menu to chart
                ),
                'options' => $piereport
            ));
            ?>
        </div>
    </div>
<?php endif; ?>