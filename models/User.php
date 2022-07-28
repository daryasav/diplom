<?php

namespace app\models;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{


    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }


    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        // return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        // return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }

    public function rules()
    {
        return [
            [['username', 'password', 'name', 'lastname'], 'required'],
            [['id_role'], 'integer'],
            [['username', 'password', 'name', 'lastname'], 'string', 'max' => 100],
    
            // [['id_trainer'], 'exist', 'skipOnError' => true, 'targetClass' => Trainer::className(), 'targetAttribute' => ['id_trainer' => 'id']],
        ];
    }
    public function getTrainer()
    {
        return $this->hasOne(Trainer::className(), ['id' => 'id_trainer']);
    }

    public function getChats()
    {
        return $this->hasMany(Chat::className(), ['id_user' => 'id']);
    }
    
    public function getMessages()
    {
        return $this->hasMany(Messages::className(), ['id_user' => 'id']);
    }

    public function getTrainers()
    {
        return $this->hasMany(Trainer::className(), ['id_user' => 'id']);
    }
    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'id_role']);
    }
}
