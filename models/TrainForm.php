<?php

namespace app\models;

use Yii;

class TrainForm extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'trainer';
    }
    public $foto, $pers;
    public function rules()
    {
        return [
            [['name', 'description'], 'required', 'message' => 'Поле необходимо заполнить'],
            [['description'], 'string'],
            [['ok'], 'integer'],
            ['pers', 'compare', 'compareValue' => 1, 'message' => 'Необходимо согласие'],
            [['name'], 'string', 'max' => 150],
            ['foto', 'image', 'extensions' => 'png, jpg, jpeg'],
        ];
    }
}
