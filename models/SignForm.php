<?php
    namespace app\models;
    use yii\db\ActiveRecord;

    class SignForm extends ActiveRecord{
        public static function tableName(){
            return 'user';
        }
        public $pers;
        public function rules(){
            return [
                [['name', 'username', 'password', 'lastname'], 'required', 'message' => 'Поле не может быть пустым'],
                ['username', 'unique', 'message'=>'Имя пользователя уже занято'],
                ['pers', 'compare', 'compareValue' => 1, 'message' => 'Необходимо согласие'],
                ['password', 'string', 'min' => '8', 'tooShort' => 'Пароль должен содержать как минимум 8 символов'],
                ['password', 'match', 'pattern' => '/^(?=.*[0-9])(?=.*[A-Z])([a-zA-Z0-9]+)$/', 'message' => 'Пароль должен содержать минимум 1 заглавную букву и 1 цифру.'],
                
            ];
        }
    }

?>