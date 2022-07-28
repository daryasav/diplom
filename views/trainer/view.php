<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Trainers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="trainer-view" style="margin-top: 40px;">

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
                    return "<img height='110px' src='/web/img/".$data->img."'>";
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
                'attribute' => 'ok',
                'label' => 'Активация',
                'format' => 'raw',
                'value' => function($data){
                    if($data->ok == '1'){
                        return 'Активен';
                    }else{
                        return 'Не активен';
                    }
                }
            ],
        ],
    ]) ?>

</div>