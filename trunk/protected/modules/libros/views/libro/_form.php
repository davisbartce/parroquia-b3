<?php
/** @var LibroController $this */
/** @var Libro $model */
/** @var AweActiveForm $form */
?>
<aside class="right-side">

    <section class="content-header">
        <h1>
            <!--<small>-->
            Libro            <!--</small>-->
        </h1>
    </section>
    
     <?php
 
                $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                'type' => 'horizontal',
                'id' => 'libro-form',
                'enableAjaxValidation' => true,
                'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
                'enableClientValidation' => false,
                ));
                ?>
    <div class="col-lg-12 col-sm-12">
        
        <br>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo Yii::t('AweCrud.app',$model->isNewRecord ? 'Create' : 'Update') . ' ' . Libro::label(1); ?></h3>
            </div>
            <div class="panel-body">

               
                
                
                    
                                                                <?php echo $form->textFieldGroup($model, 'ano', array('maxlength' => 4)) ?>
                                                        
                                                                <?php echo $form->textFieldGroup($model, 'tomo', array('maxlength' => 45)) ?>
                                                        
                                                                <?php echo $form->dropDownListGroup($model, 'tipo',array( 'wrapperHtmlOptions' => array('class' => 'col-sm-12',),'widgetOptions' => array('data' => array('BAUTIZOS' => 'BAUTIZOS','MATRIMONIOS' => 'MATRIMONIOS','CONFIRMACIONES' => 'CONFIRMACIONES','PRIMERAS COMUNIONES' => 'PRIMERAS COMUNIONES',),'htmlOptions' => array(),) )) ?>
                                                                        </div>                                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                                                <?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
                        <?php $this->widget('booster.widgets.TbButton', array(
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
                 <?php $this->endWidget(); ?>
</aside>