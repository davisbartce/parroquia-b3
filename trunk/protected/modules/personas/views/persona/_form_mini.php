<?php
Yii::app()->clientScript->scriptMap['jquery.js'] = false;
/** @var PersonaController $this */
/** @var Persona $model */
/** @var AweActiveForm $formPersonaPersonaPersonaPersona */
Util::tsRegisterAssetJs('_form_mini.js');
?>


    <?php
    $formPersona = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'type' => 'horizontal',
        'id' => 'persona-form',
        'enableAjaxValidation' => true,
        'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => false,),
        'enableClientValidation' => false,
    ));
    ?>
    <div class="col-lg-12 col-sm-12">

        <br>
        <!--<div class="panel panel-info">-->
<!--            <div class="panel-heading">
                <h3 class="panel-title"><?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . Persona::label(1); ?></h3>
            </div>-->
            <!--<div class="panel-body">-->



            

                <?php echo $formPersona->textFieldGroup($model, 'documento', array('maxlength' => 20,
                    'wrapperHtmlOptions' => array(
					'class' => 'input-popover',
                    ))) ?>

                <?php echo $formPersona->textFieldGroup($model, 'nombres', array(
                    'maxlength' => 60,
                    'wrapperHtmlOptions' => array(
					'class' => 'input-popover ',
                    ),)) ?>

                <?php echo $formPersona->textFieldGroup($model, 'apellidos', array(
                    'maxlength' => 60,
                    'wrapperHtmlOptions' => array(
					'class' => 'input-popover',
                    ),
                    )) ?>

                <?php // echo $formPersonaPersonaPersonaPersona->datePickerGroup($model, 'fecha_nacimiento', array('prepend' => '<i class="icon-calendar"></i>')) ?>
                <?php
                echo $formPersona->datePickerGroup(
                        $model, 'fecha_nacimiento', array(
                    'widgetOptions' => array(
                        'options' => array(
                            'format' => 'dd/mm/yyyy',
                            'autoclose' => true
                        ),
                    ),
                    'wrapperHtmlOptions' => array(
					'class' => 'date-popover input-popover',
                    ),
//				'hint' => 'Click inside! This is a super cool date field.',
                    'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                        )
                );
                ?>


                <?php echo $formPersona->textFieldGroup($model, 'lugar_nacimiento', array('maxlength' => 60,'wrapperHtmlOptions' => array(
					'class' => 'input-popover',
                    ),)) ?>
              <?php echo $formPersona->dropDownListGroup($model, 'estado_civil',array( 'wrapperHtmlOptions' => array('class' => 'input-popover',),'widgetOptions' => array('data' => array('SOLTERO(A)' => 'SOLTERO(A)','CASADO(A)' => 'CASADO(A)','DIVORCIADO(A)' => 'DIVORCIADO(A)','VIUDO(A)' => 'VIUDO(A)',),'htmlOptions' => array(),) )) ?>
            
            
            <!--</div>                                <div class="form-group">-->
                <div class="well-popover">
                    <button id="btn_save_persona" class="btn btn-success ladda-button btn-xs btn_save_persona" form-id="#persona-form"
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
//                         'wrapperHtmlOptions' => array(
//					'class' => 'btn-xs',
//                    ),
                        'htmlOptions' => array('onclick' => 'js:cerrarpopover();',
                            'class' => 'btn-xs',
                            )
                    ));
                    ?>

                </div>
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
</div>
<?php $this->endWidget(); ?>
<!--
<a id="redireccionar-admin" class="btn" href="< ?php echo Yii::app()->createUrl('personas/persona/admin') ?>"><i
         class="fa fa-plus"></i>&nbsp; Crear 
    </a>-->