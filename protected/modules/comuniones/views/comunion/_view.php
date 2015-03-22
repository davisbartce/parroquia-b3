<?php
/** @var ComunionController $this */
/** @var Comunion $data */
?>
<div class="view">
                    
        <?php if (!empty($data->persona_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('persona_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->persona_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fecha_comunion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_comunion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha_comunion, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha_comunion)); ?>
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
                
        <?php if (!empty($data->papa_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('papa_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->papa_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->mama_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('mama_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->mama_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->feligreses_de)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('feligreses_de')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->feligreses_de); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->padrino_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('padrino_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->padrino_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->madrina_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('madrina_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->madrina_id); ?>
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
                
        <?php if (!empty($data->nota)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nota')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nota); ?>
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