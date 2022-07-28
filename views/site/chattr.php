<h2 style="margin-top: 40px;">Чаты</h2>
<?php
    if(Yii::$app->user->identity->id_role == '3'){
        foreach($chat as $val){ ?>
            <div class="row sms">
                <div class="col-md-11 col-sm-9 col-9">
                    <a href="personal?id=<?= $val->id ?>"><p style="padding: 15px 0 0 10px; font-size: 18px; "><?= $val->user->name ?>  <?= $val->user->lastname ?></p></a>
                </div>
                <div class="col-md-1 col-sm-3 col-3">
                    <a href="delch?id=<?= $val->id ?>"><img src="/web/img/del.svg"  height="30px" style="margin-top: 10px; "></a>
                </div>
            </div>
<?php }} ?>