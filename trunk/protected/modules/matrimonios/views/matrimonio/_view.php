<?php
/** @var MatrimonioController $this */
/** @var Matrimonio $data */
?>
<div class="view">
                    
        <?php if (!empty($data->fecha_matrimonio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_matrimonio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha_matrimonio, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha_matrimonio)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->iglesia)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('iglesia')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->iglesia); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->padre_parroquia_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('padre_parroquia_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->padre_parroquia_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->novio_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('novio_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->novio_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->papa_novio_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('papa_novio_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->papa_novio_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->mama_novio_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('mama_novio_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->mama_novio_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->testigo_novio_1)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('testigo_novio_1')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->testigo_novio_1); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->testigo_novio_2)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('testigo_novio_2')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->testigo_novio_2); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->novia_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('novia_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->novia_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->papa_novia_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('papa_novia_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->papa_novia_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->mama_novia_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('mama_novia_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->mama_novia_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->testigo_novia_1)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('testigo_novia_1')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->testigo_novia_1); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->testigo_novia_2)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('testigo_novia_2')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->testigo_novia_2); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->tomo_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tomo_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tomo_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->pagina)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('pagina')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->pagina); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->numero)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->numero); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->rc_ano)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('rc_ano')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->rc_ano); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->rc_tomo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('rc_tomo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->rc_tomo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->rc_folio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('rc_folio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->rc_folio); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->rc_acta)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('rc_acta')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->rc_acta); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->rc_lugar)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('rc_lugar')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->rc_lugar); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->rc_fecha)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('rc_fecha')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->rc_fecha, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->rc_fecha)); ?>
                            </div>
        </div>

        <?php endif; ?>
    </div>