<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app()->name;
//Total de contactos
$contactosCount = Contacto::model()->getCountContactos();
//usuario operador 
$rolUser = Util::getFirstRolUser(Yii::app()->user->id);
//total cobranzas
$total_cobranzas = $rolUser == 'OPERADOR' ? Cobranza::model()->sumaTotalPagar(Yii::app()->user->id) : Cobranza::model()->sumaTotalPagar();
$total_cobranzas_no_vencido = $rolUser == 'OPERADOR' ? Cobranza::model()->sumaTotalNoVencidas(Yii::app()->user->id) : Cobranza::model()->sumaTotalNoVencidas();
$total_cobranzas_vencido = $rolUser == 'OPERADOR' ? Cobranza::model()->sumaTotalVencidas(Yii::app()->user->id) : Cobranza::model()->sumaTotalVencidas();
$total_cobranzas_compromiso_pago = $rolUser == 'OPERADOR' ? Cobranza::model()->sumaTotalCompromisoPago(Yii::app()->user->id) : Cobranza::model()->sumaTotalCompromisoPago();
$total_cobranzas_compromiso_recuperacion = $rolUser == 'OPERADOR' ? Cobranza::model()->sumaTotalRecuperacion(Yii::app()->user->id) : Cobranza::model()->sumaTotalRecuperacion();
?>
<!--<h1>Bienvenido al Demo de <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>-->
<?php if (Yii::app()->user->isSuperAdmin): ?>

    <div class="row-fluid">
        <div class="metro-nav">
            <div class="metro-nav-block nav-block-grey">
                <a href="<?php echo Yii::app()->createUrl('/cruge/ui/usermanagementadmin') ?>" data-original-title="">
                    <i class="icon-lock"></i>
                    <div class="info"><?php echo count(Yii::app()->user->um->listUsers()) ?></div>
                    <div class="status">Usuarios</div>
                </a>
            </div>

            <div class="metro-nav-block nav-block-green">
                <a href="<?php echo Yii::app()->createUrl('/crm/contacto/admin') ?>" data-original-title="">
                    <i class="icon-group"></i>
                    <div class="info"><?php echo Contacto::model()->activos()->count() ?></div>
                    <div class="status">Contactos</div>
                </a>
            </div>

            <div class="metro-nav-block nav-block-purple double">
                <a href="<?php echo Yii::app()->createUrl('/incidencias/incidencia/admin/filtro/receptadas') ?>" data-original-title="">
                    <i class="icon-fire-extinguisher"></i>
                    <div class="info"><?php echo Incidencia::model()->countIncidenciasReceptadas() ?></div>
                    <div class="status">Incidencias Receptadas</div>
                </a>
            </div>

            <div class="metro-nav-block nav-block-purple">
                <a href="<?php echo Yii::app()->createUrl('/incidencias/incidencia/admin/filtro/resueltas') ?>" data-original-title="">
                    <i class="icon-fire-extinguisher"></i>
                    <div class="info"><?php echo Incidencia::model()->countIncidenciasResueltas() ?></div>
                    <div class="status">Incidencias Resueltas</div>
                </a>
            </div>

            <div class="metro-nav-block nav-block-red">
                <a href="<?php echo Yii::app()->createUrl('/tareas/tarea/admin') ?>" data-original-title="">
                    <i class="icon-tasks"></i>
                    <div class="info"><?php echo Tarea::model()->activos()->noConcluidas()->count() ?></div>
                    <div class="status">Tareas</div>
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="row-fluid">
    <div class="metro-nav" id="metro-min">
        <div class="metro-nav-block nav-block-blue double">
            <a href="<?php echo Yii::app()->createUrl('/cobranzas/cobranza/admin/filtro/totalCobranza') ?>" data-original-title="">
                <i class="icon-money"></i>
                <div class="info"><?php echo '$' . ($total_cobranzas ? number_format($total_cobranzas, 2) : 0) ?></div>
                <div class="status">Total Cobranzas</div>
            </a>
        </div>

        <div class="metro-nav-block nav-block-orange">
            <a href="<?php echo Yii::app()->createUrl('/cobranzas/cobranza/admin/filtro/noVencidas') ?>" data-original-title="">
                <i class="icon-money"></i>
                <div class="info"><?php echo '$' . ($total_cobranzas_no_vencido ? number_format($total_cobranzas_no_vencido, 2) : 0) ?></div>
                <div class="status">Cobranzas No Vencidas</div>
            </a>
        </div>

        <div class="metro-nav-block nav-block-red">
            <a href="<?php echo Yii::app()->createUrl('/cobranzas/cobranza/admin/filtro/vencidas') ?>" data-original-title="">
                <i class="icon-money"></i>
                <div class="info"><?php echo '$' . ($total_cobranzas_vencido ? number_format($total_cobranzas_vencido, 2) : 0) ?></div>
                <div class="status">Cobranzas Vencidas</div>
            </a>
        </div>

        <div class="metro-nav-block nav-block-green">
            <a href="<?php echo Yii::app()->createUrl('/cobranzas/cobranza/admin/filtro/compromisoPago') ?>" data-original-title="">
                <i class="icon-money"></i>
                <div class="info"><?php echo '$' . ($total_cobranzas_compromiso_pago ? number_format($total_cobranzas_compromiso_pago, 2) : 0) ?></div>
                <div class="status">Promesa de Pago</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-redblack">
            <a href="<?php echo Yii::app()->createUrl('/cobranzas/cobranza/admin/filtro/recuperacion') ?>" data-original-title="">
                <i class="icon-money"></i>
                <div class="info"><?php echo '$ ' . ($total_cobranzas_compromiso_recuperacion ? round($total_cobranzas_compromiso_recuperacion, 2) : 0) ?></div>
                <div class="status">Recuperación</div>
            </a>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span7">
        <?php $this->renderPartial('portlets/_columnVencimiento', array('rolUser' => $rolUser)); ?>
        <?php $this->renderPartial('portlets/_incidenciaReporte') ?>
        <?php Util::checkAccess(array("action_tarea_admin")) ? $this->renderPartial('portlets/_tareas') : ''; ?>


    </div>
    <div class="span5">
        <?php $this->renderPartial('portlets/_cobranzaReporte', array('rolUser' => $rolUser)) ?>
    </div>
</div>



