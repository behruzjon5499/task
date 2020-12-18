<?php

namespace common\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yiidreamteam\upload\ImageUploadBehavior;

/**
 * This is the model class for table "import".
 *
 * @property int $id
 * @property int|null $product_id
 * @property string $price
 * @property string $size
 *  * @property string $now_size
 * @property int $date
 *  * @property int $type
 * @property string|null $party
 * @property int|null $status
 * @property Products $product
 */
class Import extends \yii\db\ActiveRecord
{

    public $title;
    public $summa;
    public $foyda;
    public $xarajat;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'import';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'status','type'], 'integer'],
            [['price', 'size','date','type'], 'required'],
            [['date'], 'string'],
            [['price', 'size', 'party','now_size'], 'string', 'max' => 255],
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
            'now_size' => Yii::t('app', 'Now Size'),
            'date' => Yii::t('app', 'Date'),
            'type' => Yii::t('app', 'Type'),
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
