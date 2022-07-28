<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Video */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="video-view" style="margin-top: 40px;">

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
                'attribute' => 'id_train',
                'label' => 'Направление',
                'format' => 'raw',
                'value' => function($data){
                    return $data->train->name;
                }
            ],
            [
                'attribute' => 'id_link',
                'label' => 'Видео',
                'format' => 'raw',
                'value' => function($data){
                    return "<video controls='controls' width='250px'><source src='/web/video/".$data->link->src."'></video>";
                }
            ],
            [
                'attribute' => 'num',
                'label' => 'Номер тренировки',
                'format' => 'raw',
            ],
            [
                'attribute' => 'description',
                'label' => 'Описание',
                'format' => 'raw',
            ],
            [
                'attribute' => 'whom',
                'label' => 'Для кого',
                'format' => 'raw',
            ],
            [
                'attribute' => 'compl',
                'label' => 'Сложность',
                'format' => 'raw',
            ],
        ],
    ]) ?>

</div>