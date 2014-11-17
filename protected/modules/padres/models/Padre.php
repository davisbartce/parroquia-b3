<?php

Yii::import('padres.models._base.BasePadre');

class Padre extends BasePadre
{
    public $nombre_completo;
    /**
     * @return Padre
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Padre|Padres', $n);
    }
    
    public function rules() {
        return array(
            array('nombres, apellidos', 'required'),
            array('nombres, apellidos', 'length', 'max'=>60),
            array('fecha_nacimiento', 'safe'),
            array('fecha_nacimiento', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, nombres,nombre_completo, apellidos, fecha_nacimiento', 'safe', 'on'=>'search'),
        );
    }
    
    public static function representingColumn() {
        return 'nombre_completo';
    }
    
     public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'nombres' => Yii::t('app', 'Nombres'),
                'apellidos' => Yii::t('app', 'Apellidos'),
                'fecha_nacimiento' => Yii::t('app', 'Fecha Nacimiento'),
                'nombre_completo' => Yii::t('app', 'Padre Parroquia'),
        );
    }
    
    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
           $criteria->compare('CONCAT(nombres,apellidos,)', $this->nombre_completo, true, 'OR');
//        $criteria->compare('nombres', $this->nombre_completo, true);
        $criteria->compare('nombres', $this->nombres, true);
        $criteria->compare('apellidos', $this->apellidos, true);
        $criteria->compare('fecha_nacimiento', $this->fecha_nacimiento, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
       public function getNombre_completo() {
//        if (!$this->nombre_completo)
            $this->nombre_completo = $this->nombres. $this->apellidos;
        return $this->nombre_completo;
    }

}