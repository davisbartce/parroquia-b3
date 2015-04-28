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

            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Información  </h3> 
                    <div class="box-tools pull-right">
                        <!--<div class="label bg-aqua">Label</div>-->
                        <i class="ion-ios-contact-outline user-icon-32" ></i>
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
            
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Confirmación</h3>
                    <div class="box-tools pull-right">
                        <!--<div class="label bg-aqua">Label</div>-->
                    </div>
                </div>
                <div class="box-body">

                    <?php // die('murio'); ?>
                    <?php if ($model->confirmaciones) : ?>
                        <div class="row">
                            <div class="col-sm-3">
                                <span class="info-box-icon bg-green"><i class="fa fa-slideshare"></i></span>
                            </div>



                            <div class="col-sm-9">



                                <?php
//                                        var_dump($model->bautizos);
//                                        die();
                                $this->widget('booster.widgets.TbDetailView', array(
                                    'data' => $model->confirmaciones,
                                    'attributes' => array(
                                        'iglesia',
                                        'padre_parroquia_id',
                                        'apellidos',
                                        'fecha_nacimiento',
                                        'lugar_nacimiento',
                                    ),
                                ));
                                ?>
                            </div>

                        </div>


                    <?php else : ?>
                        <!--                        <div class="info-box bg-yellow">
                                                    <span class="info-box-icon"><i class="ion ion-ios-body"></i></span>
                                                    <div class="info-box-content">
                        
                                                        <span class="info-box-number">NO TIENE REGISTRADO BUTIZO</span>
                        
                        
                                                    </div> /.info-box-content 
                                                </div>-->

                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-child"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">NO TIENE REGISTRADO CONFIRMACION</span>

                            </div><!-- /.info-box-content -->
                        </div>

                    <?php endif; ?>

                </div><!-- /.box-body -->
                <!--                                <div class="box-footer">
                                                    <code>.box-footer</code>
                                                </div> /.box-footer-->
            </div>
        </div>
        <div class="col-lg-7  col-sm-7">

            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Bautizo</h3>
                    <div class="box-tools pull-right">
                        <!--<div class="label bg-aqua">Label</div>-->
                    </div>
                </div>
                <div class="box-body">

                    <?php // die('murio'); ?>
                    <?php if ($model->bautizos) : ?>
                        <div class="row">
                            <div class="col-sm-2">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-child"></i></span>
                            </div>



                            <div class="col-sm-10">



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
                            </div>

                        </div>


                    <?php else : ?>
                        <!--                        <div class="info-box bg-yellow">
                                                    <span class="info-box-icon"><i class="ion ion-ios-body"></i></span>
                                                    <div class="info-box-content">
                        
                                                        <span class="info-box-number">NO TIENE REGISTRADO BUTIZO</span>
                        
                        
                                                    </div> /.info-box-content 
                                                </div>-->

                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-child"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">NO TIENE REGISTRADO BAUTIZO</span>

                            </div><!-- /.info-box-content -->
                        </div>

                    <?php endif; ?>

                </div><!-- /.box-body -->
                <!--                                <div class="box-footer">
                                                    <code>.box-footer</code>
                                                </div> /.box-footer-->
            </div>
        </div>


    </div>
</aside>