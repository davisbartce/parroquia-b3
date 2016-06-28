
<style>
    .center{
        text-align: center;
    }
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
    /*    p.elipsis90:after {
            content: '';
            position: absolute;
            padding-top: 20px;
            bottom: .4rem;
            width: 80%;
            height: 0;
            line-height: 0;
            margin-right: 10px;
            border-bottom: 2px dotted #ccc;
        }
    */   
    p.parrafo{
        margin-left: 20%;
        line-height: 30px;
        font-size: 20px;
        text-align: justify; 
    }
    /*    .espacio{
          margin-right: 5px;  
        }*/



</style>
<section class="invoice" style="padding: 40px">
    <?php // var_dump($model) ?>
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
    <div class="row">
        <div class="descripcion-certificado">
            <div class="xs-9">

                <h2 class="text-center" >CERTIFICADO</h2>
                <div class="center" >
                    <p class="elipsis90 parrafo">
                        <span class="espacio">Otorgado a  </span>
                        <?php echo $model->persona->campo_completo ?>
                    </p>
                    <p class="parrafo">
                        Por Haber Relaizado: <strong>LA CONFIRMACIÓN.</strong>
                        <br>
                        <!--                    Fueron sus padrinos
                                            Es lo que podemos expresar en honor a la verdad.-->
                    </p>
                    <p class="parrafo">
                        El día <?php echo date('d', strtotime($model->fecha_confirmacion)) ?> , del mes de <?php echo Util::retornarMestraduciso(date('m', strtotime($model->fecha_confirmacion))) ?> ,  del año del Señor <?php echo date('Y', strtotime($model->fecha_confirmacion)) ?>,

                        en la Iglesia parroquial <?php echo $model->iglesia ?>.

                        El Padre <?php echo $model->padre->campo_completo ?>
                        realizo la confirmación solemnemente a: <?php echo $model->persona->campo_completo ?>
                        nacido(a) en <?php echo $model->persona->lugar_nacimiento ? $model->persona->lugar_nacimiento : "______________________ " ?> el <?php echo $model->persona->fecha_nacimiento ? (date('d', strtotime($model->persona->fecha_nacimiento))) . ' de ' . Util::retornarMestraduciso(date('m', strtotime($model->persona->fecha_nacimiento))) . ' del ' . date('Y', strtotime($model->persona->fecha_nacimiento)) : "______________________" ?> 


                        hijo(a) de <?php echo $model->papa ? $model->papa->campo_completo : " .............. " ?>
                        y de <?php echo $model->mama ? $model->mama->campo_completo : " .............. " ?>.
                    </p>
                    <br>

                    <p class="parrafo">
                        Quito, <?php echo Util::traducirFechaActual(); ?>
                    </p>
                </div>
            </div>



            <div  style="text-align: center">
                <br>
                <span>...............................</span> 
                <br>
                PARROCO

            </div>
        </div>
    </div><!-- /.col -->
</section>