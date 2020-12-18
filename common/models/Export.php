<?php

namespace common\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "export".
 *
 * @property int $id
 * @property int $product_id
 * @property string $price
 * @property string $size
 * @property int $date
 * @property string|null $party
 * @property int|null $status
 *
 * @property Products $product
 */
class Export extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'export';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'price', 'size','date'], 'required'],
            [['product_id', 'status'], 'integer'],
            [['date'], 'string'],
            [['price', 'size', 'party'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => AttributeBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['date'],
                ],
                'value' => function ($event) {
                    return strtotime($this->date);
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
            'price' => Yii::t('app', 'Price'),
            'size' => Yii::t('app', 'Size'),
            'date' => Yii::t('app', 'Date'),
            'party' => Yii::t('app', 'Party'),
            'status' => Yii::t('app', 'Status'),
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
