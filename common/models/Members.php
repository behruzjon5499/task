<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "members".
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $lovozimi
 * @property string|null $phone
 * @property string|null $photo
 * @property string|null $telegram
 * @property string|null $instagram
 * @property string|null $facebook
 */
class Members extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'lovozimi', 'phone', 'photo', 'telegram', 'instagram', 'facebook'], 'string', 'max' => 255],
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
            'full_name' => Yii::t('app', 'Full Name'),
            'lovozimi' => Yii::t('app', 'Lovozimi'),
            'phone' => Yii::t('app', 'Phone'),
            'photo' => Yii::t('app', 'Photo'),
            'telegram' => Yii::t('app', 'Telegram'),
            'instagram' => Yii::t('app', 'Instagram'),
            'facebook' => Yii::t('app', 'Facebook'),
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
                unlink(Yii::getAlias('@frontend').'/web/uploads/members/' . $this->photo);
            }
            $this->photo = $name;
            $this->image->saveAs(Yii::getAlias('@frontend').'/web/uploads/members/' . $name);
            return true;
        } else {
            return false;
        }
    }
}
