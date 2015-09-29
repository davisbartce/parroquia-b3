
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

   

</style>
<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-3">

            <img src="<?php echo Yii::app()->baseUrl . '/themes/adminLTE/img/logo.png' ?>" class="img-circle" alt="JEUS EL BUEN PASTOR" />
        </div><!-- /.col -->
        <div class="col-xs-9">
            <div class="" style="text-align: center">

                <h1 class="">
                    <!--<i class="fa fa-globe"></i>--> 
                    ARQUIDIOSESIS DE QUITO
                    <!--<small class="pull-right">Date: 2/10/2014</small>-->
                </h1>
                <h3>PARROQUIA "JESUS EL BUEN PASTOR" DE LA KENNEDY </h3>
                <h4>Urb. Matovelle Calle K y Azunos. Telf.: 2813-866</h4>
                <br>
                <h2>
                    QUITO-ECUADOR
                </h2>
            </div>

        </div><!-- /.col -->
    </div>
    <br>
    <br>

    <div class="row invoice-info">
        <div class="col-xs-3">
            <p class="elipsis">
            </p>
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
            <p>
                <b>Registro Parroquial</b><br>

            </p>
            <b>Año:</b> <?php echo $model->libro->ano; ?> <br>
            <b>Tomo:</b> <?php echo $model->libro->tomo; ?> <br>
            <b>Folio:</b> <?php echo $model->pagina; ?> <br>
            <b>Acta:</b> <?php echo $model->numero; ?> <br>
            <b>Nota marginal:</b> <?php echo $model->nota; ?> <br>
            
            
             <p class="elipsis">
            </p>
            <br>
             <p class="elipsis">
            </p>

            <!--                <div class="ellipsis">
            
                            </div> -->

        </div>

        <div class="col-xs-9">



            <h2 >CERTIFICADO DE BAUTISMO</h2>
            <br>
            <div class="descripcion-certificado">

                <p class="parrafo">
                    El suscrito, en legal forma, certifica que en los registros bautismales de este archivo parroquial, se halla inscrita una partida, con los siguientes datos:
                    <br>

                </p>

                <p class="parrafo">
                    El día <?php echo date('d', strtotime($model->fecha_bautizo)) ?> , del mes de <?php echo Util::retornarMestraduciso(date('m', strtotime($model->fecha_bautizo))) ?> ,  del año del Señor <?php echo date('Y', strtotime($model->fecha_bautizo)) ?><br>

                    En la iglesia parroquial <?php echo $model->iglesia ?>. 

                    El Padre <?php echo $model->padre->campo_completo ?>
                    Bautizó solemnemente a: <?php echo $model->persona->campo_completo ?>
                    nacido(a) en <?php echo $model->persona->lugar_nacimiento ? $model->persona->lugar_nacimiento : " " ?> el <?php echo (date('d', strtotime($model->persona->fecha_nacimiento))) . ' de ' . Util::retornarMestraduciso(date('m', strtotime($model->persona->fecha_nacimiento))) . ' del ' . date('Y', strtotime($model->persona->fecha_nacimiento)) ?> 


                    hijo(a) de <?php echo $model->papa ? $model->papa->campo_completo : " .............. " ?>
                    y de <?php echo $model->mama ? $model->mama->campo_completo : " .............. " ?>

                </p>
                <p class="parrafo">
                    <?php $model->obtenerTextoPadrinos(); ?>

                    ;a quien..... se advirtió sus obligaciones y parentezco espirtual.
                </p>
                <p class="parrafo elipsis90">
                    Certifica
                </p>

                <p class="parrafo">
                    Son datos tomados finalmente del original, al que me remito en caso necesario.
                </p>


            </div>

            <p class="parrafo elipsis90">
                Lo Certifico,
            </p>

            <br>

            <p class="parrafo">
                Quito, <?php echo Util::traducirFechaActual(); ?>
            </p>



        </div>
    </div>




    <?php // var_dump($model) ?>
</section>