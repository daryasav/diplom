<?php

namespace app\models;

use Yii;

class Themes extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'themes';
    }
    public $foto;
    public function rules()
    {
        return [
            [['title', 'text', 'picture', 'category'], 'required'],
            [['text'], 'string'],
            [['title', 'category'], 'string', 'max' => 100],
            [['foto'], 'image', 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'picture' => 'Picture',
            'category' => 'Category',
        ];
    }
}
