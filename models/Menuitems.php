<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menuitems".
 *
 * @property int $id
 * @property string $name
 * @property int $parent
 *
 * @property Menuitems $parent0
 * @property Menuitems[] $menuitems
 */
class Menuitems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menuitems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['parent'], 'exist', 'skipOnError' => true, 'targetClass' => Menuitems::className(), 'targetAttribute' => ['parent' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'parent' => 'Родитель',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent0()
    {
        return $this->hasOne(Menuitems::className(), ['id' => 'parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuitems()
    {
        return $this->hasMany(Menuitems::className(), ['parent' => 'id']);
    }
}
