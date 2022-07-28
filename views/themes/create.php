<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Themes */

$this->title = 'Создать статью';
$this->params['breadcrumbs'][] = ['label' => 'Themes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="themes-create" style="margin-top: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
