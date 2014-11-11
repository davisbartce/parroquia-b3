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

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="Bautizo_persona_id">Persona <span class="required">*</span></label>
                    <div class=" col-sm-9">
                        <div class="input-group">
                            <?php
                            $htmlOptions = array('class' => "form-control");
                            if ($model->persona_id) {
                                $model_persona = Persona::model()->findByPk($model->persona_id);
                                $htmlOptions = array_merge($htmlOptions, array(
                                    'selected-text' => $model_persona->nombre
                                ));
                            }
                            echo $form->hiddenField($model, 'persona_id', $htmlOptions);
                            ?> 
                            <span class="input-group-addon"><a href="#" id="popover2" class="pop" entidad="Categoria" data-original-title="" title=""><i id="prependSpin" class="fa fa-spinner fa-spin"></i></a></span>
                            <!--<span class="input-group-addon">.00</span>-->
                            <?php echo $form->error($model, 'persona_id', array('class' => 'help-block error')); ?>
                        </div>
                    </div>

                </div>

                <?php
//                echo $form->select2Group($model, 'persona_id', array('wrapperHtmlOptions' => array('class' => '',),
//                    "append" => '<a href="#" class="rss"><i class="fa fa-plus"></i></a>',
//                    'widgetOptions' => array(
////                        'data' => array('' => ' -- Seleccione -- ') + CHtml::listData(Persona::model()->findAll(), 'id', Persona::representingColumn()),
//                        'options' => array(
////                            'initSelection' => ' js:function(element, callback) {if ($(element).val()) {var data = {id: element.val(), text: $(element).attr("selected-text")}; callback(data);  }                }',
//                            'ajax' => array(
//                                'url' => 'baseUrl + "producciones/produccionCategoria/ajaxlistProduccionCategorias"',
//                                'type' => "get",
//                                'dataType' => 'json',
//                                'data' => ' function(term, page) {return { search_value: term,};}',
//                                'results' => 'function(data, page) {return {results: data};}'
//                            )
//                        ),
////                        'Options' => array(
////                            'width' => '100%',
////                            'closeOnSelect' => false,
////                            'placeholder' => 'Seleccione un cliente',
////                            'allowClear' => false,
////                            'ajax' => array(
////                                'url' => Yii::app()->createUrl('proceso/cliente'),
////                                'dataType' => 'json',
////                                'data' => 'js:function(term,page) { return {q: term, page_limit: 10, page: page}; }',
////                                'results' => 'js:function(data,page) { return {results: data}; }',
////                            ),
////                        ),
//                )));
//
//
////                echo CHtml::endForm();
////                $this->widget(
////                        'booster.widgets.TbButton', array(
////                    'label' => '+',
////                    'htmlOptions' => array(
////                        'onclick' => 'js:$.ajax({
////                url: "/",
////                type: "POST",
////                data: (function () {
////                    var select = $("#issue-574-checker-select");
////                    var result = {};
////                    result[select.attr("name")] = select.val();
////                    return result;
////                })() // have to use self-evaluating function here
////            });'
////                    )
////                        )
////                );
                ?>

              <!--<input type="hidden" id="Bautizo_persona_id" style="width:300px" class="input-xlarge" />-->

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

    <div id="popover-head-Persona" class=" popover-head">Nueva Persona</div>
    <div id="popover-content-Persona" class=" popover-content popover-style">
      
    </div>


</aside>