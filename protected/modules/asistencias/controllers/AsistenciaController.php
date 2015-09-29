<?php

class AsistenciaController extends AweController {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
    public $layout = '//layouts/column2';
    public $admin=false;

    public $defaultAction = 'admin';

    public function filters()
    {
        return array(
            array('CrugeAccessControlFilter'),
        );
    }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new Asistencia;
                $model->fecha=  date('Y-m-d h:i:s');

        $this->performAjaxValidation($model, 'asistencia-form');

        if(isset($_POST['Asistencia']))
		{
			$model->attributes = $_POST['Asistencia'];
			if($model->save()) {
                $this->redirect(array('admin'));
            }
		}

		$this->render('create',array(
			'model' => $model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

        $this->performAjaxValidation($model, 'asistencia-form');

		if(isset($_POST['Asistencia']))
		{
			$model->attributes = $_POST['Asistencia'];
			if($model->save()) {
				$this->redirect(array('admin'));
            }
		}

		$this->render('update',array(
			'model' => $model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new Asistencia('search');
		$model->unsetAttributes(); // clear any default values
		if(isset($_GET['Asistencia']))
			$model->attributes = $_GET['Asistencia'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id, $modelClass=__CLASS__)
	{
		$model = Asistencia::model()->findByPk($id);
		if($model === null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model, $form=null)
	{
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'asistencia-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        
    public function generateColumnReport($inicio, $fin) {
        $inicio = DateTime::createFromFormat('d/m/Y', $inicio)->setTime(0, 0, 0);
        $fin = DateTime::createFromFormat('d/m/Y', $fin)->setTime(0, 0, 0);

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($inicio, $interval, $fin); //frecuencia del intervalo a calcular
        $dias = 0;
        $report = array();
        $report['title']['text'] = 'Reporte';
        $report['credits']['enabled'] = false;
        $report['chart']['height'] = '320';
        $report['subtitle']['text'] = ' Desde: ' . $inicio->format('d-m-Y') . '  Hasta: ' . $fin->format('d-m-Y');
        $report['xAxis']['labels'] = array("rotation" => -45);
        $report['yAxis']['min'] = 0;
        $report['yAxis']['title']['text'] = "Número";
        $report['yAxis']['allowDecimals'] = false;
        $report['xAxis']['categories'] = array();
        $report['series'] = array();
        foreach ($period as $date) {
            $dias++;
        }
        $interval = DateInterval::createFromDateString('1 month');
        $period = new DatePeriod($inicio, $interval, $fin); //frecuencia del intervalo a calcular
        $data = array();
        $series = array('BAUTIZOS', 'MATRIMONIOS', 'COMUNIONES', 'CONFIRMACIONES');
        foreach ($series as $value) {
            $data = array();
            foreach ($period as $date) {
                $date->modify('first day of this month');
                $inicio = $date->format('Y-m-d H:i:s');
//                $categoria = $date->format('F');
                $categoria = Util::retornarMestraduciso($date->format('m'));
                $date->modify('last day of this month');
                $date->add(new DateInterval('PT23H59M59S'));
                $fin = $date->format('Y-m-d H:i:s');
                $report['xAxis']['categories'][] = $categoria;
//            var_dump($inicio, $fin,$value,$this->obtenerDatosEntidad($inicio, $fin,$value));
//            var_dump($this->obtenerDatos($inicio, $fin));
                array_push($data, $this->obtenerDatosEntidad($inicio, $fin,$value));
//                         array_push($report['series'], array('name' => Util::Truncate('$motivo->nombre', 21), 'data' => $data, 'type' => 'column'));
            }
                    array_push($report['series'], array('name' =>$value, 'data' => $data, 'type' => 'column'));
//var_dump($data);
        }
//                    die();

//        var_dump($data);
//        die();
//        );

        return $report;
    }
}
