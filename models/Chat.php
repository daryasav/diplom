<?php

namespace app\models;

use Yii;


class Chat extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'chat';
    }

    public function rules()
    {
        return [
            [['id_user', 'id_trainer'], 'required'],
            [['id_user', 'id_trainer'], 'integer'],
            // [['id_trainer'], 'exist', 'skipOnError' => true, 'targetClass' => Trainer::className(), 'targetAttribute' => ['id_trainer' => 'id']],
            // [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_trainer' => 'Id Trainer',
        ];
    }

    public function getMessages()
    {
        return $this->hasMany(Messages::className(), ['id_chat' => 'id']);
    }

    public function getTrainer()
    {
        return $this->hasOne(Trainer::className(), ['id' => 'id_trainer']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
