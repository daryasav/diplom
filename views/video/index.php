<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Video;

$this->title = 'Тренировки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-index" style="margin-top: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить тренировку', ['create'], ['class' => 'btn btn-success butadm']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
                'attribute' => 'description',
                'label' => 'Описание',
                'format' => 'raw',
            ],
            //'whom',
            //'compl',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Video $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>