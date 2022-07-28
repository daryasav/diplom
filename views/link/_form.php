<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="link-form">

    <?php $form = ActiveForm::begin(); ?>
    <br>
    <?= $form->field($model, 'video')->fileInput()->label('Видео') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success butadm']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>