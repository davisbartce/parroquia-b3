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
        <!--<link href="<?php // echo Yii::app()->theme->baseUrl;                               ?>/css/font-awesome.min.css" rel="stylesheet">-->
        <!--<link href="< ?php echo Yii::app()->theme->baseUrl; ?>/css/ionicons.min.css" rel="stylesheet">-->

        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE_v2.css" rel="stylesheet">

        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet">
        <!--<link href="< ?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet">-->
        <!--<link href="< ?php echo Yii::app()->theme->baseUrl; ?>/css/slicebox.css" rel="stylesheet">-->



        <script>
            var baseUrl = "<?php print Yii::app()->baseUrl . '/'; ?>";
            var themeUrl = "<?php print Yii::app()->theme->baseUrl . '/'; ?>";
        </script>
    </head>




    <body >
    <!--<body onload="window.print(); ">-->
        <div class="wrapper">
            <!-- Main content -->
            <!-- /.content -->
              <?php echo $content; ?>
        </div><!-- ./wrapper -->
       

    </body>




</html>