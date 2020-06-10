<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booktable".
 *
 * @property int $id
 * @property int $id_lounge
 * @property string $title
 *
 * @property Lounge $lounge
 */
class Booktable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booktable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lounge', 'title'], 'required'],
            [['id_lounge'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['id_lounge'], 'exist', 'skipOnError' => true, 'targetClass' => Lounge::className(), 'targetAttribute' => ['id_lounge' => 'id']],
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
            'title' => 'Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLounge()
    {
        return $this->hasOne(Lounge::className(), ['id' => 'id_lounge']);
    }
}
