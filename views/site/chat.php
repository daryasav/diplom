<h2 style="margin-top: 40px;">Тренеры для консультации</h2>
<div class="row chgl justify-content-center">
        <div style='margin-top: 40px; padding: 60px 20px 40px 10px; text-align: center;' class='col chot'>
            <h5>Ты являешься тренером и хочешь предоставлять свои услуги на нашем сайте?</h5>
            <h6 style="margin-top: 25px;">Заполняй анкету, присылай её нам и получи возможность работать с клиентами уже завтра!</h6>
            <div class="kno">
                <a href="anketa"><button class="btn-hover color-2">Перейти</button></a>
            </div>
        </div>
    <?php
        use yii\helpers\Url;
        
        foreach($model as $val){ 
            $url = Url::to(['site/add', 'id' => $val->id]);
            if($val->ok == '1'){
                $idtr = $val->id;
    ?>
            <div class="row chot">
                <img class="trcar col" src="/web/img/<?= $val->img ?>">
                <div class="col">
                    <b><p style='word-wrap: break-word; color: black; font-size: 22px; margin: 20px 15px 0 10px;'> <?= $val->name ?></p></b>
                    <p style="color: black; font-size: 16px; margin: 10px 15px 0 10px; text-align: justify;"><?= $val->description ?> </p>
                    <?php if(Yii::$app->user->isGuest){ ?>
                        <p class="kkk"><a href="login"><button class="slide_from_left chbut" >Написать</button></a></p>
                    <?php }else{
                    ?>
                        <p class="kkk"><a href="<?= $url ?>"><button class="slide_from_left chbut" >Написать</button></a></p>
                    <?php } 
                    ?>
                </div>
            </div>
    <?php if($idtr == '2'){ ?>
        
    <?php }}}  ?>
</div>

