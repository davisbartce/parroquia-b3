<?php
/** @var PadreController $this */
/** @var Padre $model */
?>
<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
              <!--<small>-->
            <i class="fa fa-male"></i>  <?php echo Yii::t('AweCrud.app', 'View'); ?><!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
    </section>

    <div class="col-lg-12   col-sm-12 ">

        <br>
        <!--<div class="panel panel-informacion">-->
        <!--<div class="panel-heading">-->
        <!--<h3 class="panel-title" style="display: inline-block"> Bautizo </h3>--> 
        <!--</div>-->

        <!--            <div class="panel-body">-->
        <div class="col-lg-12   col-sm-12 ">
            <div class="box box-solid box-primary">
                <div class="box-header">
                    <h3 class="box-title">Información del Padre</h3>
                    <!--                    <div class="box-tools pull-right no-print">
                                            <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                        </div>-->
                    <!--                        <div class="box-tools pull-right">
                                                <div class="label bg-aqua">Label</div>
                                            </div>-->
                </div>
                <div class="box-body">
                    <div class="">

<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'nombres',
        'apellidos',
        'fecha_nacimiento',
    ),
));
?>

                    </div><!-- /.box-body -->

                </div>
                <!--                 <div class="overlay"></div>
                                    <div class="loading-img"></div>-->
            </div>





        </div>
    </div>
    <!--</div>-->




</aside>