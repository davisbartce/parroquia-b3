<?php

Yii::import('personas.models._base.BasePersona');

class Persona extends BasePersona {

    private $campo_completo;

    /**
     * @return Persona
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Persona|Personas', $n);
    }

    public function relations() {
        return array(
            'direccions' => array(self::HAS_MANY, 'Direccion', 'persona_id'),
            'bautizos' => array(self::BELONGS_TO, 'Bautizo', array('id' => 'persona_id')),
            'comuniones' => array(self::BELONGS_TO, 'Comunion', array('id' => 'persona_id')),
            'matrimoniosNovio' => array(self::BELONGS_TO, 'Matrimonio', array('id' => 'novio_id')),
            'matrimoniosNovia' => array(self::BELONGS_TO, 'Matrimonio', array('id' => 'novia_id')),
            'confirmaciones' => array(self::BELONGS_TO, 'Confirmacion', array('id' => 'persona_id')),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => Yii::t('app', 'ID'),
            'documento' => Yii::t('app', 'Documento'),
            'nombres' => Yii::t('app', 'Nombres'),
            'apellidos' => Yii::t('app', 'Apellidos'),
            'fecha_nacimiento' => Yii::t('app', 'Fecha Nacimiento'),
            'lugar_nacimiento' => Yii::t('app', 'Lugar Nacimiento'),
            'campo_completo' => Yii::t('app', 'Persona'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('documento', $this->documento, true);
        $criteria->compare('nombres', $this->nombres, true);
        $criteria->compare('apellidos', $this->apellidos, true);
        $criteria->compare('fecha_nacimiento', $this->fecha_nacimiento, true);
        $criteria->compare('lugar_nacimiento', $this->lugar_nacimiento, true);
        $criteria->compare('CONCAT(IFNULL(CONCAT(t.nombres," "),""),IFNULL(t.apellidos,""))', $this->campo_completo, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function rules() {
        return array_merge(parent::rules(), array(
            array('nombres', 'uniqueValidator', 'attributeName' => array(
                    'nombres', 'apellidos')),
            array('documento', 'unique'),
            array('campo_completo', 'safe', 'on' => 'search'),
//            array('nombres', 'unique', 'criteria'=>array(
//            'condition'=>'`apellidos`=:secondKey AND `fecha_nacimiento`=:thirdKey ',
//            'params'=>array(
//                ':secondKey'=>$this->apellidos,
//                ':thirdKey'=>$this->fecha_nacimiento
                )
//        )),
        );
    }

    public function getListSelect2($search_value) {
//        echo $search_value;
        $command = Yii::app()->db->createCommand()
                ->select('p.id,concat(p.nombres," ",p.apellidos) as text')
//                ->select('concat(p.id,concat(p.nombres," ",p.apellidos),if(p.fecha_nacimiento is not null ,p.fecha_nacimiento,"")) as text')
//                ->select('p.id,concat(p.nombres," ",p.apellidos," (",YEAR(p.fecha_nacimiento),")") as text')
                ->from('persona p')
                ->where("concat(p.nombres,' ',p.apellidos) like '%$search_value%'")
//                ->andWhere('pc.estado = :estado', array(':estado' => ProduccionCategoria::ESTADO_ACTIVO))
                ->limit(10);
        return $command->queryAll();
    }

    public function getCampo_completo() {
        if (!$this->campo_completo)
            $this->campo_completo = $this->nombres . ' ' . $this->apellidos;
        return $this->campo_completo;
    }

    public function setCampo_completo($campo_completo) {
        $this->campo_completo = $campo_completo;
        return $this->campo_completo;
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
        $report['yAxis']['title']['text'] = "NÃºmero";
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
                if (!in_array($categoria, $report['xAxis']['categories'])) {
                    $report['xAxis']['categories'][] = $categoria;
                }
//            var_dump($inicio, $fin,$value,$this->obtenerDatosEntidad($inicio, $fin,$value));
//            var_dump($this->obtenerDatos($inicio, $fin));
                array_push($data, $this->obtenerDatosEntidad($inicio, $fin, $value));
//                         array_push($report['series'], array('name' => Util::Truncate('$motivo->nombre', 21), 'data' => $data, 'type' => 'column'));
            }
            array_push($report['series'], array('name' => $value, 'data' => $data, 'type' => 'column'));
//var_dump($data);
        }
//                    die();
//        var_dump($report['series']);
//        die();
//        );

        return $report;
    }

    public function obtenerDatos($inicio, $fin) {
        $command = Yii::app()->db->createCommand()
                ->select('count(b.id) as count ,"Bautizos" as name')
                ->from('bautizo b')
                ->where('b.fecha_bautizo between :inicio AND :fin');

        $command2 = Yii::app()->db->createCommand()
                ->select('count(m.id) as count ,"Matrimonios" as name')
                ->from('matrimonio m')
                ->where('m.fecha_matrimonio between :inicio AND :fin');

        $command->union($command2->text);
        $command3 = Yii::app()->db->createCommand()
                ->select('count(c.id) as count ,"Comuniones" as name')
                ->from('comunion c')
                ->where('c.fecha_comunion between :inicio AND :fin');
        $command->union($command3->text);
        $command4 = Yii::app()->db->createCommand()
                ->select('count(co.id) as count ,"Confirmaciones" as name')
                ->from('confirmacion co')
                ->where('co.fecha_confirmacion between :inicio AND :fin');
        $command->union($command4->text);
        $command->params = (array(':inicio' => $inicio, ':fin' => $fin));
        return $command->queryAll();
    }

    public function obtenerDatosEntidad($inicio, $fin, $entidad) {

        $data = array();
        switch (true) {
            case $entidad == 'BAUTIZOS':
//                  var_dump($entidad,'en metodo  BAUTIZOS');
                $command = Yii::app()->db->createCommand()
                        ->select('count(b.id) as count ,"Bautizos" as name')
                        ->from('bautizo b')
                        ->where('b.fecha_bautizo between :inicio AND :fin');
                break;
            case $entidad == 'MATRIMONIOS':
//                  var_dump($entidad,'en metodo MATRIMONIOS');
                $command = Yii::app()->db->createCommand()
                        ->select('count(m.id) as count ,"Matrimonios" as name')
                        ->from('matrimonio m')
                        ->where('m.fecha_matrimonio between :inicio AND :fin');
                break;
            case $entidad == 'COMUNIONES':
//                  var_dump($entidad,'en metodo COMUNIONES');
                $command = Yii::app()->db->createCommand()
                        ->select('count(c.id) as count ,"Comuniones" as name')
                        ->from('comunion c')
                        ->where('c.fecha_comunion between :inicio AND :fin');
                break;
            case $entidad == 'CONFIRMACIONES':
//                  var_dump($entidad,'en metodo CONFIRMACIONES');
                $command = Yii::app()->db->createCommand()
                        ->select('count(co.id) as count ,"Confirmaciones" as name')
                        ->from('confirmacion co')
                        ->where('co.fecha_confirmacion between :inicio AND :fin');
                break;
        }

        $command->params = (array(':inicio' => $inicio, ':fin' => $fin));
        $options = $command->queryAll();
        if (!empty($options)) {
            $data[] = (int) $options['0']['count'];
        } else {
            $data[] = (int) '0';
        }
        return $data;
    }

    public function de_persona($search_value) {
        $this->getDbCriteria()->mergeWith(
                array(
                    'condition' => "CONCAT(IFNULL(CONCAT(t.nombres,' '),''),IFNULL(t.apellidos,'')) like '%$search_value%'",
//                'params' => array(
//                    ':inicio' => $inicio,
//                    ':fin' => $fin
//                ),
                )
        );
        return $this;
    }

}
