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
        if (isset($_GET['Matrimonio'])) {
            $model->attributes = $_GET['Matrimonio'];
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

    public function actionViewPrint($id) {
        $this->layout = '//layouts/print';
        $this->render('print', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionReporte() {
        $model = new Matrimonio('search');
        $libro = new Libro;
        $model->unsetAttributes(); // clear any default values
        $elementos = array();
        if (isset($_GET['ajax'])) {
            $elementos = $model->obtenerMatrimonios($_GET['fechas'], $_GET['tomo']);
        }
//        var_dump($elementos);
//        die();
        $this->render('historial', array(
            'model' => $model,
            'libro' => $libro,
            'elementos' => $elementos,
        ));
    }

    public function actionExport() {
        $elementos = Matrimonio::model()->obtenerMatrimonios($_POST['Ano'], $_POST['Tomo']);
        $objExcel = new PHPExcel();
//    die(var_dump($elementos));

        $objExcel->setActiveSheetIndex(0)// Titulo del reporte
                ->setCellValue('A1', 'Novio')
                ->setCellValue('B1', 'Novia')
                ->setCellValue('C1', 'Fecha Matrimonio')
                ->setCellValue('D1', 'Iglesia')
                ->setCellValue('E1', 'Padre Parroquia')
                ->setCellValue('F1', 'Papa Novio')
                ->setCellValue('G1', 'Mama Novio')
                ->setCellValue('H1', 'Papa Novia')
                ->setCellValue('I1', 'Mama Novia')
                ->setCellValue('J1', 'Testigo Novio 1')
                ->setCellValue('K1', 'Testigo Novio 2')
                ->setCellValue('L1', 'Testigo Novia 1')
                ->setCellValue('M1', 'Testigo Novia 2')
                ->setCellValue('N1', 'Libro Año')
                ->setCellValue('O1', 'Libro Tomo')
                ->setCellValue('P1', 'Libro página')
                ->setCellValue('Q1', '# registro')
                ->setCellValue('R1', '# Acta Registro Civil');
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
                    ->setCellValue('A' . $id, $Cobr['novio'] . ' ')
                    ->setCellValue('B' . $id, $Cobr['novia'])
                    ->setCellValue('C' . $id, $Cobr['fecha'] . ' ')
                    ->setCellValue('D' . $id, $Cobr['iglesia'] . ' ')
                    ->setCellValue('E' . $id, $Cobr['padre_parroquia'])
                    ->setCellValue('F' . $id, $Cobr['papa_novio'])
                    ->setCellValue('G' . $id, $Cobr['mama_novio'])
                    ->setCellValue('H' . $id, $Cobr['papa_novia'])
                    ->setCellValue('I' . $id, $Cobr['mama_novia'])
                    ->setCellValue('J' . $id, $Cobr['testigo_novio_1'])
                    ->setCellValue('K' . $id, $Cobr['testigo_novio_2'])
                    ->setCellValue('L' . $id, $Cobr['testigo_novia_1'])
                    ->setCellValue('M' . $id, $Cobr['testigo_novia_2'])
                    ->setCellValue('N' . $id, $Cobr['ano'])
                    ->setCellValue('O' . $id, $Cobr['tomo'])
                    ->setCellValue('P' . $id, $Cobr['libro_pagina'])
                    ->setCellValue('Q' . $id, $Cobr['libro_numero'])
                    ->setCellValue('R' . $id, $Cobr['acta_rc']);
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

        for ($i = 'A'; $i <= 'R'; $i++) {
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
        header('Content-Disposition: attachment;filename="Matrimonios.xlsx"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;
    }

}
