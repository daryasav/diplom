<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Role;
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label('Логин') ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true])->label('Пароль') ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Имя') ?>
    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true])->label('Фамилия') ?>
    <?= $form->field($model, 'id_role')->dropDownList(ArrayHelper::map(Role::find()->all(), 'id', 'name'), (['class' => 'blbl']))->label('Роль') ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success butadm']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>