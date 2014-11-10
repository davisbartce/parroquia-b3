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
        'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => false,),
        'enableClientValidation' => false,
    ));
    ?>
    <div class="col-lg-7  col-sm-7  ">

        <br>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update'); ?></h3>
            </div>
            <div class="panel-body">





                <?php // echo $form->textFieldGroup($model, 'persona_id') ?>
                
                <?php 
//                echo $form->select2Group(
//			$model,
//			'select2',
//			array(
//				'wrapperHtmlOptions' => array(
//					'class' => 'col-sm-5',
//				),
//				'widgetOptions' => array(
//					'asDropDownList' => false,
//					'options' => array(
//						'tags' => array('clever', 'is', 'better', 'clevertech'),
//						'placeholder' => 'type clever, or is, or just type!',
//						/* 'width' => '40%', */
//						'tokenSeparators' => array(',', ' ')
//					)
//				)
//			)
//		);
                ?>
                
                <?php
                echo $form->select2Group($model, 'persona_id', array('wrapperHtmlOptions' =>
                    array('class' => 'col-lg-7  col-sm-7',), "append" => '<a href="#" class="rss"><i class="fa fa-plus"></i></a>', 'widgetOptions' => array('data' => array('' => ' -- Seleccione -- ') + CHtml::listData(Persona::model()->findAll(), 'id', Persona::representingColumn()))));


//                echo CHtml::endForm();
//                $this->widget(
//                        'booster.widgets.TbButton', array(
//                    'label' => '+',
//                    'htmlOptions' => array(
//                        'onclick' => 'js:$.ajax({
//                url: "/",
//                type: "POST",
//                data: (function () {
//                    var select = $("#issue-574-checker-select");
//                    var result = {};
//                    result[select.attr("name")] = select.val();
//                    return result;
//                })() // have to use self-evaluating function here
//            });'
//                    )
//                        )
//                );
                ?>

                <?php echo $form->datePickerGroup($model, 'fecha_bautizo') ?>

                <?php echo $form->textFieldGroup($model, 'iglesia', array('maxlength' => 60)) ?>

                <?php echo $form->textFieldGroup($model, 'padre_parroquia_id') ?>

                <?php echo $form->textFieldGroup($model, 'papa_id') ?>

                <?php echo $form->textFieldGroup($model, 'mama_id') ?>

                <?php echo $form->textFieldGroup($model, 'feligreses_de') ?>

                <?php echo $form->textFieldGroup($model, 'padrino_id') ?>

                <?php echo $form->textFieldGroup($model, 'madrina_id') ?>

                <div class="form-group">
                    <div class="col-lg-5 col-lg-offset-2">

                        <button id="btn_save" class="btn btn-success ladda-button" form-id="#bautizo-form"
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







                <?php echo $form->textFieldGroup($model, 'tomo_id') ?>

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









                <?php echo $form->textFieldGroup($model, 'rc_año', array('maxlength' => 4)) ?>

                <?php echo $form->textFieldGroup($model, 'rc_tomo', array('maxlength' => 20)) ?>

                <?php echo $form->textFieldGroup($model, 'rc_folio') ?>

                <?php echo $form->textFieldGroup($model, 'rc_acta') ?>

                <?php echo $form->datePickerGroup($model, 'rc_fecha', array('prepend' => '<i class="icon-calendar"></i>')) ?>
            </div>
        </div>
    </div>


    <?php $this->endWidget(); ?>


</aside>