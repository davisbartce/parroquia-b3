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
     const COMUNIONES = 'PRIMERAS COMUNIONES';
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Libro|Libros', $n);
    }
    
    
      public function relations() {
        return array(
            'LibroBautizos' => array(self::HAS_MANY, 'Bautizo', 'tomo_id'),
            'LibroMatrimonios' => array(self::HAS_MANY, 'Matrimonio', 'tomo_id'),
            'LibroComuniones' => array(self::HAS_MANY, 'Comunion', 'tomo_id'),
            'LibroConfirmaciones' => array(self::HAS_MANY, 'Confirmacion', 'tomo_id'),
//            'LibroBautizos' => array(self::BELONGS_TO, 'Bautizo', array('id' => 'tomo_id')),
           
        );
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
    
    public function validarDependencias(){
//        $count=true;
        $count=count($this->LibroBautizos);
        $count1=count($this->LibroMatrimonios);
        $count2=count($this->LibroComuniones);
        $count3=count($this->LibroConfirmaciones);
//        var_dump($count);
//        var_dump($count1);
//        var_dump($count2);
//        var_dump($count3);
        $count=$count+$count1+$count2+$count3;
//        $count2=count($this->testigosMatrimonios1)+
//                count($this->testigosMatrimonios2)+
//                count($this->testigosMatrimonios3)+count($this->testigosMatrimonios4);
////        var_dump(count($this->testigosMatrimonios1));
////        var_dump(count($this->testigosMatrimonios2));
////        var_dump(count($this->testigosMatrimonios3));
////        var_dump(count($this->testigosMatrimonios4));
//        $count=$count+$count2;
//        die();
//        var_dump($this->matrimoniosNovio);
//        var_dump($this->matrimoniosNovia);
//        var_dump($this->confirmaciones);
        return ($count > 0) ? false : true ;
    }
    

}