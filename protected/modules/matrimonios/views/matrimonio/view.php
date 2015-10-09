<?php
/** @var MatrimonioController $this */
/** @var Matrimonio $model */
?>

<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
              <!--<small>-->
            <i class="fa fa-slideshare"></i>  <?php echo Yii::t('AweCrud.app', 'View'); ?><!--            <div class="icon">
                
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
        <div class="col-lg-7   col-sm-7 ">
            <div class="box box-solid box-primary">
                <div class="box-header">
                    <h3 class="box-title">Información del Matrimonio</h3>
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
//                                    'persona_id',
//                                array(
//                                    'name' => 'novio_id',
//                                    'value' => $model->novio->nombres . ' ' . $model->novio->apellidos
//                                ),
                                'fecha_matrimonio',
                                'iglesia',
//                            'padre_parroquia_id',
                                array(
                                    'name' => 'padre_parroquia_id',
                                    'value' => $model->padre->nombres . ' ' . $model->padre->apellidos
                                ),
                                
                                'acta_preparada_por',
//                                array(
//                                    'name' => 'papa_novio_id',
//                                    'value' => $model->papa_novio_id ? $model->papa_novio->nombres . ' ' . $model->papa_novio->apellidos : ""
//                                ),
//                                array(
//                                    'name' => 'mama_novio_id',
//                                    'value' => $model->mama_novio_id ? $model->mama_novio->nombres . ' ' . $model->mama_novio->apellidos : ""
//                                ),
//                            'papa_id',
//                            'mama_id',
//                                'feligreses_de',
//                                array(
//                                    'name' => 'padrino_id',
//                                    'value' => $model->padrino_id ? $model->padrino->nombres . ' ' . $model->padrino->apellidos : '<span class="null">No asignado</span>',
//                                    'type' => 'html'
//                                ),
//                                array(
//                                    'name' => 'madrina_id',
//                                    'value' => $model->madrina_id ? $model->madrina->nombres . ' ' . $model->madrina->apellidos : '<span class="null">No asignado</span>',
//                                    'type' => 'html'
//                                ),
//                            'madrina_id',
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


                    </div><!-- /.box-body -->
                    <br>
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="box box-danger">
                                <div class="box-header">
                                    <i class="fa fa-male"></i>
                                    <h3 class="box-title">Novio</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">

                                    <?php
                                    $this->widget('booster.widgets.TbDetailView', array(
                                        'data' => $model,
                                        'attributes' => array(
//                                    'persona_id',
                                            array(
                                                'name' => 'novio_id',
                                                'value' => $model->novio->nombres . ' ' . $model->novio->apellidos
                                            ),
                                            array(
                                                'name' => 'papa_novio_id',
                                                'value' => $model->papa_novio_id ? $model->papa_novio->nombres . ' ' . $model->papa_novio->apellidos : ""
                                            ),
                                            array(
                                                'name' => 'mama_novio_id',
                                                'value' => $model->mama_novio_id ? $model->mama_novio->nombres . ' ' . $model->mama_novio->apellidos : ""
                                            ),
                                            array(
                                                'name' => 'testigo_novio_1',
                                                'value' => $model->testigo_novio_uno ? $model->testigo_novio_uno->nombres . ' ' . $model->testigo_novio_uno->apellidos : ""
                                            ),
                                            array(
                                                'name' => 'testigo_novio_2',
                                                'value' => $model->testigo_novio_dos ? $model->testigo_novio_dos->nombres . ' ' . $model->testigo_novio_dos->apellidos : ""
                                            ),
//                                            'testigo_novio_1',
//                                            'testigo_novio_1',
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

                                    <?php
                                    $this->widget('booster.widgets.TbDetailView', array(
                                        'data' => $model,
                                        'attributes' => array(
//                                    'persona_id',
                                            array(
                                                'name' => 'novia_id',
                                                'value' => $model->novia->nombres . ' ' . $model->novia->apellidos
                                            ),
                                            array(
                                                'name' => 'papa_novia_id',
                                                'value' => $model->papa_novia_id ? $model->papa_novia->nombres . ' ' . $model->papa_novia->apellidos : ""
                                            ),
                                            array(
                                                'name' => 'mama_novia_id',
                                                'value' => $model->mama_novia_id ? $model->mama_novia->nombres . ' ' . $model->mama_novia->apellidos : ""
                                            ),
                                             array(
                                                'name' => 'testigo_novia_1',
                                                'value' => $model->testigo_novia_uno ? $model->testigo_novia_uno->nombres . ' ' . $model->testigo_novia_uno->apellidos : ""
                                            ),
                                            array(
                                                'name' => 'testigo_novia_2',
                                                'value' => $model->testigo_novia_dos ? $model->testigo_novia_dos->nombres . ' ' . $model->testigo_novia_dos->apellidos : ""
                                            ),
                                        ),
                                    ));
                                    ?>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>


                </div>
                <!--                 <div class="overlay"></div>
                                    <div class="loading-img"></div>-->
            </div>





        </div>
        <div class="col-lg-5   col-sm-5 ">
            <div class="box box-solid  box-success">
                <div class="box-header">
                    <i class="fa fa-book"></i><h3 class="box-title">Libro   </h3>
                    <!--                    <div class="box-tools pull-right no-print">
                                            <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                        </div>-->
                    <!--                        <div class="box-tools pull-right">
                                                <div class="label bg-aqua">Label</div>
                                            </div>-->
                </div>
                <div class="box-body">
                    <!--<div class="callout callout-success">-->

                    <div class="">
                        <?php
                        $this->widget('booster.widgets.TbDetailView', array(
                            'data' => $model,
                            'attributes' => array(
//                                    'persona_id',
//                                    'fecha_bautizo',
                                //        'iglesia',
                                //        'padre_parroquia_id',
                                //        'papa_id',
                                //        'mama_id',
                                //        'feligreses_de',
                                //        'padrino_id',
                                //        'madrina_id',
                                array(
                                    'name' => 'tomo_id',
                                    'value' => ($model->libro !== null) ? $model->libro->tomo : null,
                                    'type' => 'html',
                                ),
                                array(
                                    'name' => 'Año',
                                    'value' => ($model->libro !== null) ? $model->libro->ano : null,
                                    'type' => 'html',
                                ),
                                'pagina',
                                'numero',
                                'nota',
                            //        'rc_año',
                            //        'rc_tomo',
                            //        'rc_folio',
                            //        'rc_acta',
                            //        'rc_fecha',
                            ),
                        ));
                        ?>

                    </div>

                </div><!-- /.box-body -->
                <!--</div>-->
            </div>
            <div class="box   box-solid box-warning">
                <div class="box-header">
                    <i class="fa fa-university"></i>   <h3 class="box-title">RC  </h3>
                    <!--                    <div class="box-tools pull-right no-print">
                                            <button class="btn btn-warning btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-warning btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
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
//                                    'persona_id',
//                                    'fecha_bautizo',
                                //        'iglesia',
                                //        'padre_parroquia_id',
                                //        'papa_id',
                                //        'mama_id',
                                //        'feligreses_de',
                                //        'padrino_id',
                                //        'madrina_id',
//                                        'tomo_id',
//                                        'pagina',
//                                        'numero',
//                                        'nota',
                                'rc_ano',
                                'rc_tomo',
                                'rc_folio',
                                'rc_acta',
                                'rc_lugar',
                                'rc_fecha',
                            ),
                        ));
                        ?>

                    </div><!-- /.box-body -->
                </div>
            </div>





        </div>
    </div>
    <!--</div>-->




</aside>