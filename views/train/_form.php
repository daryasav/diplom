<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="train-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Название') ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true])->label('Описание') ?>
    <?= $form->field($model, 'theme')->textInput(['maxlength' => true])->label('Тема') ?>
    <?= $form->field($model, 'foto')->fileInput()->label('Фото') ?>
    <?= $form->field($model, 'count')->textInput()->label('Количество') ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success butadm']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>