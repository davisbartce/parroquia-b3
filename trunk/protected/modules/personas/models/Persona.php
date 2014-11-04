<?php

Yii::import('personas.models._base.BasePersona');

class Persona extends BasePersona {

    /**
     * @return Persona
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Persona|Personas', $n);
    }

    public function rules() {
        return array(
            array('fecha_nacimiento', 'uniqueValidator', 'attributeName' => array(
                    'nombres', 'apellidos', 'fecha_nacimiento')),
//            array('nombres', 'unique', 'criteria'=>array(
//            'condition'=>'`apellidos`=:secondKey AND `fecha_nacimiento`=:thirdKey ',
//            'params'=>array(
//                ':secondKey'=>$this->apellidos,
//                ':thirdKey'=>$this->fecha_nacimiento
//            )
//        )),
            array('nombres, apellidos, fecha_nacimiento', 'required'),
            array('documento', 'unique'),
            array('documento', 'length', 'max' => 20),
            array('nombres, apellidos, lugar_nacimiento', 'length', 'max' => 60),
            array('documento, lugar_nacimiento', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, documento, nombres, apellidos, fecha_nacimiento, lugar_nacimiento', 'safe', 'on' => 'search'),
        );
    }

}
