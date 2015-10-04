<?php

//Yii::import('asistencias.models._base.BaseAsistencia');

class AsistenciaReporte extends CFormModel {

    public $fechas;

    /**
     * @return Asistencia
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'AsistenciaReporte|Reporte', $n);
    }

    public function rules() {
        return array(array('fechas', 'required'),); //pendiente
        //            array('campania_id', 'required'), //pendiente
    }

    public function attributeLabels() {
        return array('fechas' => Yii::t('app', 'Seleccione Fechas'), //            'campania_id' => Yii::t('app', 'Campaña'),
        );
    }

    public function generarReporte($inicio, $fin) {
        $inicio = DateTime::createFromFormat('d/m/Y', $inicio)->setTime(0, 0, 0);
        $fin = DateTime::createFromFormat('d/m/Y', $fin)->setTime(23, 59, 59);

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($inicio, $interval, $fin); //frecuencia del intervalo a calcular
        $dias = 0;
        $report = array();
        $report['title']['text'] = 'Reporte';
        $report['credits']['enabled'] = false;
        $report['chart']['height'] = '320';
//        $report['subtitle']['text'] = ' Desde: ' . $inicio->format('d-m-Y') . '  Hasta: ' . $fin->format('d-m-Y');
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
//        $series = array('BAUTIZOS', 'MATRIMONIOS', 'COMUNIONES', 'CONFIRMACIONES');
        $series = array();
//        var_dump($inicio->format('Y-m-d'));
//        var_dump($fin->format('Y-m-d'));
        
        $consulta = $this->obtenerDatosReporte($inicio->format('Y-m-d 00:00:00'), $fin->format('Y-m-d 23:59:59'));
//        var_dump($consulta);
        $data = array();
        $asistentes = array();
        $comulgados = array();
        foreach ($consulta as $key => $value) {
            array_push($report['xAxis']['categories'], $value['fecha']);
            array_push($asistentes, array((int)$value['asistentes']));
            array_push($comulgados, array((int)$value['comulgados']));
//            array_push(  $report['series']['Asistentes'] , $value['asistentes']);
//            array_push(  $report['series']['Comulgados'] , $value['comulgados']);
        }
        array_push($report['series'], array('name' => 'Asistentes', 'data' => $asistentes, 'type' => 'area'));
        array_push($report['series'], array('name' => 'Comulgados', 'data' => $comulgados, 'type' => 'area'));

//        var_dump($report['series']);
//
//        die();


        return $report;
    }

    public function obtenerDatosReporte($inicio, $fin) {
        $command = Yii::app()->db->createCommand()
                ->select('DATE_FORMAT(a.fecha,"%d-%m-%Y") as fecha ,sum(a.numero_asistentes) as asistentes, sum(a.numero_comulgados) as comulgados')
                ->from('asistencia a')
                ->where('a.fecha between :inicio AND :fin');
        $command->group('DATE_FORMAT(a.fecha,"%d-%m-%Y")');
        $command->order('DATE_FORMAT(a.fecha,"%d-%m-%Y") desc');
        $command->params = (array(':inicio' => $inicio, ':fin' => $fin));
        $options = $command->queryAll();

        return $options;
    }

}
