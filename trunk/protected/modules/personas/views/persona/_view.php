<?php
/** @var PersonaController $this */
/** @var Persona $data */
?>
<div class="view">
                    
        <?php if (!empty($data->documento)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('documento')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->documento); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->nombres)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombres); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->apellidos)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->apellidos); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fecha_nacimiento)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha_nacimiento, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha_nacimiento)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->lugar_nacimiento)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('lugar_nacimiento')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->lugar_nacimiento); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>