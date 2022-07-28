<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Train */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Trains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="train-view" style="margin-top: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'name',
                'label' => 'Название',
                'format' => 'raw',
            ],
            [
                'attribute' => 'description',
                'label' => 'Описание',
                'format' => 'raw',
            ],
            [
                'attribute' => 'theme',
                'label' => 'Тема',
                'format' => 'raw',
            ],
            [
                'attribute' => 'count',
                'label' => 'Количество',
                'format' => 'raw',
            ],
            [
                'attribute' => 'img',
                'label' => 'Фото',
                'format' => 'raw',
                'value' => function($data){
                    return "<img height='110px' src='/web/img/".$data->img."'>";
                }
            ],
        ],
    ]) ?>

</div>