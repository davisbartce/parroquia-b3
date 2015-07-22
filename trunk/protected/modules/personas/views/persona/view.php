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

            <div class="box box-warning">
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
                                <span class="info-box-icon bg-warning"><i class="fa fa-book"></i></span>
                            </div>



                            <div class="col-sm-9">



                                <?php
//                                        var_dump($model->confirmaciones->padre);
//                                        die();
                                $this->widget('booster.widgets.TbDetailView', array(
                                    'data' => $model->confirmaciones,
                                    'attributes' => array(
                                        'iglesia',
//                                        'padre_parroquia_id',
//                                        array(
//                                            'name' => 'padre_parroquia_id',
//                                            'value' => ($model->confirmaciones->padre->getNombre_completo()),
//                                            'type' => 'html',
//                                        ),
                                        array(
                                            'name' => 'padre_parroquia_id',
                                            'value' => ($model->confirmaciones->padre ? $model->confirmaciones->padre->getNombre_completo() : ""),
                                            'type' => 'html',
                                        ),
                                        'fecha_confirmacion',
                                        'feligreses_de',
                                        array(
                                            'name' => 'padrino_id',
                                            'value' => ($model->confirmaciones->padrino !== null) ? $model->confirmaciones->padrino->campo_completo : null,
                                            'type' => 'html',
                                        ),
                                        array(
                                            'name' => 'madrina_id',
                                            'value' => ($model->confirmaciones->madrina !== null) ? $model->confirmaciones->madrina->campo_completo : null,
                                            'type' => 'html',
                                        ),
//                                        'tomo_id',
                                        array(
                                            'name' => 'tomo_id',
                                            'value' => ($model->confirmaciones->libro !== null) ? $model->confirmaciones->libro->tomo : null,
                                            'type' => 'html',
                                        ),
                                        array(
                                            'name' => 'Año',
                                            'value' => ($model->confirmaciones->libro !== null) ? $model->confirmaciones->libro->ano : null,
                                            'type' => 'html',
                                        ),
                                        'pagina',
                                        'numero',
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
                            <span class="info-box-icon bg-yellow"><i class="fa fa-book"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">NO TIENE REGISTRADO CONFIRMACIÓN</span>

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

                    <?php // die('murio');    ?>
                    <?php if ($model->bautizos) : ?>
                        <div class="row">
                            <div class="col-sm-2">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-child"></i></span>
                            </div>



                            <div class="col-sm-10">



                                <?php
//                                        var_dump($model->bautizos->libro);
//                                        die();
                                $this->widget('booster.widgets.TbDetailView', array(
                                    'data' => $model->bautizos,
                                    'attributes' => array(
                                        'iglesia',
                                        array(
                                            'name' => 'padre_parroquia_id',
                                            'value' => ($model->bautizos->padre ? $model->bautizos->padre->getNombre_completo() : ""),
                                            'type' => 'html',
                                        ),
                                        'fecha_bautizo',
                                        array(
                                            'name' => 'padrino_id',
                                            'value' => ($model->bautizos->padrino !== null) ? $model->bautizos->padrino->campo_completo : null,
                                            'type' => 'html',
                                        ),
                                        array(
                                            'name' => 'madrina_id',
                                            'value' => ($model->bautizos->madrina !== null) ? $model->bautizos->madrina->campo_completo : null,
                                            'type' => 'html',
                                        ),
                                        array(
                                            'name' => 'tomo_id',
                                            'value' => ($model->bautizos->libro !== null) ? $model->bautizos->libro->tomo : null,
                                            'type' => 'html',
                                        ),
//                                        array(
//                                            'name' => 'Año',
//                                            'value' => ($model->bautizos->libro !== null) ? $model->bautizos->libro->ano : null,
//                                            'type' => 'html',
//                                        ),
                                        array(
                                            'name' => 'Año',
                                            'value' => ($model->bautizos->libro !== null) ? $model->bautizos->libro->ano : null,
                                            'type' => 'html',
                                        ),
                                        'pagina',
                                        'numero',
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

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Matrimonio</h3>
                    <div class="box-tools pull-right">
                        <!--<div class="label bg-aqua">Label</div>-->
                    </div>
                </div>
                <div class="box-body">

                    <?php // die('murio');    ?>

                    <?php if ($model->matrimoniosNovio || $model->matrimoniosNovia) : ?>

                        <?php
                        $matrimonio = $model->matrimoniosNovio;
                        if ($matrimonio) {
                            $matrimonios = $matrimonio ;
                        } else {
                            $matrimonios= $model->matrimoniosNovia;
                        }
                        ?>
                        <div class="row">
                            <div class="col-sm-2">
                                <span class="info-box-icon bg-green"><i class="fa fa-slideshare"></i></span>
                            </div>



                            <div class="col-sm-10">


    <?php
//                                        var_dump($matrimonios);
//                                        die();
    $this->widget('booster.widgets.TbDetailView', array(
        'data' => $matrimonios,
        'attributes' => array(
            'iglesia',
            array(
                'name' => 'padre_parroquia_id',
                'value' => ($matrimonios->padre ? $matrimonios->padre->getNombre_completo() : ""),
                'type' => 'html',
            ),
            'fecha_matrimonio',
            array(
                'name' => 'tomo_id',
                'value' => ($matrimonios->libro !== null) ? $matrimonios->libro->tomo : null,
                'type' => 'html',
            ),
            array(
                'name' => 'Año',
                'value' => ($matrimonios->libro !== null) ? $matrimonios->libro->ano : null,
                'type' => 'html',
            ),
            'pagina',
            'numero',
            array(
                'name' => 'novio_id',
                'value' => $matrimonios->novio->nombres . ' ' . $matrimonios->novio->apellidos
            ),
            array(
                'name' => 'novia_id',
                'value' => $matrimonios->novia->nombres . ' ' . $matrimonios->novia->apellidos
            ),
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
                            <span class="info-box-icon bg-green"><i class="fa fa-slideshare"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">NO TIENE REGISTRADO MATRIMONIO</span>

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