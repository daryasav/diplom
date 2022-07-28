<?php
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;
    use yii\helpers\Html; 
    $parr = $this->params['par'];
?>
<div class="chat w-100 h-100">
    <div class="soob h-75" id="lasttenposts"> </div>
    <div class="message h-25">
        <?php $form = ActiveForm::begin(); ?>
            <?php if(Yii::$app->user->identity->id_role == '3'){ ?>
                <?= $form->field($mess, 'message')->textarea(['rows' => '3', 'class' => ''])->label('') ?>
                <div class="row" style="margin-top: -10px;">
                    <?= $form->field($mess, 'my_file')->fileInput(['class' => 'bbbb btn btn-light'])->label('') ?>
                    <?= Html::submitButton('Отправить', ['class' => 'bbbt', 'id' => 'refreshButton']) ?>
                </div>
            <?php }else{ ?>
                <textarea rows='3' class='text' name="Messages[message]"></textarea>
                <input type='button' class="button" value='Отправить' onclick="sendMessage(<?=$id?>, <?=$idus?>)">
            <?php } ?>
        <?php ActiveForm::end();?>
    </div>
</div>
