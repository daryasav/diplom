<?php
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;
    use yii\helpers\Html; 
    $url = Url::to(['/site/personal', 'id' => $id]);
    $parr = $this->params['par'];
?>
<script>
    var id_p = '<?=$id?>';
</script>

<div style="padding-top: 30px;" class="chat h-100">
    <div class="soob hide-scrollbar" id="lasttenposts"> </div>
    <div class="message" >
        <?php $form = ActiveForm::begin(); ?>
            <?php if(Yii::$app->user->identity->id_role == '3'){ ?>
                <?= $form->field($mess, 'message', ['inputOptions' => ['autofocus' => 'autofocus']])->textarea(['rows' => '3', 'class' => 'text textt mess'])->label('') ?>
                <div style="margin-top: -10px;">
                    <?= $form->field($mess, 'my_file')->fileInput(['class' => 'tog1 btn-light'])->label('') ?>
                    <?= Html::submitButton('Отправить', ['class' => 'tog']) ?>
                </div>
            <?php }else{ ?>
                <textarea rows='3' class='text mess' name="Messages[message]"></textarea>
                <input type='button' class="button" value='Отправить' onclick="sendMessage(<?=$id?>, <?=$idus?>)">
            <?php } ?>
        <?php ActiveForm::end();?>
    </div>
</div>

