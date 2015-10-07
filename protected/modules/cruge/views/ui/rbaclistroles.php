<?php
$this->pageTitle = Yii::t('app', 'Roles y Asignaciones');
?>



<br/>
    <div class="panel panel-info">
       <div class="panel-heading">
        <h4><i class="fa fa-key"></i> <?php echo ucwords(CrugeTranslator::t("roles"));?></h4>
     </div>
           <div class="panel-body">
        <div class="row">
            <div class='col-sm-12'>
            <?php echo CHtml::link('<i class=" fa fa-plus icon-white"></i> '.CrugeTranslator::t("Crear Nuevo Rol")
                    ,Yii::app()->user->ui->getRbacAuthItemCreateUrl(CAuthItem::TYPE_ROLE),
                    array('class'=>'btn btn-success pull-right'));?>
            </div>
        </div>
        
        <?php $this->renderPartial('_listauthitems',array('dataProvider'=>$dataProvider),false);?>
    </div>
</div>