<?php

/**
 * This is the model base class for the table "matrimonio".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Matrimonio".
 *
 * Columns in table "matrimonio" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $fecha_matrimonio
 * @property string $iglesia
 * @property integer $padre_parroquia_id
 * @property integer $novio_id
 * @property integer $papa_novio_id
 * @property integer $mama_novio_id
 * @property string $testigo_novio_1
 * @property string $testigo_novio_2
 * @property integer $novia_id
 * @property integer $papa_novia_id
 * @property integer $mama_novia_id
 * @property string $testigo_novia_1
 * @property string $testigo_novia_2
 * @property integer $tomo_id
 * @property integer $pagina
 * @property integer $numero
 * @property string $rc_ano
 * @property string $rc_tomo
 * @property integer $rc_folio
 * @property integer $rc_acta
 * @property string $rc_lugar
 * @property string $rc_fecha
 *
 */
abstract class BaseMatrimonio extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'matrimonio';
    }

    public static function representingColumn() {
        return 'fecha_matrimonio';
    }

    public function rules() {
        return array(
            array('fecha_matrimonio, padre_parroquia_id, novio_id, novia_id, tomo_id, numero, rc_ano', 'required'),
            array('padre_parroquia_id, novio_id, papa_novio_id, mama_novio_id, novia_id, papa_novia_id, mama_novia_id, tomo_id, pagina, numero, rc_folio, rc_acta', 'numerical', 'integerOnly'=>true),
            array('iglesia, testigo_novio_1, testigo_novio_2, testigo_novia_1, testigo_novia_2, rc_lugar', 'length', 'max'=>60),
            array('rc_ano', 'length', 'max'=>4),
            array('rc_tomo', 'length', 'max'=>20),
            array('rc_fecha', 'safe'),
            array('iglesia, papa_novio_id, mama_novio_id, testigo_novio_1, testigo_novio_2, papa_novia_id, mama_novia_id, testigo_novia_1, testigo_novia_2, pagina, rc_tomo, rc_folio, rc_acta, rc_lugar, rc_fecha', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, fecha_matrimonio, iglesia, padre_parroquia_id, novio_id, papa_novio_id, mama_novio_id, testigo_novio_1, testigo_novio_2, novia_id, papa_novia_id, mama_novia_id, testigo_novia_1, testigo_novia_2, tomo_id, pagina, numero, rc_ano, rc_tomo, rc_folio, rc_acta, rc_lugar, rc_fecha', 'safe', 'on'=>'search'),
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
                'fecha_matrimonio' => Yii::t('app', 'Fecha Matrimonio'),
                'iglesia' => Yii::t('app', 'Iglesia'),
                'padre_parroquia_id' => Yii::t('app', 'Padre Parroquia'),
                'novio_id' => Yii::t('app', 'Novio'),
                'papa_novio_id' => Yii::t('app', 'Papa Novio'),
                'mama_novio_id' => Yii::t('app', 'Mama Novio'),
                'testigo_novio_1' => Yii::t('app', 'Testigo Novio 1'),
                'testigo_novio_2' => Yii::t('app', 'Testigo Novio 2'),
                'novia_id' => Yii::t('app', 'Novia'),
                'papa_novia_id' => Yii::t('app', 'Papa Novia'),
                'mama_novia_id' => Yii::t('app', 'Mama Novia'),
                'testigo_novia_1' => Yii::t('app', 'Testigo Novia 1'),
                'testigo_novia_2' => Yii::t('app', 'Testigo Novia 2'),
                'tomo_id' => Yii::t('app', 'Tomo'),
                'pagina' => Yii::t('app', 'Pagina'),
                'numero' => Yii::t('app', 'Numero'),
                'rc_ano' => Yii::t('app', 'Rc Ano'),
                'rc_tomo' => Yii::t('app', 'Rc Tomo'),
                'rc_folio' => Yii::t('app', 'Rc Folio'),
                'rc_acta' => Yii::t('app', 'Rc Acta'),
                'rc_lugar' => Yii::t('app', 'Rc Lugar'),
                'rc_fecha' => Yii::t('app', 'Rc Fecha'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('fecha_matrimonio', $this->fecha_matrimonio, true);
        $criteria->compare('iglesia', $this->iglesia, true);
        $criteria->compare('padre_parroquia_id', $this->padre_parroquia_id);
        $criteria->compare('novio_id', $this->novio_id);
        $criteria->compare('papa_novio_id', $this->papa_novio_id);
        $criteria->compare('mama_novio_id', $this->mama_novio_id);
        $criteria->compare('testigo_novio_1', $this->testigo_novio_1, true);
        $criteria->compare('testigo_novio_2', $this->testigo_novio_2, true);
        $criteria->compare('novia_id', $this->novia_id);
        $criteria->compare('papa_novia_id', $this->papa_novia_id);
        $criteria->compare('mama_novia_id', $this->mama_novia_id);
        $criteria->compare('testigo_novia_1', $this->testigo_novia_1, true);
        $criteria->compare('testigo_novia_2', $this->testigo_novia_2, true);
        $criteria->compare('tomo_id', $this->tomo_id);
        $criteria->compare('pagina', $this->pagina);
        $criteria->compare('numero', $this->numero);
        $criteria->compare('rc_ano', $this->rc_ano, true);
        $criteria->compare('rc_tomo', $this->rc_tomo, true);
        $criteria->compare('rc_folio', $this->rc_folio);
        $criteria->compare('rc_acta', $this->rc_acta);
        $criteria->compare('rc_lugar', $this->rc_lugar, true);
        $criteria->compare('rc_fecha', $this->rc_fecha, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}