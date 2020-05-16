<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $auth_key
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'username', 'email', 'password'], 'required'],
            [['fio', 'password', 'auth_key'], 'string', 'max' => 256],
            [['username'], 'string', 'max' => 64],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
        ];
    }
}
