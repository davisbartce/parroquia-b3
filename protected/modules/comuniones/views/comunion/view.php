<?php
/** @var ComunionController $this */
/** @var Comunion $model */


?>
<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
              <!--<small>-->
            <i class="fa fa-book"></i>  <?php echo Yii::t('AweCrud.app', 'View'); ?><!--            <div class="icon">
                
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
                    <h3 class="box-title">Información de la Comunión</h3>
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
                                array(
                                    'name' => 'persona_id',
                                    'value' => $model->persona->nombres . ' ' . $model->persona->apellidos
                                ),
                                'fecha_comunion',
                                'iglesia',
//                            'padre_parroquia_id',
                                array(
                                    'name' => 'padre_parroquia_id',
                                    'value' => $model->padre->nombres . ' ' . $model->padre->apellidos
                                ),
                                array(
                                    'name' => 'papa_id',
                                    'value' => $model->papa_id ? $model->papa->nombres . ' ' . $model->papa->apellidos : ""
                                ),
                                array(
                                    'name' => 'mama_id',
                                    'value' => $model->mama_id ? $model->mama->nombres . ' ' . $model->mama->apellidos : ""
                                ),
//                            'papa_id',
//                            'mama_id',
                                'feligreses_de',
                                array(
                                    'name' => 'padrino_id',
                                    'value' => $model->padrino_id ? $model->padrino->nombres . ' ' . $model->padrino->apellidos : '<span class="null">No asignado</span>',
                                    'type' => 'html'
                                ),
                                array(
                                    'name' => 'madrina_id',
                                    'value' => $model->madrina_id ? $model->madrina->nombres . ' ' . $model->madrina->apellidos : '<span class="null">No asignado</span>',
                                    'type' => 'html'
                                ),
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
//                                'nota',
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





        </div>
    </div>
    <!--</div>-->




</aside>