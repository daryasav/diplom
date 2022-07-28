<?php

namespace app\models;

use Yii;

class Link extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'link';
    }
    public $video;
    public function rules()
    {
        return [
            ['video', 'file', 'extensions' => 'mp4'],
            [['src'], 'string', 'max' => 100],
        ];
    }

    public function getVideos()
    {
        return $this->hasMany(Video::className(), ['id_link' => 'id']);
    }
}
