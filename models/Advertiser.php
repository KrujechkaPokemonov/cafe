<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "advertiser".
 *
 * @property int $id
 * @property int $id_administrator
 * @property int $id_news
 * @property string $name
 * @property string $email
 * @property string $password
 *
 * @property Administrator $administrator
 * @property News $news
 */
class Advertiser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advertiser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_administrator', 'id_news'], 'required'],
            [['id_administrator', 'id_news'], 'integer'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['password'], 'unique'],
            [['id_administrator'], 'exist', 'skipOnError' => true, 'targetClass' => Administrator::className(), 'targetAttribute' => ['id_administrator' => 'id']],
            [['id_news'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['id_news' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_administrator' => 'Id Administrator',
            'id_news' => 'Id News',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdministrator()
    {
        return $this->hasOne(Administrator::className(), ['id' => 'id_administrator']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['id' => 'id_news']);
    }
}
