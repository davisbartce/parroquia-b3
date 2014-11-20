<?php
/** @var BautizoController $this */
/** @var Bautizo $model */
/** @var AweActiveForm $form */
Util::tsRegisterAssetJs('_form.js');
?>
<aside class="right-side">

    <section class="content-header">
        <h1>
            <!--<small>-->
            <i class="fa fa-child"></i> Bautizo            <!--</small>-->
        </h1>
    </section>

    <?php
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'type' => 'horizontal',
        'id' => 'bautizo-form',
        'enableAjaxValidation' => true,
        'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
        'enableClientValidation' => false,
    ));
    ?>
    <!--<div class="row">-->

    <div class="col-lg-7   col-sm-7  ">

        <br>
        <div class="panel panel-informacion">
            <div class="panel-heading">
                <h3 class="panel-title" style="display: inline-block"><?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update'); ?></h3> 
                <a href="#" id="popover2"  entidad="Categoria" data-original-title="" title="" class="pop add-btn btn btn-danger pull-right" style="display: inline-block">
                    <i class="fa fa-plus-circle"></i>
                    <i class="fa fa-user"></i>
                </a>
            </div>

            <div class="panel-body">





                <!--<div class="form-group">-->
                    <!--<label class="col-sm-3 control-label" for="Bautizo_persona_id">Persona <span class="required">*</span></label>-->
                <!--<div class=" col-sm-9">-->
                <!--<div class="input-group">-->
                    <!--<span class="input-group-addon"><a href="#" id="popover2" class="pop" entidad="Categoria" data-original-title="" title=""><i id="prependSpin" class="fa fa-plus"></i></a></span>-->

                <?php
//                                $htmlOptions = array('class' => "form-control");
                if ($model->persona_id) {
                    $model_persona = Persona::model()->findByPk($model->persona_id);
                    $htmlOptions = array_merge($htmlOptions, array(
                        'selected-text' => $model_persona->nombres . ' ' . $model_persona->apellidos . ' ' . $model_persona->fecha_nacimiento
                    ));
                }
                echo $form->textFieldGroup($model, 'persona_id', array(
                    'wrapperHtmlOptions' => array(
//					'class' => 'col-sm-5',
                    ),
//                    'prepend' => '<a href="#" id="popover2" class="pop" entidad="Categoria" data-original-title="" title=""><i id="prependSpin" class="fa fa-plus"></i></a>'
                ));
                ?> 
                            <!--<span class="input-group-addon"><a href="#" id="popover2" class="pop" entidad="Categoria" data-original-title="" title=""><i id="prependSpin" class="fa fa-spinner fa-spin"></i></a></span>-->
                            <!--<span class="input-group-addon">.00</span>-->

                <!--</div>-->
                <?php echo $form->error($model, 'persona_id', array('class' => 'help-block error')); ?>
                <!--</div>-->

                <!--</div>-->



                <?php // echo $form->datePickerGroup($model, 'fecha_bautizo') ?>



                <?php
                echo $form->datePickerGroup(
                        $model, 'fecha_bautizo', array(
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


                <?php echo $form->textFieldGroup($model, 'iglesia', array('maxlength' => 60)) ?>

                <?php
                // echo $form->textFieldGroup($model, 'padre_parroquia_id') 
// var_dump(CHtml::listData(Padre::model()->findAll(), 'id', 'nombres'));
// die();
                ?>



                <?php
                echo $form->dropDownListGroup(
                        $model, 'padre_parroquia_id', array(
                    'wrapperHtmlOptions' => array(
                        'class' => '',
                    ),
                    'widgetOptions' => array(
                        'data' => (CHtml::listData(Padre::model()->findAll(), 'id', 'nombres')),
//                        'empty' => 'seleccione',
                        'htmlOptions' => array(),
                    )
                        )
                );
                ?>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="Bautizo_papa_id">Papa <span ></span></label>
                    <div class=" col-sm-9">
                        <!--<div class="input-group">-->
                        <?php
                        $htmlOptions = array('class' => "form-control");
                        if ($model->papa_id) {
                            $modelPapa = Persona::model()->findByPk($model->papa_id);
//                            var_dump($modelPapa);
//                            die();
                            $htmlOptions = array_merge($htmlOptions, array(
                                'selected-text' => $modelPapa->nombres . ' ' . $modelPapa->apellidos . ' ' . $modelPapa->fecha_nacimiento
                            ));
                        }
                        echo $form->hiddenField($model, 'papa_id', $htmlOptions);
                        ?> 
                            <!--<span class="input-group-addon"><a href="#" id="popover2" class="pop" entidad="Categoria" data-original-title="" title=""><i id="prependSpin" class="fa fa-spinner fa-spin"></i></a></span>-->
                            <!--<span class="input-group-addon"><a href="#" id="popover3"  class="pop" entidad="Categoria" data-original-title="" title=""><i id="prependSpin" class="fa fa-plus"></i></a></span>-->
                            <!--<span class="input-group-addon">.00</span>-->

                    </div>
                    <?php echo $form->error($model, 'papa_id', array('class' => 'help-block error')); ?>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="Bautizo_mama_id">Mama <span></span></label>
                    <div class=" col-sm-9">
                        <!--<div class="input-group">-->
                        <?php
                        $htmlOptions = array('class' => "form-control");
                        if ($model->mama_id) {
                            $modelMama = Persona::model()->findByPk($model->mama_id);
                            $htmlOptions = array_merge($htmlOptions, array(
                                'selected-text' => $modelMama->nombres . ' ' . $modelMama->apellidos . ' ' . $modelMama->fecha_nacimiento
                            ));
                        }
                        echo $form->hiddenField($model, 'mama_id', $htmlOptions);
                        ?> 
                            <!--<span class="input-group-addon"><a href="#" id="popover2" class="pop" entidad="Categoria" data-original-title="" title=""><i id="prependSpin" class="fa fa-spinner fa-spin"></i></a></span>-->
                            <!--<span class="input-group-addon"><a href="#" id="popover3"  class="pop" entidad="Categoria" data-original-title="" title=""><i id="prependSpin" class="fa fa-plus"></i></a></span>-->
                            <!--<span class="input-group-addon">.00</span>-->

                    </div>
                    <?php echo $form->error($model, 'mama_id', array('class' => 'help-block error')); ?>
                </div>


                <?php // echo $form->textFieldGroup($model, 'mama_id')  ?>

                <?php echo $form->textFieldGroup($model, 'feligreses_de') ?>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="Bautizo_padrino_id">Padrino <span></span></label>
                    <div class=" col-sm-9">
                        <!--<div class="input-group">-->
                        <?php
                        $htmlOptions = array('class' => "form-control");
                        if ($model->padrino_id) {
                            $modelPadrino = Persona::model()->findByPk($model->padrino_id);
                            $htmlOptions = array_merge($htmlOptions, array(
                                'selected-text' => $modelPadrino->nombres . ' ' . $modelPadrino->apellidos . ' ' . $modelPadrino->fecha_nacimiento
                            ));
                        }
                        echo $form->hiddenField($model, 'padrino_id', $htmlOptions);
                        ?> 

                    </div>
                    <?php echo $form->error($model, 'padrino_id', array('class' => 'help-block error')); ?>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="Bautizo_madrina_id">Madrina <span></span></label>
                    <div class=" col-sm-9">
                        <!--<div class="input-group">-->
                        <?php
                        $htmlOptions = array('class' => "form-control");
                        if ($model->madrina_id) {
                            $modelMadrina = Persona::model()->findByPk($model->madrina_id);
                            $htmlOptions = array_merge($htmlOptions, array(
                                'selected-text' => $modelMadrina->nombres . ' ' . $modelMadrina->apellidos . ' ' . $modelMadrina->fecha_nacimiento
                            ));
                        }
                        echo $form->hiddenField($model, 'madrina_id', $htmlOptions);
                        ?> 

                    </div>
                    <?php echo $form->error($model, 'madrina_id', array('class' => 'help-block error')); ?>
                </div>

                <?php // echo $form->textFieldGroup($model, 'padrino_id')  ?>

                <?php // echo $form->textFieldGroup($model, 'madrina_id')  ?>

                <div class="form-group">
                    <div class="col-lg-5 col-lg-offset-2">

                        <button id="btn_save2" class="btn btn-success ladda-button" form-id="#bautizo-form"
                                data-style="expand-right">
                            <span class="ladda-label">Registrar</span>
                        </button>
                        <?php
//                        $this->widget('booster.widgets.TbButton', array(
//                            'buttonType' => 'submit',
//                            'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
//                        ));
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
    <div class="col-lg-5  col-sm-5   ">

        <br>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Campos del Libro</h3>
            </div>
            <div class="panel-body">





                <?php
                echo $form->dropDownListGroup(
                        $model, 'tomo_id', array(
                    'wrapperHtmlOptions' => array(
                        'class' => '',
                    ),
                    'widgetOptions' => array(
                        'data' => CHtml::listData(Libro::model()->findAll(), 'id', 'tomo'),
//                                    'empty'=>'seleccione',
                        'htmlOptions' => array(),
                    )
                        )
                );
                ?>

                <?php // echo $form->textFieldGroup($model, 'tomo_id') ?>

                <?php echo $form->textFieldGroup($model, 'pagina') ?>

                <?php echo $form->textFieldGroup($model, 'numero') ?>

                <?php echo $form->textFieldGroup($model, 'nota', array('maxlength' => 150)) ?>


            </div>
        </div>
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Campos RC</h3>
            </div>
            <div class="panel-body">

                <?php // echo $form->textFieldGroup($model, 'rc_año', array('maxlength' => 4)) ?>
                <?php
                echo $form->datePickerGroup(
                        $model, 'rc_año', array(
                    'widgetOptions' => array(
                        'options' => array(
                            'format' => 'yyyy',
                            'startView' => 2,
                            'minViewMode' => 2,
                            'autoclose' => true
                        ),
                    ),
                    'wrapperHtmlOptions' => array(
//					'class' => 'col-sm-7 col-lg-7',
//                        'readonly' => 'readonly',
                    'class'=>'hasDatepicker'
                    ),
//				'hint' => 'Click inside! This is a super cool date field.',
                    'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                        )
                );
                ?>

                <?php echo $form->textFieldGroup($model, 'rc_tomo', array('maxlength' => 20)) ?>

                <?php echo $form->textFieldGroup($model, 'rc_folio') ?>

                <?php echo $form->textFieldGroup($model, 'rc_acta') ?>


                <?php
                echo $form->datePickerGroup(
                        $model, 'rc_fecha', array(
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


                <?php // echo $form->datePickerGroup($model, 'rc_fecha', array('prepend' => '<i class="icon-calendar"></i>')) ?>
            </div>
        </div>
    </div>
    <!--</div>-->



    <?php $this->endWidget(); ?>
    <div class="hide">
        <div id="popover-head-Persona" class="hide popover-head">Nueva Persona</div>
        <div id="popover-content-Persona" class="popover-content popover-style">

        </div>
    </div>




</aside>