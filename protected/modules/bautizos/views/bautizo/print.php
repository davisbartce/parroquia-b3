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
<?php var_dump($model->libro) ?>
                    </div>
                </div>
                

                 

               <?php // var_dump($model) ?>
            </section>