<?php
/** @var PersonaController $this */
/** @var Persona $model */
?>

<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
              <!--<small>-->
            <i class="fa fa-user"></i>  <?php echo Yii::t('AweCrud.app', 'View'); ?><!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
    </section>
    <br>
    <div class="col-lg-12   col-sm-12 ">
        <div class="alert alert-info alert-dismissable">
            <i class="fa fa-info"></i>
            <!--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>-->
            <b><?php echo $model->campo_completo ?></b>
        </div>
        <div class="col-lg-5  col-sm-5">

            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Información</h3>
                    <div class="box-tools pull-right">
                        <!--<div class="label bg-aqua">Label</div>-->
                    </div>
                </div>
                <div class="box-body">
                    <?php
                    $this->widget('booster.widgets.TbDetailView', array(
                        'data' => $model,
                        'attributes' => array(
                            'documento',
                            'nombres',
                            'apellidos',
                            'fecha_nacimiento',
                            'lugar_nacimiento',
                        ),
                    ));
                    ?>

                </div><!-- /.box-body -->

                <!--                                <div class="box-footer">
                                                    <code>.box-footer</code>
                                                </div> /.box-footer-->
            </div>
        </div>
        <div class="col-lg-7  col-sm-7">

            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Bautizos</h3>
                    <div class="box-tools pull-right">
                        <!--<div class="label bg-aqua">Label</div>-->
                    </div>
                </div>
                <div class="box-body">
                                            <?php // die('murio'); ?>
<?php if($model->bautizos) :?>
                    <?php
                    
//                                        var_dump($model->bautizos);
//                                        die();
                    $this->widget('booster.widgets.TbDetailView', array(
                        'data' => $model->bautizos,
                        'attributes' => array(
                            'iglesia',
                            'padre_parroquia_id',
                            'apellidos',
                            'fecha_nacimiento',
                            'lugar_nacimiento',
                        ),
                    ));
                    ?>
                    <?php endif;?>

                </div><!-- /.box-body -->
                <!--                                <div class="box-footer">
                                                    <code>.box-footer</code>
                                                </div> /.box-footer-->
            </div>
        </div>


    </div>
</aside>