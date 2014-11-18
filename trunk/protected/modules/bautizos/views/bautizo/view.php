<?php
/** @var BautizoController $this */
/** @var Bautizo $model */
$this->menu = array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Bautizo::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => "<div>" . CHtml::image(Yii::app()->baseUrl . "/images/topbar/administrar.png") . "</div>" . Yii::t('AweCrud.app', 'Manage'), 'url' => array('admin')),
    array('label' => "<div>" . CHtml::image(Yii::app()->baseUrl . "/images/topbar/nuevo.png") . "</div>" . Yii::t('AweCrud.app', 'Create'), 'url' => array('create')),
        //array('label' => Yii::t('AweCrud.app', 'View'), 'icon' => 'eye-open', 'itemOptions'=>array('class'=>'active')),
        //array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
        //array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
);
?>
<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
              <!--<small>-->
            <i class="fa fa-child"></i>  <?php echo Yii::t('AweCrud.app', 'View'); ?><!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
    </section>
    <fieldset>

        <?php
        $this->widget('booster.widgets.TbDetailView', array(
            'data' => $model,
            'attributes' => array(
                'persona_id',
                'fecha_bautizo',
//        'iglesia',
//        'padre_parroquia_id',
//        'papa_id',
//        'mama_id',
//        'feligreses_de',
//        'padrino_id',
//        'madrina_id',
//        'tomo_id',
//        'pagina',
//        'numero',
//        'nota',
//        'rc_año',
//        'rc_tomo',
//        'rc_folio',
//        'rc_acta',
//        'rc_fecha',
            ),
        ));
        ?>
    </fieldset>
</aside>