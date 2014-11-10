<?php
/** @var LibroController $this */
/** @var Libro $data */
?>
<div class="view">
                    
        <?php if (!empty($data->ano)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->ano); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->tomo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tomo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tomo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->tipo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tipo); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>