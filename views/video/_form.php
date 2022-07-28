<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Train;
use app\models\Link;
?>

<div class="video-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_train')->dropDownList(ArrayHelper::map(Train::find()->all(), 'id', 'name'), (['class' => 'blbl']))->label('Направление') ?>
    <?= $form->field($model, 'id_link')->dropDownList(ArrayHelper::map(Link::find()->all(), 'id', 'src'), (['class' => 'blbl']))->label('Видео') ?>
    <?= $form->field($model, 'num')->textInput()->label('Номер') ?>
    <?= $form->field($model, 'description')->textInput()->label('Описание') ?>
    <?= $form->field($model, 'whom')->textInput()->label('Для кого') ?>
    <?= $form->field($model, 'compl')->textInput()->label('Сложность (из 10)') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success butadm']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>