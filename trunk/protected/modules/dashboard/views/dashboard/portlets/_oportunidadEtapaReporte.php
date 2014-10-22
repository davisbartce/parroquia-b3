<script src="http://code.highcharts.com/modules/funnel.js"></script>
 <?php $funnelreport = Oportunidad::model()->generateFunnel(); ?>
<?php if(!empty($funnelreport['series']['0']['data'])):?>
<div class="widget orange">
    <div class="widget-title">
        <h4><i class="icon-usd"></i> Embudo de ventas</h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <a href="javascript:;" class="icon-remove"></a>
        </span>
    </div>
    <div class="widget-body center" >
                <?php

        $this->Widget('ext.highcharts.HighchartsWidget', array(
            'options' => $funnelreport
                )
        );
        
        $valores=$funnelreport['series']['0']['data'];
        
        $suma=0;
        foreach ($valores as $valor)
        {
            $suma+=$valor['1'];
        }
        
        ?>
        <h2>
            TOTAL: $<?php echo $suma ?>
        </h2>
    </div>
</div>
<?php endif; ?>