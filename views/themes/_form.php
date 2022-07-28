<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Themes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="themes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Название') ?>
    <?= $form->field($model, 'text')->textarea(['rows' => 6])->label('Текст') ?>
    <?= $form->field($model, 'foto')->fileInput()->label('Фото') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>