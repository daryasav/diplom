<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Trainer;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrainerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тренера';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainer-index" style="margin-top: 40px;">


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить тренера', ['create'], ['class' => 'btn btn-success butadm']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'label' => 'ФИО',
                'format' => 'raw',
            ],
            [
                'attribute' => 'description',
                'label' => 'Описание',
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
                'attribute' => 'id_user',
                'label' => 'Пользователь',
                'format' => 'raw',
                'value' => function($data){
                    return $data->user->username;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Trainer $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>