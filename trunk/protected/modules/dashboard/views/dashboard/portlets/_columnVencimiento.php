<?php $columnVencimiento = $rolUser == 'OPERADOR' ? Cobranza::model()->generateColumnReport(Yii::app()->user->id) : Cobranza::model()->generateColumnReport(); ?>
<div class="widget bluesky">
    <div class="widget-title">
        <h4><i class="icon-dashboard"></i>   Distribución por días de Vencimiento </h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
        </span>
    </div>
    <div class="widget-body">
        <?php
        $this->Widget('ext.highcharts.HighchartsWidget', array(
            'scripts' => array(
                'modules/exporting', // adds Exporting button/menu to chart
            ),
            'options' => $columnVencimiento
        ));
        ?>
    </div>
</div>