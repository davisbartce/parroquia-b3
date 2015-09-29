<?php

/**
 * This is the model base class for the table "asistencia".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Asistencia".
 *
 * Columns in table "asistencia" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $fecha
 * @property integer $numero_asistentes
 * @property integer $numero_comulgados
 *
 */
abstract class BaseAsistencia extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'asistencia';
    }

    public static function representingColumn() {
        return 'fecha';
    }

    public function rules() {
        return array(
            array('fecha, numero_asistentes, numero_comulgados', 'required'),
            array('numero_asistentes, numero_comulgados', 'numerical', 'integerOnly'=>true),
            array('id, fecha, numero_asistentes, numero_comulgados', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'fecha' => Yii::t('app', 'Fecha'),
                'numero_asistentes' => Yii::t('app', 'Numero Asistentes'),
                'numero_comulgados' => Yii::t('app', 'Numero Comulgados'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('numero_asistentes', $this->numero_asistentes);
        $criteria->compare('numero_comulgados', $this->numero_comulgados);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}