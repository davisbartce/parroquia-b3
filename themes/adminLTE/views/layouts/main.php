<?php // Yii::app()->clientScript->scriptMap['bootstrap.min.css'] = false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
        <meta name="description" content="">
        <meta name="author" content="">
        <!--<link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.ico">-->

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>


        <!-- Custom styles for this template -->
        <!--<link href="< ?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet">-->

        <!-- Resources -->
        <!--<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>-->
        <!--<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>-->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/fonts/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!--<link href="<?php // echo Yii::app()->theme->baseUrl;                            ?>/css/font-awesome.min.css" rel="stylesheet">-->
        <!--<link href="< ?php echo Yii::app()->theme->baseUrl; ?>/css/ionicons.min.css" rel="stylesheet">-->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ladda-themeless.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/select2/select2.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/select2/select2-bootstrap.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/morris/morris.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet">
        <!--<link href="< ?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet">-->
        <!--<link href="< ?php echo Yii::app()->theme->baseUrl; ?>/css/slicebox.css" rel="stylesheet">-->



        <script>
            var baseUrl = "<?php print Yii::app()->baseUrl . '/'; ?>";
            var themeUrl = "<?php print Yii::app()->theme->baseUrl . '/'; ?>";
        </script>
    </head>

    <body class="skin-blue">
        <header class="header ">
            <a href="<?php echo  Yii::app()->baseUrl?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Sistema Parroquial
            </a>

            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!--<img src="img/avatar3.png" class="img-circle" alt="User Image"/>-->
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!--<img src="img/avatar2.png" class="img-circle" alt="user image"/>-->
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!--<img src="img/avatar.png" class="img-circle" alt="user image"/>-->
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!--<img src="img/avatar2.png" class="img-circle" alt="user image"/>-->
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!--<img src="img/avatar.png" class="img-circle" alt="user image"/>-->
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>


                        <!-- Notifications: style can be found in dropdown.less -->
                        <!--                        <li class="dropdown notifications-menu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-warning"></i>
                                                        <span class="label label-warning">10</span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="header">You have 10 notifications</li>
                                                        <li>
                                                             inner menu: contains the actual data 
                                                            <ul class="menu">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-group info"></i> 5 new members joined today
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-users warning"></i> 5 new members joined
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-shopping-cart success"></i> 25 sales made
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="ion ion-ios7-person danger"></i> You changed your username
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="footer"><a href="#">View all</a></li>
                                                    </ul>
                                                </li>-->
                        <!-- Tasks: style can be found in dropdown.less -->
                        <!--                        <li class="dropdown tasks-menu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-tasks"></i>
                                                        <span class="label label-danger">9</span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="header">You have 9 tasks</li>
                                                        <li>
                                                             inner menu: contains the actual data 
                                                            <ul class="menu">
                                                                <li> Task item 
                                                                    <a href="#">
                                                                        <h3>
                                                                            Design some buttons
                                                                            <small class="pull-right">20%</small>
                                                                        </h3>
                                                                        <div class="progress xs">
                                                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                <span class="sr-only">20% Complete</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li> end task item 
                                                                <li> Task item 
                                                                    <a href="#">
                                                                        <h3>
                                                                            Create a nice theme
                                                                            <small class="pull-right">40%</small>
                                                                        </h3>
                                                                        <div class="progress xs">
                                                                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                <span class="sr-only">40% Complete</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li> end task item 
                                                                <li> Task item 
                                                                    <a href="#">
                                                                        <h3>
                                                                            Some task I need to do
                                                                            <small class="pull-right">60%</small>
                                                                        </h3>
                                                                        <div class="progress xs">
                                                                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                <span class="sr-only">60% Complete</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li> end task item 
                                                                <li> Task item 
                                                                    <a href="#">
                                                                        <h3>
                                                                            Make beautiful transitions
                                                                            <small class="pull-right">80%</small>
                                                                        </h3>
                                                                        <div class="progress xs">
                                                                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                <span class="sr-only">80% Complete</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li> end task item 
                                                            </ul>
                                                        </li>
                                                        <li class="footer">
                                                            <a href="#">View all tasks</a>
                                                        </li>
                                                    </ul>
                                                </li>-->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>  <?php echo Yii::app()->user->name ? Yii::app()->user->name : "Guest" ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo Yii::app()->baseUrl . '/themes/adminLTE/img/avatar-5.png' ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo Yii::app()->user->name ? Yii::app()->user->name : "Guest" ?>
                                        <!--<small>Member since Nov. 2012</small>-->
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!--                                <li class="user-body">
                                                                    <div class="col-xs-4 text-center">
                                                                        <a href="#">Followers</a>
                                                                    </div>
                                                                    <div class="col-xs-4 text-center">
                                                                        <a href="#">Sales</a>
                                                                    </div>
                                                                    <div class="col-xs-4 text-center">
                                                                        <a href="#">Friends</a>
                                                                    </div>
                                                                </li>-->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <!--                                    <div class="pull-left">
                                                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                                        </div>-->
                                    <div class="pull-right">
                                        <?php echo CHtml::link('<i class=" btn btn-danger icon-off">Cerrar Sesiòn</i>&nbsp;&nbsp;', Yii::app()->user->ui->logoutUrl) ?>             
                                        <!--<a href="#" class="btn btn-default btn-flat">Sign out</a>-->
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">

            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <!--                        <div class="pull-left image">
                                                    <img class="img-circle" alt="User Image" src=" <?php echo Yii::app()->baseUrl . '/themes/adminLTE/img/avatar3.png' ?> "/>
                                                </div>
                                                <div class="pull-left info">
                                                    <p>Hola     , <?php echo ' ' . Yii::app()->user->name ?> </p>
                        
                                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                                </div>-->
                    </div>
                    <!-- search form -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="principal">
                            <a href="<?php echo Yii::app()->homeUrl ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class=" principal">
                            <a href="<?php echo Yii::app()->baseUrl . "/dashboard/dashboard/widgets" ?>">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>

                        <li class="treeview principal">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo Yii::app()->baseUrl . "/dashboard/dashboard/general" ?>"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li><a href="<?php echo Yii::app()->baseUrl . "/dashboard/dashboard/icons" ?>"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                <li><a href="<?php echo Yii::app()->baseUrl . "/dashboard/dashboard/buttons" ?>"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                <li><a href="<?php echo Yii::app()->baseUrl . "/dashboard/dashboard/sliders" ?>"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                <li><a href="<?php echo Yii::app()->baseUrl . "/dashboard/dashboard/timeline" ?>"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                                <li><a href="<?php echo Yii::app()->baseUrl . "/dashboard/dashboard/invoice" ?>"><i class="fa fa-folder"></i> Invoice</a></li>
                                <li><a href="<?php echo Yii::app()->baseUrl . "/dashboard/dashboard/generalForm" ?>"><i class="fa fa-folder"></i> General Form</a></li>
                                <li><a href="<?php echo Yii::app()->baseUrl . "/dashboard/dashboard/advanced" ?>"><i class="fa fa-folder"></i> Advanced Form</a></li>
                            </ul>
                        </li>
                        <li class="treeview principal <?php echo YiiBase::app()->getController()->getId() == "persona" ? "active" : "" ?> ">
                            <a href="#">
                                <i class="fa fa-th-list"></i> <span>Catálogos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo Yii::app()->createUrl('personas/persona/admin') ?>" style="margin-left: 10px;"><i class="fa fa-user"></i> Personas</a></li>
                                <li class=""><a href="<?php echo Yii::app()->createUrl('padres/padre/admin') ?>" style="margin-left: 10px;"><i class="fa fa-male"></i> Padres</a></li>
                                <li class=""><a href="<?php echo Yii::app()->createUrl('libros/libro/admin') ?>" style="margin-left: 10px;"><i class="fa fa-book"></i> Libros</a></li>
                            </ul>
                        </li>
                        <li class="principal ">
                            <a href="<?php echo Yii::app()->baseUrl . "/bautizos/bautizo/admin" ?>">
                                <i class="fa fa-child"></i> <span>Bautizos</span> 
                            </a>
                        </li>
                        <li class="principal ">
                            <a href="<?php echo Yii::app()->baseUrl . "/matrimonios/matrimonio/admin" ?>">
                                <i class="fa fa-slideshare"></i> <span>Matrimonios</span> 
                            </a>
                        </li>
                        <li class="principal ">
                            <a href="<?php echo Yii::app()->baseUrl . "/confirmaciones/confirmacion/admin" ?>">
                                <i class="fa fa-book"></i> <span>Confirmaciones</span> 
                            </a>
                        </li>
                        <li class="principal ">
                            <a href="<?php echo Yii::app()->baseUrl . "/comuniones/comunion/admin" ?>">
                                <i class="fa fa-bell"></i> <span>Comuniones</span> 
                            </a>
                        </li>
                        <!--                        <li>
                                                    <a href="pages/calendar.html">
                                                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                                                        <small class="badge pull-right bg-red">3</small>
                                                    </a>
                                                </li>-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>


            <!-- Content Header (Page header) -->
<!--                <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>-->

            <!-- Main content -->
<!--                <section class="container-fluid">
                <div class="row">-->

<!--                        <section class="col-lg-12 connectedSortable">                            

</section>-->
            <?php echo $content; ?>
            <!--</div>-->
            <!--</section>-->
            <!--            </aside>-->
        </div>   <!-- Wrapper -->
        <div class="row">
            <?php
// El modal de la página
            $this->beginWidget('booster.widgets.TbModal', array('id' => 'mainModal', 'options' => array('backdrop' => 'static')));
            $this->endWidget();
            ?>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!--<script src="< ?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.min.js"></script>-->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/raphael-min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/menu.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/app.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/common-scripts.js"></script>
        <!--plugis para lada-->
        <!--select 2-->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/select2/select2.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/select2/select2_locale_es.js"></script>
        <!-- ladda submit -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/spin.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ladda.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ladda.jquery.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.validateAjax.js"></script>

        <!--<script src="< ?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/morris/morris.min.js"></script>-->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jqueryKnob/jquery.knob.js"></script>

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/dashboard.js"></script>
        <!--<script src="< ?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/demo.js"></script>-->
<!--        <script src="< ?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script>
        <script src="< ?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script>-->
        <!--<script src="< ?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script>-->




    </body>
</html>