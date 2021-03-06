<?php

Yii::import('matrimonios.models._base.BaseMatrimonio');

class Matrimonio extends BaseMatrimonio {

    /**
     * @return Matrimonio
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Matrimonio|Matrimonios', $n);
    }

    public function attributeLabels() {
        return array(
            'id' => Yii::t('app', 'ID'),
            'fecha_matrimonio' => Yii::t('app', 'Fecha Matrimonio'),
            'iglesia' => Yii::t('app', 'Iglesia'),
            'padre_parroquia_id' => Yii::t('app', 'Celebrado Por'),
            'novio_id' => Yii::t('app', 'Novio'),
            'papa_novio_id' => Yii::t('app', 'Papá'),
            'mama_novio_id' => Yii::t('app', 'Mamá'),
            'testigo_novio_1' => Yii::t('app', 'Testigo1'),
            'testigo_novio_2' => Yii::t('app', 'Testigo2'),
            'novia_id' => Yii::t('app', 'Novia'),
            'papa_novia_id' => Yii::t('app', 'Papá'),
            'mama_novia_id' => Yii::t('app', 'Mamá'),
            'testigo_novia_1' => Yii::t('app', 'Testigo1'),
            'testigo_novia_2' => Yii::t('app', 'Testigo2'),
            'tomo_id' => Yii::t('app', 'Tomo'),
            'pagina' => Yii::t('app', 'Página'),
            'numero' => Yii::t('app', 'Número'),
            'rc_ano' => Yii::t('app', 'Rc Año'),
            'rc_tomo' => Yii::t('app', 'Rc Tomo'),
            'rc_folio' => Yii::t('app', 'Rc Página'),
            'rc_acta' => Yii::t('app', 'Rc Acta'),
            'rc_lugar' => Yii::t('app', 'Rc Lugar'),
            'rc_fecha' => Yii::t('app', 'Rc Fecha'),
        );
    }

    public function relations() {
        return array(
            'novio' => array(self::BELONGS_TO, 'Persona', 'novio_id'),
            'novia' => array(self::BELONGS_TO, 'Persona', 'novia_id'),
            'papa_novio' => array(self::BELONGS_TO, 'Persona', 'papa_novio_id'),
            'papa_novia' => array(self::BELONGS_TO, 'Persona', 'papa_novia_id'),
            'mama_novio' => array(self::BELONGS_TO, 'Persona', 'mama_novio_id'),
            'mama_novia' => array(self::BELONGS_TO, 'Persona', 'mama_novia_id'),
            'mama_novia' => array(self::BELONGS_TO, 'Persona', 'mama_novia_id'),
            'testigo_novio_uno' => array(self::BELONGS_TO, 'Persona', 'testigo_novio_1'),
            'testigo_novio_dos' => array(self::BELONGS_TO, 'Persona', 'testigo_novio_2'),
            'testigo_novia_uno' => array(self::BELONGS_TO, 'Persona', 'testigo_novia_1'),
            'testigo_novia_dos' => array(self::BELONGS_TO, 'Persona', 'testigo_novia_2'),
            'padre' => array(self::BELONGS_TO, 'Padre', 'padre_parroquia_id'),
            'libro' => array(self::BELONGS_TO, 'Libro', 'tomo_id'),
        );
    }
    
      public function de_persona($search_value)
    {
        $this->getDbCriteria()->mergeWith(
            array(
                'with' => array('novio','novia'),
                'condition' => "CONCAT(IFNULL(CONCAT(novio.nombres,' '),''),IFNULL(novio.apellidos,'')) like '%$search_value%' or CONCAT(IFNULL(CONCAT(novia.nombres,' '),''),IFNULL(novia.apellidos,'')) like '%$search_value%'",
//                'params' => array(
//                    ':inicio' => $inicio,
//                    ':fin' => $fin
//                ),
            )
        );
        return $this;
    }
    
    public function obtenerMatrimonios($ano=null,$tomo=null) {
//        select Grupo, ID_Cota from vw_DatosClientes
        $consulta = Yii::app()->db->createCommand()
                ->select('t.id,
(select concat(p.nombres,"",p.apellidos)  from matrimonio b join persona p on p.id=b.novio_id where t.id=b.id )as novio,
(select concat(p.nombres,"",p.apellidos)  from matrimonio b join persona p on p.id=b.novia_id where t.id=b.id) as novia,
(select concat(p.nombres,"",p.apellidos)  from matrimonio b join persona p on p.id=b.papa_novio_id where t.id=b.id) as papa_novio,
(select concat(p.nombres,"",p.apellidos)  from matrimonio b join persona p on p.id=b.mama_novio_id where t.id=b.id) as mama_novio,
(select concat(p.nombres,"",p.apellidos)  from matrimonio b join persona p on p.id=b.papa_novia_id where t.id=b.id) as papa_novia,
(select concat(p.nombres,"",p.apellidos)  from matrimonio b join persona p on p.id=b.mama_novia_id where t.id=b.id) as mama_novia,
(select concat(p.nombres,"",p.apellidos)  from matrimonio b join persona p on p.id=b.testigo_novio_1 where t.id=b.id) as testigo_novio_1,
(select concat(p.nombres,"",p.apellidos)  from matrimonio b join persona p on p.id=b.testigo_novio_2 where t.id=b.id) as testigo_novio_2,
(select concat(p.nombres,"",p.apellidos)  from matrimonio b join persona p on p.id=b.testigo_novia_1 where t.id=b.id) as testigo_novia_1,
(select concat(p.nombres,"",p.apellidos)  from matrimonio b join persona p on p.id=b.testigo_novia_2 where t.id=b.id) as testigo_novia_2,
t.fecha_matrimonio fecha,t.iglesia,l.tomo,l.ano,t.pagina libro_pagina,t.numero libro_numero,rc_acta acta_rc,concat(pa.nombres," ",pa.apellidos) padre_parroquia
')
                ->from('matrimonio t')
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
