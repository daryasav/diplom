<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Video */

$this->title = 'Добавить тренировку';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create" style="margin-top: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>