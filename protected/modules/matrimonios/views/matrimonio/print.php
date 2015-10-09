
<style>

    .descripcion {
        background: inherit;
        display: inline;
        z-index: 1;
        padding-right: .2rem;
    }
    p.elipsis:after {
        content: '';
        position: absolute;
        padding-top: 20px;

        /*bottom: .4rem;*/
        width: 50%;
        height: 0;
        line-height: 0;
        margin-right: 10px;
        border-bottom: 2px dotted #ccc;
    }
    p.elipsis90:after {
        content: '';
        position: absolute;
        padding-top: 20px;
        /*bottom: .4rem;*/
        width: 90%;
        height: 0;
        line-height: 0;
        margin-right: 10px;
        border-bottom: 2px dotted #ccc;
    }
    p.parrafo{
        line-height: 30px;
        font-size: 12px;
        text-align: justify; 
    }
    h3 {
        margin-top: 5px;
        margin-bottom: 10px;
    }
    .font-serif{
        font-family: serif;
        color: #363F6F;
    }
    .font-bolder{
        font-weight: bolder;

    }
    .font-h3{
        font-size: 17px;

    }
    h4, .h4, h5, .h5, h6, .h6 {
        margin-top: 5px;
        margin-bottom: 5px;
    }
    .margen-izquierda{
        margin-left: 105px;
    }




</style>
<section class="invoice" style="padding: 20px">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-2">

            <img src="<?php echo Yii::app()->baseUrl . '/themes/adminLTE/img/logo2.jpg' ?>" class="" alt="JEUS EL BUEN PASTOR" />
        </div><!-- /.col -->
        <div class="col-xs-8">
            <div class="" style="text-align: center">

                <h4 class="">
                    <!--<i class="fa fa-globe"></i>--> 
                    <?php echo Constants::ARQUIDIOSESIS; ?>
                    <!--<small class="pull-right">Date: 2/10/2014</small>-->
                </h4>
                <h5>Parroquia</h5>
                <h4 class="font-serif font-bolder font-h3"> <?php echo Constants::INGLESIAPARROQUIA . " " . Constants::DELAKENNEDY ?> </h4>
                <h5>
                    <?php echo Constants::DIRECCION . ' &nbsp;&nbsp;' . Constants::URBANIZACION . ' &nbsp;&nbsp; ' . Constants::TELEFONO; ?>

                </h5>
                <h5 class="font-bolder"> 
                    QUITO-ECUADOR
                </h5>
            </div>

        </div><!-- /.col -->
        <div class="col-xs-2">
            <img style="max-height: 150px" src="<?php echo Yii::app()->baseUrl . '/themes/adminLTE/img/logo3.gif' ?>" class="" alt="JEUS EL BUEN PASTOR" />

        </div>
    </div>
    <br>
    <h2 class="text-center" >CERTIFICADO DE MATRIMONIO</h2>
    <br>
    <div class="pull-right">
        Quito, <?php echo Util::traducirFechaActual(); ?>
    </div>
    <br>
    <div class="row invoice-info">
        <div class="col-xs-3">
            <br>

            <b>Registro Parroquial</b><br>

            <b>Año:</b> <?php echo $model->libro->ano; ?> <br>
            <b>Tomo:</b> <?php echo $model->libro->tomo; ?> <br>
            <b>Folio:</b> <?php echo $model->pagina; ?> <br>
            <b>Acta:</b> <?php echo $model->numero; ?> <br>
            <br>
            <!--<b>Nota marginal:</b>--> 
                <?php
//             echo $model->nota ? $model->nota :  '<p class="elipsis">
//            </p>
//            <br>
//            <p class="elipsis">
//            </p>
//            <br>' ;
//                
            ?> 
            <p></p>
            <p>
                <b><?php echo strtoupper($model->novio->apellidos . " " . $model->novio->nombres) ?></b> <br>

            </p>
            <p> Con </p>
            <p>
                <b><?php echo strtoupper($model->novia->apellidos . " " . $model->novia->nombres) ?></b> 
                <br>
                <br>


            </p>
            <p>

            </p>


<!--            <p class="elipsis">
            </p>
            <br>
            <p class="elipsis">
            </p>
            <br>-->

            <p>
                <b>Registro Civil</b><br>

            </p>
            <b>Año:</b> <?php echo $model->rc_ano; ?> <br>
            <b>Tomo:</b> <?php echo $model->rc_tomo; ?> <br>
            <b>Folio:</b> <?php echo $model->rc_folio; ?> <br>
            <b>Acta:</b> <?php echo $model->rc_acta; ?> <br>


            <!--                <div class="ellipsis">
            
                            </div> -->

        </div>

        <div class="col-xs-9">
            <br>
            <div class="descripcion-certificado">
                <p class="parrafo">
                    El que suscribe a petición de la parte interesada, en legal forma certifica que en el registro de matrimonios de este archivo parroquial, se halla inscrita la siguiente partida:
                    <br>
                </p>
                <p class="parrafo">
                    El día <?php echo date('d', strtotime($model->fecha_matrimonio)) ?> , del mes de <?php echo Util::retornarMestraduciso(date('m', strtotime($model->fecha_matrimonio))) ?> ,  del año del Señor <?php echo date('Y', strtotime($model->fecha_matrimonio)) ?>,

                    en la Iglesia de <?php echo $model->iglesia ?>. Obtenida la dispensa de proclamas y <strong>NO</strong> habiendo impedimento alguno.

                    El Padre <?php echo $model->padre->campo_completo ?>
                    precensió y bendijo fuera de la Santa Misa el matrimonio que contrajo: 
                    <br>
                </p>
                <p class="parrafo">
                    El Sr.: <?php echo $model->novio->campo_completo ?>

                    hijo de los Señores:  <?php echo $model->papa_novio ? $model->papa_novio->campo_completo : " .................................... " ?>
                    y de <?php echo $model->mama_novio ? $model->mama_novio->campo_completo : " .................................... " ?>.
                </p>
                <p class="parrafo">
                    Con la Srta.: <?php echo $model->novia->campo_completo ?>

                    hija de los Señores:  <?php echo $model->papa_novia ? $model->papa_novia->campo_completo : " .................................... " ?>
                    y de <?php echo $model->mama_novia ? $model->mama_novia->campo_completo : " .................................... " ?>.
                </p>
                <p class="parrafo">
                    Feligreses de esta Parroquia <?php echo Constants::INGLESIAPARROQUIA ?>.
                </p>
                <p class="parrafo">
                    Fuerón testigos: <?php echo  $model->testigo_novio_uno->campo_completo . ", " . $model->testigo_novio_dos->campo_completo . ", " . $model->testigo_novia_uno->campo_completo . " y  " . $model->testigo_novia_dos->campo_completo; ?>.
                </p>
<!--                <p class="parrafo ">
                    Lo certifica Padre < ?php echo $model->padre->campo_completo ?>.
                </p>-->
                <p class="parrafo">
                    Son datos tomados finalmente del original, al que me remito en caso necesario.
                </p>
            </div>
            <br>
            <br>
            <p class="parrafo">
                Lo Certifico, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .....................................
            </p>
            <br>
            <p class="margen-izquierda">
                Parroco
            </p>






        </div>
    </div>




    <?php // var_dump($model)  ?>
</section>