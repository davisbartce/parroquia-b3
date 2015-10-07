<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html class="bg-black" lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--<link rel="shortcut icon" href="< ?php // echo Yii::app()->theme->baseUrl ?>/adminLTE/img/favicon.png"/>-->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.png" type="image/x-icon"/>
        <!--<link rel="icon" href="< ?php echo Yii::app()->theme->baseUrl; ?>/adminLTE/images/favicon.png" type="image/x-icon"/>-->


        <!-- Custom styles for this template -->
        <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet">-->

        <!-- Resources -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/fonts/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
       <!--<link href="<?php // echo Yii::app()->theme->baseUrl;                        ?>/css/font-awesome.min.css" rel="stylesheet">-->
        <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ionicons.min.css" rel="stylesheet">-->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/morris/morris.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE.css" rel="stylesheet">
        <script>
            var baseUrl = "<?php print Yii::app()->baseUrl . '/'; ?>";
            var themeUrl = "<?php print Yii::app()->theme->baseUrl . '/'; ?>";
        </script>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">SISTEMA PARROQUIAL</div>

            <?php echo $content ?>
            <!--            <div class="margin text-center">
                            <span>Sign in using social networks</span>
                            <br/>
                            <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                            <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                            <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>
            
                        </div>-->
        </div>

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.min.js"></script>


    </body>
    <!-- END BODY -->
</html>