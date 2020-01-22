<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property int $id_food_and_drinks
 * @property string $menu_categories
 * @property string $menu_classifications
 *
 * @property Administrator[] $administrators
 * @property Foodanddrinks $foodAndDrinks
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_food_and_drinks'], 'integer'],
            [['menu_categories', 'menu_classifications'], 'string', 'max' => 255],
            [['id_food_and_drinks'], 'exist', 'skipOnError' => true, 'targetClass' => Foodanddrinks::className(), 'targetAttribute' => ['id_food_and_drinks' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_food_and_drinks' => 'Id Food And Drinks',
            'menu_categories' => 'Категории меню',
            'menu_classifications' => 'Классификации меню',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdministrators()
    {
        return $this->hasMany(Administrator::className(), ['id_menu' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoodAndDrinks()
    {
        return $this->hasOne(Foodanddrinks::className(), ['id' => 'id_food_and_drinks']);
    }
}
