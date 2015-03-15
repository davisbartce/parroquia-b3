<?php

Yii::import('libros.models._base.BaseLibro');

class Libro extends BaseLibro
{
    /**
     * @return Libro
     */
     const MATRIMONIOS = 'MATRIMONIOS';
     const BAUTIZOS = 'BAUTIZOS';
     const CONFIRMACIONES = 'CONFIRMACIONES';
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Libro|Libros', $n);
    }
    
     public function scopes() {
        return array(
//            'activos' => array(
//                'condition' => 't.email_1 IS NOT NULL OR t.email_2 IS NOT NULL',
//            ),
            'ordenPorAnio' => array(
                'order' => 'concat(t.ano) desc',
            ),
        );
    }
    
    public function rules() {
        return array(
            array('ano, tomo, tipo', 'required'),
            array('ano', 'length', 'max'=>4),
            array('tomo', 'ComprobarLibro'),
            
            array('tomo', 'length', 'max'=>45),
            array('tipo', 'length', 'max'=>19),
            array('tipo', 'in', 'range' => array('BAUTIZOS','MATRIMONIOS','CONFIRMACIONES','PRIMERAS COMUNIONES')), // enum,
            array('id, ano, tomo, tipo', 'safe', 'on'=>'search'),
        );
    }
    
     public function de_tipo($tipo) {
        $this->getDbCriteria()->mergeWith(
                array(
                    'condition' => 't.tipo = :tipo',
                    'params' => array(
                        ':tipo' => $tipo
                    ),
                )
        );
        return $this;
    }
    
    public function ComprobarLibro($attribute, $params) {
        if (!empty($this->attributes['ano']) && !empty($this->attributes['tipo']) && !empty($this->attributes['tomo'])) {
            
            $libroBusqueda=  Libro::model()->findByAttributes(array(
                'ano'=>$this->attributes['ano'],
                'tomo'=>$this->attributes['tomo'],
                'tipo'=>$this->attributes['tipo'],
                
                ));
//                var_dump($libroBusqueda);
//                die();
            if ($libroBusqueda) {
                        $this->addError($attribute, 'Este tomo ya existe.');
            }
        }
    }
    

}