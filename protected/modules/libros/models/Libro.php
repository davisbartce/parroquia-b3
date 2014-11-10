<?php

Yii::import('libros.models._base.BaseLibro');

class Libro extends BaseLibro
{
    /**
     * @return Libro
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Libro|Libros', $n);
    }

}