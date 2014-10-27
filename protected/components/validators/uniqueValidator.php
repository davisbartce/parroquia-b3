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
        // build criteria from attribute(s) using Yii CDbCriteria
        $criteria = new CDbCriteria();
        foreach ($this->attributeName as $name) {
            
//            $varaibleTemporal=explode('/', $object->$name);
            var_dump($object->$name);

           if($name=='fecha_nacimiento'){
               $object->$name=  Util::FormatDate($object->$name, 'Y/m/d');
            }
//            var_dump(checkdate(explode('/', $object->$name)));
            $criteria->addSearchCondition($name, $object->$name, false);
        }
//        var_dump($object->exists( $criteria ));
        var_dump($criteria);

        $persona = Persona::model()->find(array('condition' => $criteria->condition, 'params' => ($criteria->params)));

//        var_dump($persona);
        die();

        // use exists with $criteria to check if the supplied keys combined are unique
//        if ( $object->exists( $criteria ) ) {
        if ($persona) {
            die('murio');
            $this->addError($object, $attribute, $object->label() . ' ' .
                    $attribute . ' "' . $object->$attribute . '" has already been taken.');
        }
    }

}
?>