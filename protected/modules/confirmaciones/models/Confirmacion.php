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
                'padre_parroquia_id' => Yii::t('app', 'Confirmado por'),
                'papa_id' => Yii::t('app', 'Papá'),
                'mama_id' => Yii::t('app', 'Mamá'),
                'feligreses_de' => Yii::t('app', 'Feligreses De'),
                'padrino_id' => Yii::t('app', 'Padrino'),
                'madrina_id' => Yii::t('app', 'Madrina'),
                'tomo_id' => Yii::t('app', 'Tomo'),
                'pagina' => Yii::t('app', 'Página'),
                'numero' => Yii::t('app', 'Número'),
                'nota' => Yii::t('app', 'Nota'),
              'ano_bautizo' => Yii::t('app', 'Año'),
                'tomo_bautizo' => Yii::t('app', 'Tomo'),
                'pagina_bautizo' => Yii::t('app', 'Página'),
                'numero_bautizo' => Yii::t('app', 'Nùmero'),
                'lugar_bautizo' => Yii::t('app', 'Lugar'),
                'fecha_bautizo' => Yii::t('app', 'Fecha'),
      
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
    
    public function obtenerConfirmaciones($ano=null,$tomo=null) {
//        select Grupo, ID_Cota from vw_DatosClientes
        $consulta = Yii::app()->db->createCommand()
                ->select('t.id,
(select concat(p.nombres,"",p.apellidos)  from confirmacion b join persona p on p.id=b.persona_id where t.id=b.id )as persona,
(select concat(p.nombres,"",p.apellidos)  from confirmacion b join persona p on p.id=b.papa_id where t.id=b.id) as papa,
(select concat(p.nombres,"",p.apellidos)  from confirmacion b join persona p on p.id=b.mama_id where t.id=b.id) as mama,
(select concat(p.nombres,"",p.apellidos)  from confirmacion b join persona p on p.id=b.padrino_id where t.id=b.id) as padrino,
(select concat(p.nombres,"",p.apellidos)  from confirmacion b join persona p on p.id=b.madrina_id where t.id=b.id) as madrina,
t.fecha_confirmacion fecha,t.iglesia,t.feligreses_de,l.tomo,l.ano,t.pagina libro_pagina,t.numero libro_numero,t.fecha_bautizo,t.ano_bautizo,t.tomo_bautizo,t.pagina_bautizo,t.numero_bautizo,t.lugar_bautizo,
concat(pa.nombres," ",pa.apellidos) padre_parroquia
')
                ->from('confirmacion t')
                ->join('padre pa',' pa.id=t.padre_parroquia_id')
                ->join('libro l','l.id=t.tomo_id');
        
        if($ano){
            $consulta->andWhere('l.ano=:anio',array(':anio'=>$ano));
        }
        if($tomo){
             $consulta->andWhere('t.tomo_id=:tomo',array(':tomo'=>$tomo));
        }
        return $consulta->queryAll();
    }

}