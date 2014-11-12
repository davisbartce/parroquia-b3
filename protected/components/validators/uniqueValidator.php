<?php

class uniqueValidator extends CValidator {

    public $attributeName;
    public $quiet = false; //future bool for quiet validation error -->not complete

    /**
     * Validates the attribute of the object.
     * If there is any error, the error message is added to the object.
     * @param CModel $object the object being validated
     * @param string $attribute the attribute being validated
     */

    protected function validateAttribute($object, $attribute) {
//        var_dump($object);
        $persona=null;
        // build criteria from attribute(s) using Yii CDbCriteria
        $criteria = new CDbCriteria();
        foreach ($this->attributeName as $name) {
            
//            $varaibleTemporal=explode('/', $object->$name);
//            var_dump($object->$name);

           if($name=='fecha_nacimiento'){
               $object->$name=  Util::FormatDate($object->$name, 'Y-m-d');
            }
//            var_dump(checkdate(explode('/', $object->$name)));
            $criteria->addSearchCondition($name, $object->$name, false);
        }
//        var_dump($object->exists( $criteria ));
//        var_dump($criteria);
//        var_dump($criteria->condition);
//        var_dump($criteria->params);
       if($criteria->params)
        $persona = Persona::model()->find(array('condition' => $criteria->condition, 'params' => ($criteria->params)));

//        var_dump($persona->attributes);
//        var_dump(!isset($object->id));
//        die();

        // use exists with $criteria to check if the supplied keys combined are unique
//        if ( $object->exists( $criteria ) ) {
//         if($name=='fecha_nacimiento'){
//               $object->$name=  Util::FormatDate($object->$name, 'd-m-Y');
//            }
        if ($persona && !isset($object->id)) {
            
//            die('murio');
//            $this->addError($object, $attribute, $object->label() . ' ' .
            $this->addError($object, $attribute,
//                    $attribute . ' "' . $object->$attribute . '" !Ya existe una persona con estos datos¡.');
                   '!Ya existe una Persona con estos datos¡');
           
        }
    }

}
?>