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
 * @property string $email
 * @property int $id_booktable
 * @property string $status
 *
 * @property Lounge $lounge
 * @property Booktable $booktable
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
            [['id_lounge', 'name', 'phone', 'date', 'time', 'person', 'email', 'id_booktable'], 'required'],
            [['id_lounge', 'id_booktable'], 'integer'],
            [['name', 'phone', 'date', 'time', 'email'], 'string', 'max' => 255],
            [['person'], 'string', 'max' => 4],
            [['status'], 'string', 'max' => 50],
            [['id_lounge'], 'exist', 'skipOnError' => true, 'targetClass' => Lounge::className(), 'targetAttribute' => ['id_lounge' => 'id']],
            [['id_booktable'], 'exist', 'skipOnError' => true, 'targetClass' => Booktable::className(), 'targetAttribute' => ['id_booktable' => 'id']],
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
            'time' => 'Время',
            'person' => 'Кол-во персон',
            'email' => 'E-mail',
            'id_booktable' => 'Стол',
            'status' => 'Статус',
        ];
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
    public function getBooktable()
    {
        return $this->hasOne(Booktable::className(), ['id' => 'id_booktable']);
    }

    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'id_status']);
    }
}
