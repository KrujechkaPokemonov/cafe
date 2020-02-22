<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservation".
 *
 * @property int $id
 * @property int $id_lounge
 * @property string $name
 * @property string $phone
 * @property string $date
 * @property string $time
 * @property string $person
 * @property string $status
 *
 * @property Moderator[] $moderators
 * @property Lounge $lounge
 */
class Reservation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lounge', 'name', 'phone', 'date', 'time', 'person'], 'required'],
            [['id_lounge'], 'integer'],
            [['name', 'phone', 'date', 'time'], 'string', 'max' => 255],
            [['person'], 'string', 'max' => 4],
            [['status'], 'string', 'max' => 50],
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
            'id_lounge' => 'Зал',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'date' => 'Дата бронирования',
            'time' => 'Время бронирования',
            'person' => 'Кол-во персон',
            'status' => 'Статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModerators()
    {
        return $this->hasMany(Moderator::className(), ['id_reservation' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLounge()
    {
        return $this->hasOne(Lounge::className(), ['id' => 'id_lounge']);
    }
}
