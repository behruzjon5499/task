<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $title_en
 * @property string|null $photo
 * @property int|null $category_id
 * @property string|null $description_ru
 * @property string|null $description_uz
 * @property string|null $description_en
 * @property int|null $status
 *
 * @property Categories $category
 */
class Portfolio extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'status'], 'integer'],
            [['description_ru', 'description_uz', 'description_en'], 'string'],
            [['title_ru', 'title_uz', 'title_en', 'photo'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif, bmp']

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
            'photo' => Yii::t('app', 'Photo'),
            'category_id' => Yii::t('app', 'Category ID'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_en' => Yii::t('app', 'Description En'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }
    public function updateModel($new=false){

        $post = Yii::$app->request->post();

        if($this->load($post) ) {

            if( $new ){ // если создается только один раз при создании
                //$this->date = time();
            }
            if( !$this->save() ){
                Yii::$app->session->setFlash('info-error','Ошибка при сохранении!');
                print_r($this->getErrors());
                exit;

                return true;
            }



            Yii::$app->session->setFlash('info-success',' успешно сохранена!');

            return true;
        }
        return false;

    }
    public function upload()
    {
        if ($this->validate()) {
            $name = Yii::$app->security->generateRandomString(10) . '.' . $this->image->extension;

            if ($this->photo !== null && !empty($this->photo)) {
                unlink(Yii::getAlias('@frontend').'/web/uploads/portfolio/' . $this->photo);
            }
            $this->photo = $name;
            $this->image->saveAs(Yii::getAlias('@frontend').'/web/uploads/portfolio/' . $name);
            return true;
        } else {
            return false;
        }
    }
}
