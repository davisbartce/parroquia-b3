<?php

class BautizoController extends AweController {

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

    public function actionViewPrint($id) {
        $this->layout = '//layouts/print';
        $this->render('print', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Bautizo;

        $this->performAjaxValidation($model, 'bautizo-form');

        if (isset($_POST['Bautizo'])) {
            $model->attributes = $_POST['Bautizo'];
            $model->fecha_bautizo = Util::FormatDate($model->fecha_bautizo, 'Y-m-d');
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
        $model->fecha_bautizo = Util::FormatDate($model->fecha_bautizo, 'd-m-Y');
        $model->rc_fecha = Util::FormatDate($model->rc_fecha, 'd-m-Y');

        $this->performAjaxValidation($model, 'bautizo-form');

        if (isset($_POST['Bautizo'])) {
            $model->attributes = $_POST['Bautizo'];
            $model->fecha_bautizo = Util::FormatDate($model->fecha_bautizo, 'Y-m-d');
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
        $model = new Bautizo('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Bautizo'])) {
            $model->attributes = $_GET['Bautizo'];
        }

        if (isset($_GET['searchValue'])) {
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
        $model = Bautizo::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'bautizo-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionAjaxlistPersonasBautizos($search_value) {
        if (Yii::app()->request->isAjaxRequest) {
            echo CJSON::encode(Bautizo::model()->getListSelect2($search_value));
        }
    }

    public function actionReporte() {
        $model = new Bautizo('search');
        $libro = new Libro;
        $model->unsetAttributes(); // clear any default values
        $elementos = array();
//        var_dump($_GET['fechas']);
//       die();
        if (isset($_GET['ajax'])) {
            $elementos = $model->obtenerBautizos($_GET['fechas'], $_GET['tomo']);
//           var_dump($elementos);
        }
// die();

        $this->render('historial', array(
            'model' => $model,
            'libro' => $libro,
            'elementos' => $elementos,
        ));
    }

    public function actionExport() {
        $elementos = Bautizo::model()->obtenerBautizos($_POST['Ano'], $_POST['Tomo']);
        $objExcel = new PHPExcel();
//    die(var_dump($elementos));

        $objExcel->setActiveSheetIndex(0)// Titulo del reporte
                ->setCellValue('A1', 'Persona')
                ->setCellValue('B1', 'Fecha Bautizo')//Titulo de las columnas
                ->setCellValue('C1', 'Iglesia')
                ->setCellValue('D1', 'Padre Parroquia')
                ->setCellValue('E1', 'Papá')
                ->setCellValue('F1', 'Mamá')
                ->setCellValue('G1', 'Padrino')
                ->setCellValue('H1', 'Madrina')
                ->setCellValue('I1', 'Feligreses de')
                ->setCellValue('J1', 'Libro Año')
                ->setCellValue('K1', 'Libro Tomo')
                ->setCellValue('L1', 'Libro página')
                ->setCellValue('M1', '# registro')
                ->setCellValue('N1', 'nota');
//                ->setCellValue('J1', 'Estado Transacción');
//                ->setCellValue('K1', 'Saldo Capital')
//                ->setCellValue('L1', 'Interés Normal')
//                ->setCellValue('M1', 'Interés Mora')
//                ->setCellValue('J1', 'Valor Vencido');
//                ->setCellValue('O1', 'Mínimo a Pagar');
//                ->setCellValue('M1', 'Total a Pagar')
//                ->setCellValue('P1', 'Forma de Pago');

        $id = 2;
        foreach ($elementos as $Cobr) {
            $objExcel->setActiveSheetIndex(0)
//                    'fecha_gestion' => null
//      'username' => string 'admin' (length=5)
                    ->setCellValue('A' . $id, $Cobr['persona'] . ' ')
                    ->setCellValue('B' . $id, $Cobr['fecha'])
                    ->setCellValue('C' . $id, $Cobr['iglesia'] . ' ')
                    ->setCellValue('D' . $id, $Cobr['padre_parroquia'] )
                    ->setCellValue('E' . $id, $Cobr['papa'])
                    ->setCellValue('F' . $id, $Cobr['mama'])
                    ->setCellValue('G' . $id, $Cobr['padrino'])
                    ->setCellValue('H' . $id, $Cobr['madrina'])
                    ->setCellValue('I' . $id, $Cobr['feligreses_de'])
                    ->setCellValue('J' . $id, $Cobr['ano'])
                    ->setCellValue('K' . $id, $Cobr['tomo'] )
                    ->setCellValue('L' . $id, $Cobr['libro_pagina'])
                    ->setCellValue('M' . $id, $Cobr['libro_numero'])
                    ->setCellValue('N' . $id, $Cobr['nota']);
//                    ->setCellValue('J' . $id, $Cobr['estado_transaccional']);
//                    ->setCellValue('K' . $id, $Cobr['saldo_capital'])
//                    ->setCellValue('L' . $id, $Cobr['interes_normal'])
//                    ->setCellValue('M' . $id, $Cobr['interes_mora'])
//                    ->setCellValue('J' . $id, $Cobr['valor_vencido'])
//                    ->setCellValue('O' . $id, $Cobr['minimo_pagar'])
//                    ->setCellValue('M' . $id, $Cobr->total_pagar)
//                    ->setCellValue('P' . $id, $Cobr->forma_pago)
//->setCellValue('F' . $id, $Cobr->cuotas_mora)
//->setCellValue('G' . $id, $Cobr->monto_cuota)
//->setCellValue('H' . $id, $Cobr->monto_mora)
//->setCellValue('I' . $id, $Cobr->saldo_favor)
//->setCellValue('J' . $id, $Cobr->saldo_negativo)
//->setCellValue('K' . $id, $Cobr->descripcion)
            $id++;
        }

        for ($i = 'A'; $i <= 'N'; $i++) {
            $objExcel->setActiveSheetIndex(0)->getColumnDimension($i)->setAutoSize(TRUE);
        }
        $objExcel->getActiveSheet()->setTitle(count($elementos) . ' Registros Exportados');

// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
        $objExcel->setActiveSheetIndex(0);

//Inmovilizar paneles
        $objExcel->getActiveSheet(0)->freezePane('A4');
        $objExcel->getActiveSheet(0)->freezePaneByColumnAndRow(1, 2);

// Se manda el archivo al navegador web, con el nombre que se indica, en formato 2007
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Bautizos.xlsx"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;
    }

}
