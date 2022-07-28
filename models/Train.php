<?php

namespace app\models;

use Yii;

class Train extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'train';
    }
    public $foto;
    public function rules()
    {
        return [
            [['name', 'description', 'theme', 'count'], 'required'],
            [['description'], 'string', 'max' => 200],
            [['foto'], 'image', 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    public function getVideos()
    {
        return $this->hasMany(Video::className(), ['id_train' => 'id']);
    }
}
