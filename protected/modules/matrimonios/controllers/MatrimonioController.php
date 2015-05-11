<?php

class MatrimonioController extends AweController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $admin = false;
    public $defaultAction = 'admin';

    public function filters() {
        return array(
            array('CrugeAccessControlFilter'),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Matrimonio;

        $this->performAjaxValidation($model, 'matrimonio-form');

        if (isset($_POST['Matrimonio'])) {
            $model->attributes = $_POST['Matrimonio'];
            $model->fecha_matrimonio = Util::FormatDate($model->fecha_matrimonio, 'Y-m-d');
            $model->rc_fecha = Util::FormatDate($model->rc_fecha, 'Y-m-d');
            if ($model->save()) {
                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
         $model->fecha_matrimonio = Util::FormatDate($model->fecha_matrimonio, 'd-m-Y');
        $model->rc_fecha = Util::FormatDate($model->rc_fecha, 'd-m-Y');


        $this->performAjaxValidation($model, 'matrimonio-form');

        if (isset($_POST['Matrimonio'])) {
            $model->attributes = $_POST['Matrimonio'];
            $model->fecha_matrimonio = Util::FormatDate($model->fecha_matrimonio, 'Y-m-d');
            $model->rc_fecha = Util::FormatDate($model->rc_fecha, 'Y-m-d');
            if ($model->save()) {
                $this->redirect(array('admin'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Matrimonio('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Matrimonio'])){
            $model->attributes = $_GET['Matrimonio'];
        }
        
           if (isset($_GET['searchValue'])){
              $model->de_persona($_GET['searchValue']);
        }


        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id, $modelClass = __CLASS__) {
        $model = Matrimonio::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'matrimonio-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
