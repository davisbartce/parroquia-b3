<?php
Util::tsRegisterAssetJs('historial.js');
?>
<aside class="right-side">
    <section class="content-header">
        <h1 class="header-title">
              <!--<small>-->
<!--            <i class="fa fa-child"></i>  Bautizo            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
        <btn class="btn btn-success " onclick="js:exportar();"><i
                class="fa fa-download"></i>&nbsp; Exportar 
        </btn>
    </section>

    <div class="col-lg-12 col-sm-12">
        <br>
        <div id="flashMsg"  class="flash-messages">

        </div> 

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo '' . ' ' . Bautizo::label(2); ?></h3>
            </div>
            <div class="panel-body">
                <!--                <div class="input-group input-group-sm col-sm-4">
                                    <input type="text" id="busquedaSearch" class="form-control" placeholder=" Buscar Persona">
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-flat" type="button" onclick="js:search();"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>-->

                <?php
                $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                    'type' => 'horizontal',
                    'id' => 'libro-form',
                    'enableAjaxValidation' => true,
                    'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => false,),
                    'enableClientValidation' => false,
                ));
                ?>
                <div class="row">

                    <div class="col-sm-4">

                        <?php
                        echo $form->datePickerGroup(
                                $libro, 'ano', array(
                            'widgetOptions' => array(
                                'options' => array(
                                    'format' => 'yyyy',
                                    'startView' => 2,
                                    'minViewMode' => 2,
                                    'autoclose' => true
                                ),
                            ),
                            'wrapperHtmlOptions' => array(
                                'class' => 'col-sm-3 col-lg-3 ',
                            ),
//				'hint' => 'Click inside! This is a super cool date field.',
                            'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                                )
                        );
                        ?>
                    </div>


                    <div class="input-group input-group-sm col-sm-3">
                        <input type="text" id="busquedaSearch" class="form-control" placeholder="Tomo">
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-flat" type="button" onclick="js:search();"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>


                <?php $this->endWidget(); ?>
                <div class="" style="overflow: auto">


                    <?php
                    $this->widget('booster.widgets.TbGridView', array(
                        'id' => 'bautizo-grid',
                        'type' => 'striped bordered hover advance',
                        'dataProvider' => New CArrayDataProvider($elementos),
//                    'dataProvider' => $model->search(),
//                        'filters'=>true,
//                        'filter'=>$model,
                        'columns' => array(
                            array(
                                'header' => 'Persona',
                                'name' => 'persona_id',
                                'value' => '$data["persona"]',
//                                'filter'=> CHtml::listData(Persona::model()->findAll(), 'id', 'nombres'),
                            ),
//                            'persona_id',
                            'fecha',
                            'iglesia',
//                            'padre_parroquia_id',
                            array(
                                'header' => 'Padre',
                                'name' => 'padre_parroquia_id',
                                'value' => '$data["padre_parroquia"]'
                            ),
                            array(
                                'header' => 'Papá',
                                'name' => 'papa_id',
                                'value' => '$data["papa"]'
                            ),
                            array(
                                'header' => 'Mamá',
                                'name' => 'mama',
                                'value' => '$data["mama"]'
                            ),
                            array(
                                'header' => 'Feligreses de',
                                'name' => 'feligreses_de',
                                'value' => '$data["feligreses_de"]'
                            ),
                            array(
                                'header' => 'Libro Tomo',
                                'name' => 'tomo',
                                'value' => '$data["tomo"]'
                            ),
                            array(
                                'header' => 'Libro Año',
                                'name' => 'ano',
                                'value' => '$data["ano"]'
                            ),
                            array(
                                'header' => 'Página',
                                'name' => 'pagina',
                                'value' => '$data["libro_pagina"]'
                            ),
                            array(
                                'header' => 'Número',
                                'name' => 'numero',
                                'value' => '$data["libro_numero"]'
                            ),
                            array(
                                'header' => 'Nota',
                                'name' => 'nota',
                                'value' => '$data["nota"]'
                            ),
//                        array(
//                            'name' => 'mama_id',
//                            'value' => '$data->mama ? $data->mama->campo_completo : ""'
//                        ),
//                            'papa_id',
//                            'mama_id',
                        /*
                          'feligreses_de',
                          'padrino_id',
                          'madrina_id',
                          'tomo_id',
                          'pagina',
                          'numero',
                          'nota',
                          'rc_año',
                          'rc_tomo',
                          'rc_folio',
                          'rc_acta',
                          'rc_fecha',
                         */
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>

</aside>

<form id="formId" method="post" target="blank">
    <input type="hidden" id="ano" name="Ano"> 
    <input type="hidden" id="tomo" name="Tomo"> 
</form>