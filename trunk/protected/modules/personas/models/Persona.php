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
             'bautizos' => array(self::BELONGS_TO, 'Bautizo', 'persona_id'),
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
        return array_merge(parent::rules(),array(
            array('fecha_nacimiento', 'uniqueValidator', 'attributeName' => array(
                    'nombres', 'apellidos', 'fecha_nacimiento')),
               array('documento',  'unique'),
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
                ->select('p.id,concat(p.nombres," ",p.apellidos," (",YEAR(p.fecha_nacimiento),")") as text')
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
        $report['title']['text'] = 'Mails';
        $report['credits']['enabled'] = false;
        $report['chart']['height'] = '320';
        $report['subtitle']['text'] = ' Desde: ' . $inicio->format('d-m-Y') . '  Hasta: ' . $fin->format('d-m-Y');
        $report['xAxis']['labels'] = array("rotation" => -45);
        $report['yAxis']['min'] = 0;
        $report['yAxis']['title']['text'] = "Número de Mails";
        $report['yAxis']['allowDecimals'] = false;
        $report['xAxis']['categories'] = array();
        $report['series'] = array();
        foreach ($period as $date) {
            $dias++;
        }
        switch (true) {
            case ($dias >= 84):
                $interval = DateInterval::createFromDateString('1 month');
                $period = new DatePeriod($inicio, $interval, $fin); //frecuencia del intervalo a calcular
                    $data = array();
                    foreach ($period as $date) {
                        $date->modify('first day of this month');
                        $inicio = $date->format('Y-m-d H:i:s');
                        $categoria = $date->format('F');
                        $date->modify('last day of this month');
                        $date->add(new DateInterval('PT23H59M59S'));
                        $fin = $date->format('Y-m-d H:i:s');
                        $report['xAxis']['categories'][] = $categoria;
                        array_push($data, $this->consulta( $inicio, $fin));
                    }
                    array_push($report['series'], array('name' => Util::Truncate('$motivo->nombre', 21), 'data' => $data, 'type' => 'column')
                    );
                break;
        }

        return $report;
    }


}
