<?php Yii::app()->clientScript->scriptMap['jquery.js'] = false; ?>
<div class="modal-dialog  ">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="exampleModalLabel">New message</h4>
        </div>
        <div class="modal-body">
            
                <?php
                $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                    'type' => 'horizontal',
                    'id' => 'persona-form',
                    'enableAjaxValidation' => true,
                    'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => false,),
                    'enableClientValidation' => false,
                ));
                ?>




<!--<div class="col-lg-12 col-sm-12">-->

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
                            <div class="">
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
                     <?php $this->endWidget(); ?>
                <!--</div>-->
               
        <!--</div>-->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send message</button>
        </div>
    </div>
</div>