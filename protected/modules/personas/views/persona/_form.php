<?php
/** @var PersonaController $this */
/** @var Persona $model */
/** @var AweActiveForm $form */
?>
<aside class="right-side">

    <section class="content-header">
        <h1>
            <!--<small>-->
            <i class="fa fa-user"></i>  Persona<!--            <div class="icon">
            <!--</small>-->
        </h1>
    </section>

    <?php
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'type' => 'horizontal',
        'id' => 'persona-form',
        'enableAjaxValidation' => true,
        'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
        'enableClientValidation' => false,
    ));
    ?>
    <div class="col-lg-12 col-sm-12">

        <br>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update'); ?></h3>
            </div>
            <div class="panel-body">





                <?php echo $form->textFieldGroup($model, 'documento', array('maxlength' => 20)) ?>

                <?php echo $form->textFieldGroup($model, 'nombres', array('maxlength' => 60)) ?>

                <?php echo $form->textFieldGroup($model, 'apellidos', array('maxlength' => 60)) ?>

                <?php echo $form->datePickerGroup($model, 'fecha_nacimiento', array('prepend' => '<i class="fa fa-calendar"></i>')) ?>
                <?php
//                $this->widget(
//                        'booster.widgets.TbDatePicker', array(
//                    'model' => $model,
//                    'attribute' => 'fecha_nacimiento',
//                    'wrapperHtmlOptions' => array(
//                        'options' => array(
////                        'language' => 'es',
//                            'format' => 'dd/mm/YYYY'
//                        )
//                    )
//                        )
//                );
                ?>

                <?php echo $form->textFieldGroup($model, 'lugar_nacimiento', array('maxlength' => 60)) ?>
            </div>                                <div class="form-group">
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

                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
</aside>