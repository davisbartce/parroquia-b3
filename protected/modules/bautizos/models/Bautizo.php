<?php

Yii::import('bautizos.models._base.BaseBautizo');

class Bautizo extends BaseBautizo {

    /**
     * @return Bautizo
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Bautizo|Bautizos', $n);
    }

    public function rules() {
        return array_merge(parent::rules(), array(
            array('persona_id', 'unique', 'message' => 'Esta  {attribute} ya se ha bautizado.'),
        ));
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
        return array_merge(parent::attributeLabels(), array(
            'id' => Yii::t('app', 'ID'),
            'persona_id' => Yii::t('app', 'Persona'),
            'fecha_bautizo' => Yii::t('app', 'Fecha Bautizo'),
            'iglesia' => Yii::t('app', 'Iglesia'),
            'padre_parroquia_id' => Yii::t('app', 'Bautizado Por'),
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
            'rc_folio' => Yii::t('app', 'Rc Página'),
            'rc_acta' => Yii::t('app', 'Rc Acta'),
            'rc_fecha' => Yii::t('app', 'Rc Fecha'),
        ));
    }

    public function getListSelect2($search_value) {
        $command = Yii::app()->db->createCommand()
                ->select('p.id,CONCAT(IFNULL(CONCAT(p.documento," "),""),IFNULL(CONCAT(p.nombres," "),""),IFNULL(p.apellidos,"")) as text')
                ->from('bautizo t')
                ->leftJoin('persona p', 'p.id=t.persona_id')
                ->where("p.documento like '$search_value%' OR CONCAT(IFNULL(CONCAT(p.nombres,' '),''),IFNULL(p.apellidos,'')) like '$search_value%'");
//                ->andWhere('t.estado = :estado', array(':estado' => Cuenta::ESTADO_ACTIVO));
//        $command->limit(10);
        return $command->queryAll();
    }

    public function de_persona($search_value) {
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

    public function obtenerTextoPadrinos() {

        $padrino = $this->padrino;
        $madrina = $this->madrina;
        $mensaje = null;
//        var_dump($padrino,$madrina);
        if ($padrino && $madrina) {
            $mensaje = "Fueron sus    padrinos   " . $padrino->campo_completo . "  y  " . $madrina->campo_completo;
        } else if ($padrino && !$madrina) {
            $mensaje = "Fue su  Padrino  " . $padrino->campo_completo . "";
        } else if ($madrina && !$padrino) {
            $mensaje = "Fue su  Madrina  " . $madrina->campo_completo . "";
        }
        echo $mensaje;




//        var_dump($padrino,$madrina);
    }

    public function obtenerBautizos($ano=null,$tomo=null) {
//        select Grupo, ID_Cota from vw_DatosClientes
        $consulta = Yii::app()->db->createCommand()
                ->select('t.id,
(select concat(p.nombres,"",p.apellidos)  from bautizo b join persona p on p.id=b.persona_id where t.id=b.id )as persona,
(select concat(p.nombres,"",p.apellidos)  from bautizo b join persona p on p.id=b.papa_id where t.id=b.id) as papa,
(select concat(p.nombres,"",p.apellidos)  from bautizo b join persona p on p.id=b.mama_id where t.id=b.id) as mama,
(select concat(p.nombres,"",p.apellidos)  from bautizo b join persona p on p.id=b.padrino_id where t.id=b.id) as padrino,
(select concat(p.nombres,"",p.apellidos)  from bautizo b join persona p on p.id=b.madrina_id where t.id=b.id) as madrina,
t.fecha_bautizo fecha,t.iglesia,t.feligreses_de,l.tomo,l.ano,t.pagina libro_pagina,t.numero libro_numero,t.nota,concat(pa.nombres," ",pa.apellidos) padre_parroquia
')
                ->from('bautizo t')
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
