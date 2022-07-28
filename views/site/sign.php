<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;

    $form = ActiveForm::begin([
        'id' => 'test-form',
    ])
?>
<h3 style="margin-top: 40px;">Регистрация</h3>
<div class="signform row">
    <?= $form->field($model, 'name', ['options'=>(['class' => 'str-1 col-md-6'])])->textInput()->label('Имя') ?>
    <?= $form->field($model, 'lastname', ['options'=>(['class' => 'str-1 col-md-6'])])->textInput()->label('Фамилия') ?>
    <?= $form->field($model, 'username', ['options'=>(['class' => 'str-1 col-md-6'])])->textInput()->label('Логин') ?>
    <?= $form->field($model, 'password', ['options'=>(['class' => 'str-1 col-md-6'])])->passwordInput()->label('Пароль') ?>
    <?= $form->field($model, 'pers', ['options'=>(['class' => 'str-1 col-md-6'])])->checkbox(['label' => '<a href="http://pravo.gov.ru/proxy/ips/?docbody&nd=102108261">Согласие на обработку персональных данных</a>']) ?>
</div>
<?= Html::submitButton('Зарегистрироваться', ['class' => 'butsign']) ?>
<?php ActiveForm::end(); ?> <br><br>