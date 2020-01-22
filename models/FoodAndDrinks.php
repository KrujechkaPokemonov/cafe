<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foodanddrinks".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 *
 * @property Administrator[] $administrators
 * @property Menu[] $menus
 */
class Foodanddrinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foodanddrinks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название блюда или напитка',
            'description' => 'Описание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdministrators()
    {
        return $this->hasMany(Administrator::className(), ['id_food_and_drinks' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['id_food_and_drinks' => 'id']);
    }
}
