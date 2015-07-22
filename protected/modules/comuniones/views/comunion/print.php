
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
        <div class="col-xs-12">
            <div class="" style="text-align: center">

                <h1 class="">
                    <!--<i class="fa fa-globe"></i>--> 
                    ARQUIDIOSESIS DE QUITO
                    <!--<small class="pull-right">Date: 2/10/2014</small>-->
                </h1>
                <h3>SERVICIO PASTORAL DE LA IGLESIA</h3>
                <h3> "JESUS EL BUEN PASTOR DE LA KENNEDY" </h3>
                <h5>Urb. Matovelle Calle K y Azunos. Telf.: 2813-866</h5>
                <br>
                <h4>
                    CERTIFICADO
                </h4>
                                <br>

            </div>
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