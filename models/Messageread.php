<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messageread".
 *
 * @property int $id
 * @property int $id_messagere
 * @property int $id_status
 */
class Messageread extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messageread';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_messagere', 'id_status'], 'required'],
            [['id_messagere', 'id_status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_messagere' => 'Сообщения',
            'id_status' => 'Статус',
        ];
    }

    public function getMessagere()
    {
        return $this->hasOne(Messagere::className(), ['id' => 'id_messagere']);
    }

    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'id_status']);
    }
}
