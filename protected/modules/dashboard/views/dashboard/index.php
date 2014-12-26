
    


<aside class="right-side">
    <?php
    /* @var $this SiteController */

//    $this->pageTitle = Yii::app()->name;
    ?>

    <section class="content-header">
        <h1>
            Dashboard
            <small><?php // echo $this->pageTitle = Yii::app()->name; ?> 
                JESUS EL BUEN PASTOR</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>


    <section class="content">   
        
        <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                         <?php echo Bautizo::model()->count() ?>
                                    </h3>
                                    <p>
                                        Bautizos
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-child"></i>
                                </div>
                                <a href="<?php echo Yii::app()->baseUrl . "/bautizos/bautizo/admin"?>" class="small-box-footer">
                                   Acceder <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        53<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        Matrimonios
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-slideshare"></i>
                                </div>
                                <a href="<?php echo Yii::app()->baseUrl . "/matrimonios/matrimonio/admin" ?>" class="small-box-footer">
                                   Acceder <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        44
                                    </h3>
                                    <p>
                                        Comuniones
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bell"></i>
                                </div>
                                <a href="<?php echo Yii::app()->baseUrl . "/comuniones/comunion/admin" ?>" class="small-box-footer">
                                   Acceder <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                        Confirmaciones
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-book"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                   Acceder <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div>

    </section>
</aside>