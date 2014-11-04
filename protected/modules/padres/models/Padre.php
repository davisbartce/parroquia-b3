<?php

Yii::import('padres.models._base.BasePadre');

class Padre extends BasePadre
{
    /**
     * @return Padre
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Padre|Padres', $n);
    }

}