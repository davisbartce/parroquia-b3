<?php
/** @var AsistenciaController $this */
/** @var Asistencia $data */
?>
<div class="view">
                    
        <?php if (!empty($data->fecha)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->numero_asistentes)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('numero_asistentes')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->numero_asistentes); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->numero_comulgados)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('numero_comulgados')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->numero_comulgados); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>