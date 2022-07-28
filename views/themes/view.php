<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Themes */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Themes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="themes-view" style="margin-top: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>

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
                'attribute' => 'title',
                'label' => 'Название',
                'format' => 'raw',
            ],
            [
                'attribute' => 'text',
                'label' => 'Текст',
                'format' => 'raw',
            ],
            [
                'attribute' => 'picture',
                'label' => 'Фото',
                'format' => 'raw',
                'value' => function($data){
                    return "<img height='110px' src='/web/".$data->picture."'>";
                }
            ],
        ],
    ]) ?>

</div>
