<?php

Yii::import('comuniones.models._base.BaseComunion');

class Comunion extends BaseComunion
{
    /**
     * @return Comunion
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Comunión|Comuniones', $n);
    }
    
    public function relations() {
        return array(
                'persona' => array(self::BELONGS_TO, 'Persona', 'persona_id'),
                'papa' => array(self::BELONGS_TO, 'Persona', 'papa_id'),
                'mama' => array(self::BELONGS_TO, 'Persona', 'mama_id'),
                'padrino' => array(self::BELONGS_TO, 'Persona', 'padrino_id'),
                'madrina' => array(self::BELONGS_TO, 'Persona', 'madrina_id'),
                'padre' => array(self::BELONGS_TO, 'Padre', 'padre_parroquia_id'),
            'libro' => array(self::BELONGS_TO, 'Libro', 'tomo_id'),
        );
    }
    
      public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'persona_id' => Yii::t('app', 'Persona'),
                'fecha_comunion' => Yii::t('app', 'Fecha Comunión'),
                'iglesia' => Yii::t('app', 'Iglesia'),
                'padre_parroquia_id' => Yii::t('app', 'Padre Parroquia'),
                'papa_id' => Yii::t('app', 'Papá'),
                'mama_id' => Yii::t('app', 'Mamá'),
                'feligreses_de' => Yii::t('app', 'Feligreses De'),
                'padrino_id' => Yii::t('app', 'Padrino'),
                'madrina_id' => Yii::t('app', 'Madrina'),
                'tomo_id' => Yii::t('app', 'Tomo'),
                'pagina' => Yii::t('app', 'Página'),
                'numero' => Yii::t('app', 'Número'),
                'nota' => Yii::t('app', 'Nota'),
                'rc_ano' => Yii::t('app', 'Rc Año'),
                'rc_tomo' => Yii::t('app', 'Rc Tomo'),
                'rc_folio' => Yii::t('app', 'Rc Folio'),
                'rc_acta' => Yii::t('app', 'Rc Acta'),
                'rc_fecha' => Yii::t('app', 'Rc Fecha'),
        );
    }

}