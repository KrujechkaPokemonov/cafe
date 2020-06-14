<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messagere".
 *
 * @property int $id
 * @property string $text
 *
 * @property Messageread[] $messagereads
 */
class Messagere extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messagere';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [

            'text' => 'Текст',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessagereads()
    {
        return $this->hasMany(Messageread::className(), ['id_messagere' => 'id']);
    }
}
