<?php

namespace common\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "statistika".
 *
 * @property int $id
 * @property int $product_id
 * @property int $check
 * @property int $start_date
 * @property int $end_date
 * @property Products $product
 */
class Statistika extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statistika';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date'], 'required'],
            [['product_id'], 'integer'],
            [['start_date', 'end_date','check'], 'string'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }


    public function behaviors()
    {
        return [
            [
                'class' => AttributeBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['start_date'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['start_date'],
                ],
                'value' => function ($event) {
                    return strtotime($this->start_date);
                },
            ],
            [
                'class' => AttributeBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['end_date'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['end_date'],
                ],
                'value' => function ($event) {
                    return strtotime($this->end_date);
                },
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }
}
