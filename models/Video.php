<?php

namespace app\models;

use Yii;

class Video extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'video';
    }

    public function rules()
    {
        return [
            [['id_train','id_link', 'description','num', 'whom', 'compl'], 'required'],
            [['id_train'], 'exist', 'skipOnError' => true, 'targetClass' => Train::className(), 'targetAttribute' => ['id_train' => 'id']],
        ];
    }

    public function getTrain()
    {
        return $this->hasOne(Train::className(), ['id' => 'id_train']);
    }
    
    public function getLink()
    {
        return $this->hasOne(Link::className(), ['id' => 'id_link']);
    }
}
