<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Train;

$this->title = 'Направления';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="train-index" style="margin-top: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать направление', ['create'], ['class' => 'btn btn-success butadm']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
                'attribute' => 'img',
                'label' => 'Фото',
                'format' => 'raw',
                'value' => function($data){
                    return "<img height='90px' src='/web/img/".$data->img."'>";
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Train $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>