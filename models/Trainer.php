<?php

namespace app\models;

use Yii;

class Trainer extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'trainer';
    }
    public $foto;
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['ok'], 'integer'],
            [['name'], 'string', 'max' => 150],
            [['foto'], 'image', 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    public function getChats()
    {
        return $this->hasMany(Chat::className(), ['id_trainer' => 'id']);
    }
}
