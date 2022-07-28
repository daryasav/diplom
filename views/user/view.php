<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view" style="margin-top: 40px;">

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
            ]
        ],
    ]) ?>

</div>