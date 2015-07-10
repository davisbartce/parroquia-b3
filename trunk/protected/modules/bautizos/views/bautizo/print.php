<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-3">

            <h2 class="">
                <i class="fa fa-globe"></i> LOGO.
                <!--<small class="pull-right">Date: 2/10/2014</small>-->
            </h2>
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
            <div class="puntosSuspensivos">
                <p>
                    .....................................
                    .....................................
                    .....................................
                    .....................................

                </p>
                <p>
                    <b>Registro Parroquial</b><br>

                </p>
                <b>Año:</b> <?php echo $model->libro->ano; ?> <br>
                <b>Año:</b> <?php echo $model->libro->tomo; ?> <br>
                <b>Año:</b> <?php echo $model->libro->tomo; ?> <br>
                <b>Año:</b> <?php echo $model->libro->ano; ?> <br>
                <div class="">

                </div> 

            </div>

        </div>
        <div class="col-xs-9">

            <h2 >CERTIFICADO DE BAUTISMO</h2>
            <br>
            <div class="descripcio-certificado">

                <p>
                    El suscrito, en legal forma, certifica que en los registros bautismalesde este archivo parroquial, se halla inscrita una partida, con los siguientes datos:
                    <br>

                </p>

                <p>
                    El día <?php echo date('d', strtotime($model->fecha_bautizo)) ?> , del mes de <?php echo Util::retornarMestraduciso(date('m', strtotime($model->fecha_bautizo))) ?> ,  del año del Señor <?php echo date('Y', strtotime($model->fecha_bautizo)) ?><br>
                </p>
                <p>
                    En la iglesia parroquial <?php echo $model->iglesia ?>.<br>
                </p>
                <p>
                    El Padre <?php echo $model->padre->getNombre_completo() ?>

                </p>

                <p>
                    Bautizó solemnemente a: <?php echo $model->persona->campo_completo ?>


                    nacido(a) en <?php echo $model->persona->lugar_nacimiento ? $model->persona->lugar_nacimiento : " " ?> el <?php echo (date('d', strtotime($model->persona->fecha_nacimiento))) . ' de ' . Util::retornarMestraduciso(date('m', strtotime($model->persona->fecha_nacimiento))) . ' del ' . date('Y', strtotime($model->persona->fecha_nacimiento)) ?> 


                    hijo(a) de <?php echo $model->papa ? $model->papa->campo_completo : " .............. " ?>
                    y de <?php echo $model->mama ? $model->mama->campo_completo : " .............. " ?>

                </p>
                <p>
                    <?php $model->obtenerTextoPadrinos(); ?>

                </p>

                <p>
                    A quien..... se advirtió sus obligaciones y parentezco espirtual.
                </p>
                <p>
                    Certifica
                </p>
                
                <p>
                    Son datos tomados finalmente del original, al que me remito en caso necesario.
                </p>
                
                
            </div>
            
            <p>
                Lo Certifico, ........................................................................
            </p>
            
            <br>
            
            <p>
               Quito, 
            </p>
            


        </div>
    </div>




    <?php // var_dump($model) ?>
</section>