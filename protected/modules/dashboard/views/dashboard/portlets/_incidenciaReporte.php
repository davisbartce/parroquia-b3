<?php
$lineport = Incidencia::model()->generateLineReport();
$datosReporte=max($lineport['series'][0]['data'] );
?>
<?php if (($datosReporte[0] )!= null): ?>
    <div class="widget purple">
        <div class="widget-title">
            <h4> <i class="icon-fire-extinguisher"></i> <?php echo "Informe Incidencias" ?></h4>
            <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
            </span>
        </div>
        <div class="widget-body">
            <?php
//            $this->widget(
//                    'chartjs.widgets.ChBars', $lineport
//            );
                $this->Widget('ext.highcharts.HighchartsWidget', array(
                    'scripts' => array(
                        'modules/exporting', // adds Exporting button/menu to chart
                    ),
                    'options' => $lineport
                ));
            ?>
        </div>

    </div>
<?php endif; ?> 