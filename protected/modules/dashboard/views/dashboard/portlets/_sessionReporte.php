<?php
$lineports = CrugeSession::model()->generateLineReport();
$datosReporte=max($lineports['series'][0]['data'] );
?>
<div class="widget blue">
    <div class="widget-title">
        <h4> <i class="icon-info"></i> <?php echo "Informe de Sesiones" ?></h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <a href="javascript:;" class="icon-remove"></a>
        </span>
    </div>
    <div class="widget-body">
       <?php if (($datosReporte[0] )!= null): ?>
            <?php
                $this->Widget('ext.highcharts.HighchartsWidget', array(
                    'scripts' => array(
                        'modules/exporting', // adds Exporting button/menu to chart
                    ),
                    'options' => $lineports
                ));
                ?>
        <?php endif; ?> 
        
    </div>

</div>