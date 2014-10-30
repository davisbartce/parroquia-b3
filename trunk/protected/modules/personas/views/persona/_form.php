

<?php
/** @var PersonaController $this */
/** @var Persona $model */
/** @var AweActiveForm $form */
?>
<aside class="right-side">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . Persona::label(1); ?></h3>
            </div>
            <div class="panel-body">

                <?php
                $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                    'type' => 'horizontal',
                    'id' => 'persona-form',
                    'enableAjaxValidation' => true,
                    'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
                    'enableClientValidation' => false,
                ));
                ?>



                <?php echo $form->textFieldGroup($model, 'documento', array('maxlength' => 20)) ?>

                <?php echo $form->textFieldGroup($model, 'nombres', array('maxlength' => 60)) ?>

                <?php echo $form->textFieldGroup($model, 'apellidos', array('maxlength' => 60)) ?>
<?php var_dump('si'); ?>
                <?php
            echo $form->datePickerGroup(
                    $model, 'fecha_nacimiento', array(
                'widgetOptions' => array(
                    'options' => array(
                        'language' => 'es',
                        'format' => 'dd/mm/yyyy',
                    ),
                ),
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                    )
            );
            ?>

                <?php echo $form->textFieldGroup($model, 'lugar_nacimiento', array('maxlength' => 60)) ?>
            </div>                        <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <?php
                    $this->widget('booster.widgets.TbButton', array(
                        'buttonType' => 'submit',
                        'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
                    ));
                    ?>
                    <?php
                    $this->widget('booster.widgets.TbButton', array(
                        'label' => Yii::t('AweCrud.app', 'Cancel'),
                        'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
                    ));
                    ?>
<?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</aside>