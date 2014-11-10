<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title><?php echo CHtml::encode($this->pageTitle); ?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   
   <link href="<?php echo Yii::app()->theme->baseUrl; ?>/fonts/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!--<link href="<?php // echo Yii::app()->theme->baseUrl;                          ?>/css/font-awesome.min.css" rel="stylesheet">-->
        <!--<link href="< ?php echo Yii::app()->theme->baseUrl; ?>/css/ionicons.min.css" rel="stylesheet">-->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/morris/morris.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="index.html">
            <!--<img class="center" alt="logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" width="200">-->
        </a>
        <!-- END LOGO -->
    </div>
    
    <?php echo $content ?>
</body>
<!-- END BODY -->
</html>