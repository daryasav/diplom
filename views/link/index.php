<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Link;

$this->title = 'Видео';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="link-index" style="margin-top: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить видео', ['create'], ['class' => 'btn btn-success butadm']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'src',
                'label' => 'Видео',
                'format' => 'raw',
                'value' => function($data){
                    return "<video controls='controls' width='300px'><source src='/web/video/".$data->src."'></video>";
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Link $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>