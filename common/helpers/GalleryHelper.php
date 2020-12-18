<?php

namespace common\helpers;

use common\models\Gallery;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class GalleryHelper
{
    public static function statusList()
    {
        return [
            Gallery::STATUS_WAIT => 'Wait',
            Gallery::STATUS_ACTIVE => 'Active',
        ];
    }

    public static function statusName($status)
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    public static function statusLabel($status)
    {
        switch ($status) {
            case Gallery::STATUS_WAIT:
                $class = 'label label-default';
                break;
            case Gallery::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            default:
                $class = 'label label-default';
        }

        return Html::tag('span', ArrayHelper::getValue(self::statusList(), $status), [
            'class' => $class,
        ]);
    }
}
