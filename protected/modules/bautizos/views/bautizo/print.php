
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
        font-size: 15px;
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
     .margen-izquierda{
        margin-left: 125px;
    }





</style>
<section class="invoice" style="padding: 40px">
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
    <h2 class="text-center" >CERTIFICADO DE BAUTISMO</h2>
    <br>
    <div class="pull-right">
        Quito, <?php echo Util::traducirFechaActual(); ?>
    </div>
    <br>
    <div class="row invoice-info">
        <div class="col-xs-3">
            <br>
            <p class="elipsis">
            </p>
            <br>
            <p class="elipsis">
            </p>
            <br>
            <p class="elipsis">
            </p>
            <br>
            <p></p>
            <p>
                <b>Registro Parroquial</b><br>

            </p>
            <b>Año:</b> <?php echo $model->libro->ano; ?> <br>
            <b>Tomo:</b> <?php echo $model->libro->tomo; ?> <br>
            <b>Folio:</b> <?php echo $model->pagina; ?> <br>
            <b>Acta:</b> <?php echo $model->numero; ?> <br>
            <b>Nota marginal:</b> <?php echo $model->nota ? $model->nota :  '<p class="elipsis">
            </p>
            <br>
            <p class="elipsis">
            </p>
            <br>' ; ?> 
            <p></p>


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
                    El suscrito, en legal forma, certifica que en los registros bautismales de este archivo parroquial, se halla inscrita una partida, con los siguientes datos:
                    <br>
                </p>
                <p class="parrafo">
                    El día <?php echo date('d', strtotime($model->fecha_bautizo)) ?> , del mes de <?php echo Util::retornarMestraduciso(date('m', strtotime($model->fecha_bautizo))) ?> ,  del año del Señor <?php echo date('Y', strtotime($model->fecha_bautizo)) ?>,

                    en la Iglesia parroquial <?php echo $model->iglesia ?>.

                    El Padre <?php echo $model->padre->campo_completo ?>
                    Bautizó solemnemente a: <?php echo $model->persona->campo_completo ?>
                    nacido(a) en <?php echo $model->persona->lugar_nacimiento ? $model->persona->lugar_nacimiento : " " ?> el <?php echo (date('d', strtotime($model->persona->fecha_nacimiento))) . ' de ' . Util::retornarMestraduciso(date('m', strtotime($model->persona->fecha_nacimiento))) . ' del ' . date('Y', strtotime($model->persona->fecha_nacimiento)) ?> 


                    hijo(a) de <?php echo $model->papa ? $model->papa->campo_completo : " .............. " ?>
                    y de <?php echo $model->mama ? $model->mama->campo_completo : " .............. " ?>.
                </p>
                <p class="parrafo">
                    <?php $model->obtenerTextoPadrinos(); ?>;
                    a quien(es) se advirtió sus obligaciones y parentezco espirtual.
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




    <?php // var_dump($model) ?>
</section>