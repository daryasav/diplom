<h2 style="margin-top: 40px;">Чаты</h2>
<!-- <div class="row"> -->
<?php
    if(Yii::$app->user->identity->id_role == '2'){ 
        foreach($chat as $val){ ?>
            <div class="row sms">
                <div class="col-md-11 col-sm-9 col-9">
                    <a id="chat<?=$val->id?>" href="personal?id=<?= $val->id ?>"><p style="padding: 15px 0 0 10px; font-size: 18px; "><?= $val->trainer->name ?></p></a>
                </div>
                <div class="col-md-1 col-sm-3 col-3">
                    <a href="delch?id=<?= $val->id ?>"><img src="/web/img/del.svg"  height="30px" style="margin-top: 10px; "></a>
                </div>
            </div>
<?php }} ?>
<!-- </div> -->

<!-- foreach($chat as $value){
        $tren = $value->trainer->name;
    } -->