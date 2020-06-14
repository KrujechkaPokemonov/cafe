<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $username
 * @property string $email
 * @property string $password
 * @property int $isadmin
 * @property int $ismoder
 * @property int $isnews
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
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
            [['isadmin', 'ismoder', 'isnews'], 'integer'],
            [['fio', 'password'], 'string', 'max' => 256],
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
            'fio' => 'ФИО',
            'username' => 'Логин',
            'email' => 'E-mail',
            'password' => 'Пароль',
            'isadmin' => 'Isadmin',
            'ismoder' => 'Ismoder',
            'isnews' => 'Isnews',
        ];
    }

    public static function findIdentity($id)
    {
        return User::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }

    public static function findByEmail($email)
    {
        return User::find()->where(['email'=>$email])->one();
    }

    public function validatePassword($password)
    {
        return ($this->password == $password) ? true : false;
    }

    public function create()
    {
        return $this->save(false);
    }
}
