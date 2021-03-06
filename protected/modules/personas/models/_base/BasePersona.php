<?php

/**
 * This is the model base class for the table "persona".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Persona".
 *
 * Columns in table "persona" available as properties of the model,
 * followed by relations of table "persona" available as properties of the model.
 *
 * @property integer $id
 * @property string $documento
 * @property string $nombres
 * @property string $apellidos
 * @property string $fecha_nacimiento
 * @property string $lugar_nacimiento
 * @property string $estado_civil
 *
 * @property Direccion[] $direccions
 */
abstract class BasePersona extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'persona';
    }

    public static function representingColumn() {
        return 'nombres';
    }

    public function rules() {
        return array(
            array('nombres, apellidos', 'required'),
            array('documento', 'length', 'max'=>20),
            array('nombres, apellidos, lugar_nacimiento', 'length', 'max'=>60),
            array('estado_civil', 'length', 'max'=>13),
            array('estado_civil', 'in', 'range' => array('SOLTERO(A)','CASADO(A)','DIVORCIADO(A)','VIUDO(A)')), // enum,
            array('documento, lugar_nacimiento, estado_civil', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, documento, nombres, apellidos, fecha_nacimiento, lugar_nacimiento, estado_civil', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'direccions' => array(self::HAS_MANY, 'Direccion', 'persona_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'documento' => Yii::t('app', 'Documento'),
                'nombres' => Yii::t('app', 'Nombres'),
                'apellidos' => Yii::t('app', 'Apellidos'),
                'fecha_nacimiento' => Yii::t('app', 'Fecha Nacimiento'),
                'lugar_nacimiento' => Yii::t('app', 'Lugar Nacimiento'),
                'estado_civil' => Yii::t('app', 'Estado Civil'),
                'direccions' => null,
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
        $criteria->compare('estado_civil', $this->estado_civil, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}