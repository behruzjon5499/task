<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $title_en
 * @property string|null $photo
 * @property string|null $description_ru
 * @property string|null $description_uz
 * @property string|null $description_en
 */
class About extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_ru', 'description_uz', 'description_en'], 'string'],
            [['title_ru', 'title_uz', 'title_en', 'photo'], 'string', 'max' => 255],
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
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_en' => Yii::t('app', 'Description En'),
        ];
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
                unlink(Yii::getAlias('@frontend').'/web/uploads/about/' . $this->photo);
            }
            $this->photo = $name;
            $this->image->saveAs(Yii::getAlias('@frontend').'/web/uploads/about/' . $name);
            return true;
        } else {
            return false;
        }
    }
}
