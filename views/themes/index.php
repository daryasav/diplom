<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Themes;

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="themes-index" style="margin-top: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать статью', ['create'], ['class' => 'btn btn-success butadm']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
                    return "<img height='90px' src='/web/".$data->picture."'>";
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Themes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
