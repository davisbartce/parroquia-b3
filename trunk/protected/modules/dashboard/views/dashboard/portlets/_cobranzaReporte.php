<?php
// Obtener Tareas activos
//$piereport = $model->generatePieReport();
$piereport = $rolUser == 'OPERADOR' ? Cobranza::model()->generatePieReport(Yii::app()->user->id) : Cobranza::model()->generatePieReport();
?>
<?php if ($piereport['series'][0]['data']): ?>
    <div class="widget yellow" id="cobranzaReporte">
        <div class="widget-title">
            <h4><i class="icon-money"></i> <?php echo "Informe Gestión Cobranzas Vencidas" ?></h4>
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