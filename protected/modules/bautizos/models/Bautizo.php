<?php

Yii::import('bautizos.models._base.BaseBautizo');

class Bautizo extends BaseBautizo
{
    /**
     * @return Bautizo
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Bautizo|Bautizos', $n);
    }

}