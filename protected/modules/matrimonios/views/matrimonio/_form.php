<?php
/** @var MatrimonioController $this */
/** @var Matrimonio $model */
/** @var AweActiveForm $form */
Util::tsRegisterAssetJs('_form.js');
?>
<aside class="right-side">

    <section class="content-header">
        <h1>
            <!--<small>-->
            <i class="fa fa-slideshare"></i>   Matrimonio            <!--</small>-->
        </h1>
    </section>

    <?php
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'type' => 'horizontal',
        'id' => 'matrimonio-form',
        'enableAjaxValidation' => true,
        'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
        'enableClientValidation' => false,
    ));
    ?>
    <div class="col-lg-7   col-sm-7  ">

        <br>
        <div class="panel panel-informacion">
            <div class="panel-heading">
                <h3 class="panel-title"  style="display: inline-block"><?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . Matrimonio::label(1); ?></h3>
                <a href="#" id="popover2"  entidad="Categoria" data-original-title="" title="" class="pop add-btn btn btn-danger pull-right" style="display: inline-block">
                    <i class="fa fa-plus-circle"></i>
                    <i class="fa fa-user"></i>
                </a>
            </div>
            <div class="panel-body">





                <?php
                echo $form->datePickerGroup(
                        $model, 'fecha_matrimonio', array(
                    'widgetOptions' => array(
                        'options' => array(
                            'format' => 'dd/mm/yyyy',
                            'autoclose' => true
                        ),
                        'htmlOptions' => array(
                            'class' => 'hasDatepicker',
                            'readonly' => 'readonly',
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
                
                 <?php  if($model->isNewRecord){
                    $model->iglesia=Constants::INGLESIAPARROQUIA;
                } ?>

                <?php echo $form->textFieldGroup($model, 'iglesia', array('maxlength' => 60)) ?>


                <?php
                echo $form->dropDownListGroup(
                        $model, 'padre_parroquia_id', array(
                    'wrapperHtmlOptions' => array(
                        'class' => '',
                    ),
                    'widgetOptions' => array(
                        'data' => (CHtml::listData(Padre::model()->findAll(), 'id', 'campo_completo')),
//                        'empty' => 'seleccione',
                        'htmlOptions' => array(),
                    )
                        )
                );
                ?>



                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="box box-danger">
                            <div class="box-header">
                                <i class="fa fa-male"></i>
                                <h3 class="box-title">Novio</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">

                                <?php // echo $form->textFieldGroup($model, 'novio_id') ?>
                                <?php
                                $htmlOptions = array('class' => "form-control");
                                if ($model->novio_id) {
                                    $model_novio = Persona::model()->findByPk($model->novio_id);

                                    $htmlOptions = array_merge(
                                            $htmlOptions, array(
                                        'selected-text' => $model_novio->nombres . ' ' . $model_novio->apellidos . ' ' . $model_novio->fecha_nacimiento
                                            )
                                    );
                                }
                                echo $form->textFieldGroup($model, 'novio_id', array(
                                    'widgetOptions' => array(
                                        'htmlOptions' => $htmlOptions,
                                    ),
                                ));
                                ?> 

                                <?php // echo $form->textFieldGroup($model, 'papa_novio_id') ?>
                                
                                 <?php
                                $htmlOptions = array('class' => "form-control");
                                if ($model->papa_novio_id) {
                                    $model_novio_papa = Persona::model()->findByPk($model->papa_novio_id);

                                    $htmlOptions = array_merge(
                                            $htmlOptions, array(
                                        'selected-text' => $model_novio_papa->nombres . ' ' . $model_novio_papa->apellidos . ' ' . $model_novio_papa->fecha_nacimiento
                                            )
                                    );
                                }
                                echo $form->textFieldGroup($model, 'papa_novio_id', array(
                                    'widgetOptions' => array(
                                        'htmlOptions' => $htmlOptions,
                                    ),
                                ));
                                ?> 

                                <?php // echo $form->textFieldGroup($model, 'mama_novio_id') ?>
                                 <?php
                                $htmlOptions = array('class' => "form-control");
                                if ($model->mama_novio_id) {
                                    $model_novio_mama = Persona::model()->findByPk($model->mama_novio_id);

                                    $htmlOptions = array_merge(
                                            $htmlOptions, array(
                                        'selected-text' => $model_novio_mama->nombres . ' ' . $model_novio_mama->apellidos . ' ' . $model_novio_mama->fecha_nacimiento
                                            )
                                    );
                                }
                                echo $form->textFieldGroup($model, 'mama_novio_id', array(
                                    'widgetOptions' => array(
                                        'htmlOptions' => $htmlOptions,
                                    ),
                                ));
                                ?> 

                                <?php // echo $form->textFieldGroup($model, 'testigo_novio_1', array('maxlength' => 60)) ?>
                                 <?php
                                $htmlOptions = array('class' => "form-control");
                                if ($model->testigo_novio_1) {
                                    $model_novio_testigo1 = Persona::model()->findByPk($model->testigo_novio_1);

                                    $htmlOptions = array_merge(
                                            $htmlOptions, array(
                                        'selected-text' => $model_novio_testigo1->nombres . ' ' . $model_novio_testigo1->apellidos . ' ' . $model_novio_testigo1->fecha_nacimiento
                                            )
                                    );
                                }
                                echo $form->textFieldGroup($model, 'testigo_novio_1', array(
                                    'widgetOptions' => array(
                                        'htmlOptions' => $htmlOptions,
                                    ),
                                ));
                                ?> 

                                <?php // echo $form->textFieldGroup($model, 'testigo_novio_2', array('maxlength' => 60)) ?>
                                  <?php
                                $htmlOptions = array('class' => "form-control");
                                if ($model->testigo_novio_2) {
                                    $model_novio_testigo2 = Persona::model()->findByPk($model->testigo_novio_2);

                                    $htmlOptions = array_merge(
                                            $htmlOptions, array(
                                        'selected-text' => $model_novio_testigo2->nombres . ' ' . $model_novio_testigo2->apellidos . ' ' . $model_novio_testigo2->fecha_nacimiento
                                            )
                                    );
                                }
                                echo $form->textFieldGroup($model, 'testigo_novio_2', array(
                                    'widgetOptions' => array(
                                        'htmlOptions' => $htmlOptions,
                                    ),
                                ));
                                ?> 

                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <i class="fa fa-female"></i>
                                <h3 class="box-title">Novia</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">


                                <?php // echo $form->textFieldGroup($model, 'novia_id') ?>
                                <?php
                                $htmlOptions = array('class' => "form-control");
                                if ($model->novia_id) {
                                    $model_novia = Persona::model()->findByPk($model->novia_id);

                                    $htmlOptions = array_merge(
                                            $htmlOptions, array(
                                        'selected-text' => $model_novia->nombres . ' ' . $model_novia->apellidos . ' ' . $model_novia->fecha_nacimiento
                                            )
                                    );
                                }
                                echo $form->textFieldGroup($model, 'novia_id', array(
                                    'widgetOptions' => array(
                                        'htmlOptions' => $htmlOptions,
                                    ),
                                ));
                                ?> 

                                <?php // echo $form->textFieldGroup($model, 'papa_novia_id') ?>
                                <?php
                                $htmlOptions = array('class' => "form-control");
                                if ($model->papa_novia_id) {
                                    $model_novia_papa = Persona::model()->findByPk($model->papa_novia_id);

                                    $htmlOptions = array_merge(
                                            $htmlOptions, array(
                                        'selected-text' => $model_novia_papa->nombres . ' ' . $model_novia_papa->apellidos . ' ' . $model_novia_papa->fecha_nacimiento
                                            )
                                    );
                                }
                                echo $form->textFieldGroup($model, 'papa_novia_id', array(
                                    'widgetOptions' => array(
                                        'htmlOptions' => $htmlOptions,
                                    ),
                                ));
                                ?> 

                                <?php // echo $form->textFieldGroup($model, 'mama_novia_id') ?>
                                  <?php
                                $htmlOptions = array('class' => "form-control");
                                if ($model->mama_novia_id) {
                                    $model_novia_mama = Persona::model()->findByPk($model->mama_novia_id);

                                    $htmlOptions = array_merge(
                                            $htmlOptions, array(
                                        'selected-text' => $model_novia_mama->nombres . ' ' . $model_novia_mama->apellidos . ' ' . $model_novia_mama->fecha_nacimiento
                                            )
                                    );
                                }
                                echo $form->textFieldGroup($model, 'mama_novia_id', array(
                                    'widgetOptions' => array(
                                        'htmlOptions' => $htmlOptions,
                                    ),
                                ));
                                ?> 

                                <?php // echo $form->textFieldGroup($model, 'testigo_novia_1', array('maxlength' => 60)) ?>
                                 <?php
                                $htmlOptions = array('class' => "form-control");
                                if ($model->testigo_novia_1) {
                                    $model_novia_testigo1 = Persona::model()->findByPk($model->testigo_novia_1);

                                    $htmlOptions = array_merge(
                                            $htmlOptions, array(
                                        'selected-text' => $model_novia_testigo1->nombres . ' ' . $model_novia_testigo1->apellidos . ' ' . $model_novia_testigo1->fecha_nacimiento
                                            )
                                    );
                                }
                                echo $form->textFieldGroup($model, 'testigo_novia_1', array(
                                    'widgetOptions' => array(
                                        'htmlOptions' => $htmlOptions,
                                    ),
                                ));
                                ?> 

                                <?php // echo $form->textFieldGroup($model, 'testigo_novia_2', array('maxlength' => 60)) ?>
                                <?php
                                $htmlOptions = array('class' => "form-control");
                                if ($model->testigo_novia_2) {
                                    $model_novia_testigo2 = Persona::model()->findByPk($model->testigo_novia_2);

                                    $htmlOptions = array_merge(
                                            $htmlOptions, array(
                                        'selected-text' => $model_novia_testigo2->nombres . ' ' . $model_novia_testigo2->apellidos . ' ' . $model_novia_testigo2->fecha_nacimiento
                                            )
                                    );
                                }
                                echo $form->textFieldGroup($model, 'testigo_novia_2', array(
                                    'widgetOptions' => array(
                                        'htmlOptions' => $htmlOptions,
                                    ),
                                ));
                                ?> 

                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div>
                
                    <?php echo $form->textFieldGroup($model, 'acta_preparada_por', array('maxlength' => 50)) ?>






                <div class="form-group">
                    <div class="form-group">
                        <div class="col-lg-5 col-lg-offset-2">

                            <!--                        <button id="btn_save_bautizo" class="btn btn-success ladda-button" form-id="#bautizo-form"
                                                            data-style="expand-right">
                                                        <span class="ladda-label">Registrar</span>
                                                    </button>-->
                            <?php
                            $this->widget('booster.widgets.TbButton', array(
                                'buttonType' => 'submit',
                                'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Registrar') : Yii::t('AweCrud.app', 'Save'),
                                'context' => 'success',
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
                        'data' => CHtml::listData(Libro::model()->de_tipo(Libro::MATRIMONIOS)->findAll(), 'id', 'tomo', 'ano'),
//                                    'empty'=>'seleccione',
                        'htmlOptions' => array(),
                    )
                        )
                );
                ?>

                <?php // echo $form->textFieldGroup($model, 'tomo_id')  ?>

                <?php echo $form->textFieldGroup($model, 'pagina') ?>

                <?php echo $form->textFieldGroup($model, 'numero') ?>

                <?php // echo $form->textFieldGroup($model, 'nota', array('maxlength' => 150))  ?>


            </div>
        </div>
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Campos RC</h3>
            </div>
            <div class="panel-body">

                <?php // echo $form->textFieldGroup($model, 'rc_año', array('maxlength' => 4))   ?>
                <?php
                echo $form->datePickerGroup(
                        $model, 'rc_ano', array(
                    'widgetOptions' => array(
                        'options' => array(
                            'format' => 'yyyy',
                            'startView' => 2,
                            'minViewMode' => 2,
                            'autoclose' => true
                        ),
                        'htmlOptions' => array(
                            'class' => 'hasDatepicker',
                            'readonly' => 'readonly',
                        ),
                    ),
                    'wrapperHtmlOptions' => array(
//					'class' => 'col-sm-7 col-lg-7',
//                        'readonly' => 'readonly',
//                        'class' => 'hasDatepicker'
                    ),
//				'hint' => 'Click inside! This is a super cool date field.',
                    'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                        )
                );
                ?>

                <?php echo $form->textFieldGroup($model, 'rc_tomo', array('maxlength' => 20)) ?>

                <?php echo $form->textFieldGroup($model, 'rc_folio') ?>

                <?php echo $form->textFieldGroup($model, 'rc_acta') ?>

                <?php echo $form->textFieldGroup($model, 'rc_lugar', array('maxlength' => 60)) ?>

                <?php
                echo $form->datePickerGroup(
                        $model, 'rc_fecha', array(
                    'widgetOptions' => array(
                        'options' => array(
                            'format' => 'dd/mm/yyyy',
                            'autoclose' => true
                        ),
                        'htmlOptions' => array(
                            'class' => 'hasDatepicker',
                            'readonly' => 'readonly',
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


                <?php // echo $form->datePickerGroup($model, 'rc_fecha', array('prepend' => '<i class="icon-calendar"></i>'))   ?>
            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>
    <div class="hide">
        <div id="popover-head-Persona" class="hide popover-head">Nueva Persona</div>
        <div id="popover-content-Persona" class="popover-content popover-style">

        </div>
    </div>
</aside>