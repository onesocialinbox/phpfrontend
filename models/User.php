<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $authKey
 * @property string $password_reset_token
 * @property string $user_level
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],
            [['username', 'password', 'authKey', 'password_reset_token'], 'string', 'max' => 250],
            [['email'], 'string', 'max' => 500],
            [['user_level'], 'string', 'max' => 50],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'User Name',
            'email' => 'Email',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'user_level' => 'User Level',
        ];
    }

    public static function findIdentity($id) {
        $user = self::find()->where(["id" => $id])->one();
        /*if (!count($user)) {
            return null;
        }*/
        return new static($user);
    }
     
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $userType = null) {
     
        $user = self::find()
                ->where(["accessToken" => $token])
                ->one();
        if (!count($user)) {
            return null;
        }
        return new static($user);
    }
     
    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username) {
        $user = self::find()->where(["username" => $username])->one();
        /*if (!count($user)) {
            return null;
        }*/
        return new static($user);
    }
     
    public static function findByUser($username) {
        $user = self::find()
                ->where([
                    "username" => $username
                ])
                ->one();
        if (!count($user)) {
            return null;
        }
        return $user;
    }
     
    /**
     * @inheritdoc
     */
    public function getId() {
        return $this->id;
    }
     
    /**
     * @inheritdoc
     */
    public function getAuthKey() {
        return $this->authKey;
    }
     
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey) {
        return $this->authKey === $authKey;
    }
     
    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password) {
        return $this->password ===  md5($password);
    }
}
