<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    if(Yii::$app->user->isGuest){ ?>
        <center>
            <h3 style="margin-top: 150px;">Для того, чтобы оставить заявку, вам необходимо авторизоваться.</h3>
            <div class="kno">
                <a href="login"><button class="btn-hover color-2">Авторизация</button></a>
            </div>
        </center>
    <?php }else{ ?>
    <h3 style='margin-top: 30px;'>Анкета тренера</h3>
    <h6>Хотите присоединиться к нашей команде и стать одним из действующих тренеров? Оставляйте свою заявку, 
        после ее рассмотрения мы с вами свяжемся в течении 3 дней.</h6>
        <div style='margin-top: 30px;'>
            <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Имя, фамилия') ?>
                <?= $form->field($model, 'description')->textarea(['rows' => 4])->label('Описание предоставляемых услуг') ?>
                <?= $form->field($model, 'foto')->fileInput()->label('Фото') ?>
                <?= $form->field($model, 'pers')->checkbox(['label' => '<a href="http://pravo.gov.ru/proxy/ips/?docbody&nd=102108261">Согласие на обработку персональных данных</a>']) ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn butadm']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    <?php } ?>