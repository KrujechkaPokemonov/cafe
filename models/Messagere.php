<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messagere".
 *
 * @property int $id
 * @property string $text
 * @property string $status
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
            [['text', 'status'], 'required'],
            [['text'], 'string'],
            [['status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'status' => 'Status',
        ];
    }
}
