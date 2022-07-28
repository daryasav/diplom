<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\User;
?>

<div class="trainer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Имя, фамилия') ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6])->label('Описание') ?>
    <?= $form->field($model, 'foto')->fileInput()->label('Фото') ?>
    <?= $form->field($model, 'id_user')->dropDownList(ArrayHelper::map(User::find()->where(['id_role' => '3'])->all(), 'id', 'username'), (['class' => 'blbl']))->label('Пользователь') ?>
    <?= $form->field($model, 'ok')->dropDownList(['0' => 'Не активен', '1' => 'Активен'])->label('Активация ') ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success butadm']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>