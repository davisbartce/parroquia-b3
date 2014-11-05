<?php
/** @var PersonaController $this */
/** @var Persona $model */
/** @var AweActiveForm $form */
Util::tsRegisterAssetJs('_form.js');
?>
<aside class="right-side">

    <section class="content-header">
        <h1>
            <!--<small>-->
            Persona            <!--</small>-->
        </h1>
    </section>

    <?php
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'type' => 'horizontal',
        'id' => 'persona-form',
        'enableAjaxValidation' => true,
        'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => false,),
        'enableClientValidation' => false,
    ));
    ?>
    <div class="col-lg-12 col-sm-12">

        <br>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . Persona::label(1); ?></h3>
            </div>
            <div class="panel-body">





                <?php echo $form->textFieldGroup($model, 'documento', array('maxlength' => 20)) ?>

                <?php echo $form->textFieldGroup($model, 'nombres', array('maxlength' => 60)) ?>

                <?php echo $form->textFieldGroup($model, 'apellidos', array('maxlength' => 60)) ?>

                <?php // echo $form->datePickerGroup($model, 'fecha_nacimiento', array('prepend' => '<i class="icon-calendar"></i>')) ?>
                <?php
                echo $form->datePickerGroup(
                        $model, 'fecha_nacimiento', array(
                    'widgetOptions' => array(
                        'options' => array(
                            'format' => 'dd/mm/yyyy',
                            'autoclose' => true
                        ),
                    ),
                    'wrapperHtmlOptions' => array(
//					'class' => 'col-sm-12',
                    ),
//				'hint' => 'Click inside! This is a super cool date field.',
                    'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                        )
                );
                ?>


                <?php echo $form->textFieldGroup($model, 'lugar_nacimiento', array('maxlength' => 60)) ?>
            </div>                                <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button id="btn_save" class="btn btn-success ladda-button" form-id="#persona-form"
                            data-style="expand-right">
                        <span class="ladda-label">Registrar</span>
                    </button>
                    <?php
//                    $this->widget('booster.widgets.TbButton', array(
//                        'buttonType' => 'submit',
//                        'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
//                    ));
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
<!--</div>-->
<?php $this->endWidget(); ?>
</aside>
<!--
<a id="redireccionar-admin" class="btn" href="< ?php echo Yii::app()->createUrl('personas/persona/admin') ?>"><i
         class="fa fa-plus"></i>&nbsp; Crear 
    </a>-->