<?php

class DashboardController extends Controller
{
    
     public function filters() {
        return array(
            array('CrugeAccessControlFilter -error'),
        );
    }
    
//    public $layout = '//layouts/admin';

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
//        var_dump('entro');
//        die();
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('index');
    }
    public function actionWidgets()
    {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('pages/widgets');
    }
    public function actionGeneral()
    {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('pages/general');
    }
    public function actionIcons()
    {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('pages/icons');
    }
    public function actionButtons()
    {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('pages/buttons');
    }
    public function actionSliders()
    {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('pages/sliders');
    }
    public function actionTimeline()
    {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('pages/timeline');
    }
    public function actionInvoice()
    {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('pages/invoice');
    }
    public function actionAdvanced()
    {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('pages/advanced');
    }
    public function actionGeneralForm()
    {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('pages/generalForm');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        die('sii');
        if (Yii::app()->user->isGuest) {
            $this->redirect(Yii::app()->user->ui->loginUrl);
        }
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest) {
                    echo $error['message'];
            } else {
                if($error['code'] == 404) {
                    $this->layout = '//layouts/error';
                    $this->render('404', $error);
                } else if($error['code'] == 401) {
                    $this->layout = '//layouts/error';
                    $this->render('401', $error);
                } else {
                    $this->render('error', $error);
                }
            }
        }
    }
}