<?php

Yii::import('confirmaciones.models._base.BaseConfirmacion');

class Confirmacion extends BaseConfirmacion
{
    /**
     * @return Confirmacion
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Confirmacion|Confirmaciones', $n);
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
    
      public function rules(){
        return array_merge(parent::rules(),array(
            array('persona_id', 'unique','message'=>'Esta  {attribute} ya se ha confirmado.'), 
        ));
    }
     public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'persona_id' => Yii::t('app', 'Persona'),
                'fecha_confirmacion' => Yii::t('app', 'Fecha Confirmación'),
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
      
        );
    }
    
      public function de_persona($search_value)
    {
        $this->getDbCriteria()->mergeWith(
            array(
                'with' => 'persona',
                'condition' => "CONCAT(IFNULL(CONCAT(persona.nombres,' '),''),IFNULL(persona.apellidos,'')) like '%$search_value%'",
//                'params' => array(
//                    ':inicio' => $inicio,
//                    ':fin' => $fin
//                ),
            )
        );
        return $this;
    }

}