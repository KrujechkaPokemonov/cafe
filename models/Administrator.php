<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrator".
 *
 * @property int $id
 * @property int $id_lounge
 * @property int $id_menu
 * @property int $id_food_and_drinks
 * @property string $name
 * @property string $email
 * @property string $password
 *
 * @property Foodanddrinks $foodAndDrinks
 * @property Lounge $lounge
 * @property Menu $menu
 * @property Advertiser[] $advertisers
 */
class Administrator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'administrator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lounge', 'id_menu', 'id_food_and_drinks'], 'required'],
            [['id_lounge', 'id_menu', 'id_food_and_drinks'], 'integer'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['password'], 'unique'],
            [['id_food_and_drinks'], 'exist', 'skipOnError' => true, 'targetClass' => Foodanddrinks::className(), 'targetAttribute' => ['id_food_and_drinks' => 'id']],
            [['id_lounge'], 'exist', 'skipOnError' => true, 'targetClass' => Lounge::className(), 'targetAttribute' => ['id_lounge' => 'id']],
            [['id_menu'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['id_menu' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_lounge' => 'Id Lounge',
            'id_menu' => 'Id Menu',
            'id_food_and_drinks' => 'Id Food And Drinks',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoodAndDrinks()
    {
        return $this->hasOne(Foodanddrinks::className(), ['id' => 'id_food_and_drinks']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLounge()
    {
        return $this->hasOne(Lounge::className(), ['id' => 'id_lounge']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'id_menu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvertisers()
    {
        return $this->hasMany(Advertiser::className(), ['id_administrator' => 'id']);
    }
}
