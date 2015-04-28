<?php

class PersonaController extends AweController {

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
        $model = new Persona;
        $result = array();
        $this->ajaxValidation($model);

//        $this->performAjaxValidation($model, 'persona-form');
//        var_dump(  $this->performAjaxValidation($model, 'persona-form'));
        $model->fecha_nacimiento = Util::FormatDate($model->fecha_nacimiento, 'd-m-Y');

        if (isset($_POST['Persona'])) {
            $model->attributes = $_POST['Persona'];
            $model->nombres = trim($model->nombres);
            $model->apellidos = trim($model->apellidos);
            $model->fecha_nacimiento = Util::FormatDate($model->fecha_nacimiento, 'Y-m-d');
            $result['success'] = $model->save();
            if ($result['success']) {
                $result['attr'] = $model->attributes;
//            if ($result['success']) {
//                
//            }
//            var_dump($model->attributes);
//            die();
            }
            echo CJSON::encode($result);
//             $this->redirect(array('admin'));
//            if ($model->save()) {
//                $this->redirect(array('admin'));
//            } else {
//                $model->fecha_nacimiento = Util::FormatDate($model->fecha_nacimiento, 'd-m-Y');
//            }
        } else {
            $this->render('create', array(
                'model' => $model,
            ));
        }
    }
    public function actionCreateModal() {
        $model=new Persona;
        
          if (Yii::app()->request->isAjaxRequest) {
        
         $this->renderPartial('modal', array( 'model'=>$model), false, true);
          }
         
         
    }
    public function actionReporteDashboard() {
        
        Persona::model()->generateColumnReport(date('01/01/Y'), date('31/12/Y'));
        
          if (Yii::app()->request->isAjaxRequest) {
        
         $this->renderPartial('modal', array( 'model'=>$model), false, true);
          }
         
         
    }
    
    

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $model->fecha_nacimiento = Util::FormatDate($model->fecha_nacimiento, 'd-m-Y');
        $result = array();
        $this->ajaxValidation($model);
        if (isset($_POST['Persona'])) {
            $model->attributes = $_POST['Persona'];
            $model->nombres = trim($model->nombres);
            $model->apellidos = trim($model->apellidos);
            $model->fecha_nacimiento = Util::FormatDate($model->fecha_nacimiento, 'Y-m-d');
            $result['success'] = $model->save();
            if ($result['success']) {
                $result['attr'] = $model->attributes;
            }
            echo CJSON::encode($result);
        } else {
            $this->render('update', array(
                'model' => $model,
            ));
        }

//        if (isset($_POST['Persona'])) {
//            $model->attributes = $_POST['Persona'];
//            if ($model->save()) {
//                $this->redirect(array('admin'));
//            }
//        }
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
//          $model=  $this->loadModel($id);
//          $bautizo=$model->bautizos;
//          var_dump($bautizo)

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
        $model = new Persona('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Persona']))
            $model->attributes = $_GET['Persona'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionMini() {
        $model = new Persona;
        $result = array();
        $this->ajaxValidation($model);

//        $this->performAjaxValidation($model, 'persona-form');
//        var_dump(  $this->performAjaxValidation($model, 'persona-form'));
        $model->fecha_nacimiento = Util::FormatDate($model->fecha_nacimiento, 'd-m-Y');

        if (isset($_POST['Persona'])) {
            $model->attributes = $_POST['Persona'];
            $model->fecha_nacimiento = Util::FormatDate($model->fecha_nacimiento, 'Y-m-d');
            $result['success'] = $model->save();
            if ($result['success']) {
                $result['attr'] = $model->attributes;
            }
            echo CJSON::encode($result);
        } else {
            $this->renderPartial('_form_mini', array(
                'model' => $model,
                    ), false, true);
        }
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id, $modelClass = __CLASS__) {
        $model = Persona::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'persona-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * funcion de validacion por ajax
     * @param type $model
     * @param type $form_id
     */
    protected function ajaxValidation($model, $form_id = "persona-form") {
        $portAtt = str_replace('-', ' ', (str_replace('-form', '', $form_id)));
        $portAtt = ucwords(strtolower($portAtt));
        $portAtt = str_replace(' ', '', $portAtt);
        if (isset($_POST['ajax']) && $_POST['ajax'] === '#' . $form_id) {
            $model->attributes = $_POST[$portAtt];
            $result['success'] = $model->validate();
            if (!$result['success']) {
                $result['errors'] = $model->errors;
                echo json_encode($result);
                Yii::app()->end();
            }
        }
    }

    public function actionAjaxlistPersonas($search_value) {
//        var_dump($search_value);
        if (Yii::app()->request->isAjaxRequest) {
            echo CJSON::encode(Persona::model()->getListSelect2($search_value));
        }
    }
    public function actionReporte() {
//        var_dump($search_value);
        $consulta=Persona::model()->generateColumnReport("01/01/2015", "31/12/2015");
        
        $this->renderPartial('_reporte', array(
                'consulta' => $consulta,
                    ), false, true);
//        Persona::model()->generateColumnReport("2015-01-01", "2015-12-31");
//        if (Yii::app()->request->isAjaxRequest) {
//            echo CJSON::encode(Persona::model()->getListSelect2($search_value));
//        }
    }
    
   

}
