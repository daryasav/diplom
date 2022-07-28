<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>
<div class="formlog">
    <h3 class="zaglog">Авторизация</h3>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
    ]); ?>
        <div class="login">
            <?= $form->field($model, 'username', ['options'=>(['class' => 'str'])])->textInput()->label('Логин') ?>

            <?= $form->field($model, 'password', ['options'=>(['class' => 'str-2'])])->passwordInput()->label('Пароль') ?>
        </div>
        <div>
            <?= Html::submitButton('Вход', ['class' => 'butlog', 'id' => 'buttlog']) ?>
        </div>

    <?php ActiveForm::end(); ?>
    <h6 style="margin-top: 20px;">Нет аккаунта? <a class="loglink" href="sign">Зарегистрироваться</a></h6>
</div>