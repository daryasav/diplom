<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\User;

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index" style="margin-top: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать пользователя', ['create'], ['class' => 'btn btn-success butadm']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'username',
                'label' => 'Логин',
                'format' => 'raw',
            ],
            [
                'attribute' => 'name',
                'label' => 'Имя',
                'format' => 'raw',
            ],
            [
                'attribute' => 'lastname',
                'label' => 'Фамилия',
                'format' => 'raw',
            ],
            [
                'attribute' => 'id_role',
                'label' => 'Роль',
                'format' => 'raw',
                'value' => function($data){
                    return $data->role->name;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, User $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>