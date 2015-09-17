<?php

Yii::import('padres.models._base.BasePadre');

class Padre extends BasePadre {

    public $nombre_completo;

    /**
     * @return Padre
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Padre|Padres', $n);
    }

    public function rules() {
        return array(
            array('nombres, apellidos', 'required'),
            array('nombres, apellidos', 'length', 'max' => 60),
            array('fecha_nacimiento', 'safe'),
            array('fecha_nacimiento', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, nombres, apellidos, fecha_nacimiento', 'safe', 'on' => 'search'),
             array('campo_completo', 'safe', 'on' => 'search'),
        );
    }

    public static function representingColumn() {
        return 'nombres';
    }

    public function attributeLabels() {
        return array(
            'id' => Yii::t('app', 'ID'),
            'nombres' => Yii::t('app', 'Nombres'),
            'apellidos' => Yii::t('app', 'Apellidos'),
            'fecha_nacimiento' => Yii::t('app', 'Fecha Nacimiento'),
            'campo_completo' => Yii::t('app', 'Padre Parroquia'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
//           $criteria->compare('CONCAT(nombres,apellidos,)', $this->campo_completo, true, 'OR');
//        $criteria->compare('nombres', $this->campo_completo, true);
        $criteria->compare('nombres', $this->nombres, true);
        $criteria->compare('apellidos', $this->apellidos, true);
        $criteria->compare('fecha_nacimiento', $this->fecha_nacimiento, true);
        $criteria->compare('CONCAT(IFNULL(CONCAT(t.nombres," "),""),IFNULL(t.apellidos,""))', $this->campo_completo, true);


        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getCampo_completo() {
//        if (!$this->campo_completo)
        $this->campo_completo = $this->nombres ." ". $this->apellidos;
        return $this->campo_completo;
    }

    public function setCampo_completo($campo_completo) {
        $this->campo_completo = $campo_completo;
        return $this->campo_completo;
    }

}
