<?php

namespace app\models;

use Yii;


class Role extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'role';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id_role' => 'id']);
    }
}
