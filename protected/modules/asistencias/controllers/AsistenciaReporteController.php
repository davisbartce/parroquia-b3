<?php

class AsistenciaReporteController extends AweController {

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
    public function actionReporte() {
        $model = New AsistenciaReporte();
        $reporte = null;
        if (isset($_POST['AsistenciaReporte']['fechas']) && !empty($_POST['AsistenciaReporte']['fechas'])) {
            $model->fechas = $_POST['AsistenciaReporte']['fechas'];
            $fechas = explode(" - ", $model->fechas);
            $fecha_inicio = $fechas[0] ;
            $fecha_fin = $fechas[1];
//            var_dump($fecha_inicio,$fecha_fin);
//            var_dump($_POST[]);
//            die();

            $reporte = $model->generarReporte($fecha_inicio, $fecha_fin);
//                    var_dump($_POST);
        }

        $this->render('_reporte', array(
            'model' => $model,
            'reporte' => $reporte,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
}
