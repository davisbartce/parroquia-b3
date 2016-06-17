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
        $this->layout='//layouts/print';
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
        if (isset($_GET['Bautizo'])){
        $model->attributes = $_GET['Bautizo'];
       
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
        $libro=new Libro;
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Bautizo'])){
        $model->attributes = $_GET['Bautizo'];
       
       }
       
        if (isset($_GET['searchValue'])){
              $model->de_persona($_GET['searchValue']);
        }
        

        $this->render('historial', array(
            'model' => $model,
            'libro' => $libro,
        ));
    }
    
      public function actionExport() {
    die(var_dump($_POST));
        $campania_id = isset($_POST['Campania']) ? $_POST['Campania'] : null;
        if ($_POST['Cobranzas'] == 'todos') {
//            var_dump($_POST);
//            die();
            $modelCobranza = Cobranza::model()->consultaExport($filtro, $campania_id, $elemento);
//            die(var_dump($modelCobranza));
        } else {
            $cobranzas = $_POST['Cobranzas'];
//            var_dump($_POST['Cobranzas'] );
//            die();
//            if (count($cobranzas) > 0) {
            $modelCobranza = Cobranza::model()->consultaExport($filtro, $campania_id, $elemento, $cobranzas);
//            }
        }
        $objExcel = new PHPExcel();
//    die(var_dump($modelCobranza));

        $objExcel->setActiveSheetIndex(0)// Titulo del reporte
                ->setCellValue('A1', 'Contrato')
                ->setCellValue('B1', 'Cuidad')//Titulo de las columnas
                ->setCellValue('C1', 'Cedula')
                ->setCellValue('D1', 'Contacto')
//                ->setCellValue('E1', 'Producto')
//                ->setCellValue('E1', 'Total a Pagar')
                ->setCellValue('E1', 'Total Deudor')
//            ->setCellValue('G1', 'Fecha Vencimiento')
                ->setCellValue('F1', 'Fecha Pago')
                ->setCellValue('G1', 'Valor Vencido')
                ->setCellValue('H1', 'Estado Gestión')
                ->setCellValue('I1', 'Fecha Gestión')
                ->setCellValue('J1', 'Operador');
//                ->setCellValue('J1', 'Estado Transacción');
//                ->setCellValue('K1', 'Saldo Capital')
//                ->setCellValue('L1', 'Interés Normal')
//                ->setCellValue('M1', 'Interés Mora')
//                ->setCellValue('J1', 'Valor Vencido');
//                ->setCellValue('O1', 'Mínimo a Pagar');
//                ->setCellValue('M1', 'Total a Pagar')
//                ->setCellValue('P1', 'Forma de Pago');

        $id = 2;
        foreach ($modelCobranza as $Cobr) {
            $objExcel->setActiveSheetIndex(0)
//                    'fecha_gestion' => null
//      'username' => string 'admin' (length=5)
                    ->setCellValue('A' . $id, $Cobr['contrato'] . ' ')
                    ->setCellValue('C' . $id, $Cobr['agencia'])
                    ->setCellValue('A' . $id, $Cobr['contrato'] . ' ')
                    ->setCellValue('C' . $id, " " . $Cobr['documento'] ? " " . $Cobr['documento'] : '')
                    ->setCellValue('B' . $id, $Cobr['agencia'])
                    ->setCellValue('D' . $id, $Cobr['nombre_completo'] ? $Cobr['nombre_completo'] : '')
                    ->setCellValue('E' . $id, $Cobr['total_deudor'])
//              ->setCellValue('F' . $id, $Cobr['fecha_ven'])
//                ->setCellValue('F' . $id, $Cobr['fecha_ven'] ? Util::FormatDate($Cobr['fecha_ven'], 'd/m/Y') : '')
//              ->setCellValue('G' . $id, $Cobr['fecha_pago'])
                    ->setCellValue('F' . $id, $Cobr['fecha_pago'] ? Util::FormatDate($Cobr['fecha_pago'], 'M/Y') : '')
                    ->setCellValue('G' . $id, $Cobr['valor_vencido'])
                    ->setCellValue('H' . $id, $Cobr['etapa'])
                    ->setCellValue('I' . $id, $Cobr['fecha_gestion'] ? Util::FormatDate($Cobr['fecha_gestion'], 'd/m/Y') : '')
                    ->setCellValue('J' . $id, $Cobr['username']);
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

        for ($i = 'A'; $i <= 'K'; $i++) {
            $objExcel->setActiveSheetIndex(0)->getColumnDimension($i)->setAutoSize(TRUE);
        }
        $objExcel->getActiveSheet()->setTitle(count($modelCobranza) . ' Cobranzas Exportadas');

// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
        $objExcel->setActiveSheetIndex(0);

//Inmovilizar paneles
        $objExcel->getActiveSheet(0)->freezePane('A4');
        $objExcel->getActiveSheet(0)->freezePaneByColumnAndRow(1, 2);

// Se manda el archivo al navegador web, con el nombre que se indica, en formato 2007
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="ReporteCobranzas.xlsx"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;
    }

}
