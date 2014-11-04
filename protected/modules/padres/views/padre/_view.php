<?php
/** @var PadreController $this */
/** @var Padre $data */
?>
<div class="view">
                    
        <?php if (!empty($data->Nombres)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Nombres')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Nombres); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Apellidos)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Apellidos')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Apellidos); ?>
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
    </div>