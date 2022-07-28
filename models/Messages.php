<?php

namespace app\models;

use Yii;

class Messages extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'messages';
    }

    public $my_file;

    public function rules()
    {
        return [
            [['message'], 'required', 'message' => ''],
            [['datetime'], 'safe'],
            // [['id_user', 'id_chat'], 'integer'],
            [['message'], 'string'],
            // [['file'], 'string', 'max' => 100],
            ['my_file', 'file', 'extensions' => 'mp4'],
            [['id_chat'], 'exist', 'skipOnError' => true, 'targetClass' => Chat::className(), 'targetAttribute' => ['id_chat' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }


    public function getChat()
    {
        return $this->hasOne(Chat::className(), ['id' => 'id_chat']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
