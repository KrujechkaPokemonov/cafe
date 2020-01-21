<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "moderator".
 *
 * @property int $id
 * @property int $id_reservation
 * @property string $name
 * @property string $email
 * @property string $password
 *
 * @property Reservation $reservation
 */
class Moderator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'moderator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_reservation'], 'integer'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['password'], 'unique'],
            [['id_reservation'], 'exist', 'skipOnError' => true, 'targetClass' => Reservation::className(), 'targetAttribute' => ['id_reservation' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_reservation' => 'Id Reservation',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservation()
    {
        return $this->hasOne(Reservation::className(), ['id' => 'id_reservation']);
    }
}
