
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
<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-2">

            <img src="<?php echo Yii::app()->baseUrl . '/themes/adminLTE/img/logo2.jpg' ?>" class="img-circle" alt="JEUS EL BUEN PASTOR" />
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
            <img style="max-height: 150px" src="<?php echo Yii::app()->baseUrl . '/themes/adminLTE/img/logo3.gif' ?>" class="img-circle" alt="JEUS EL BUEN PASTOR" />

        </div>
    </div>
    <div class="row">
<h2 class="text-center" >CERTIFICADO</h2>
            <div class="center" >
                <p class="elipsis90 parrafo">
                    <span class="espacio">A  </span><span class="espacio"> l...</span>Sr....
                    <?php echo $model->persona->campo_completo ?>
                </p>
                <p class="parrafo">
                    Por Haber Relaizado: <strong>LA PRIMERA COMUNION.</strong>
                    <br>
                    Es lo que podemos expresar en honor a la verdad.
                </p>
                <br>

                <p class="parrafo">
                    Quito, <?php echo Util::traducirFechaActual(); ?>
                </p>
            </div>



            <div  style="text-align: center">
                <br>
                <span>...............................</span> 
                <br>
                PARROCO

            </div>
        </div><!-- /.col -->
    </div>
</section>