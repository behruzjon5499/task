<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "skill".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $title_en
 * @property int|null $foiz
 *  * @property int|null $color
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['foiz'], 'integer'],
            [['title_ru', 'title_uz', 'title_en','color'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'foiz' => Yii::t('app', 'Foiz'),
            'color' => Yii::t('app', 'Color'),
        ];
    }
}
