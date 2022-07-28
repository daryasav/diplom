<h2 style="margin-top: 40px;">Программы тренировок онлайн</h2>
<center>
    <div class="bl row justify-content-center">
        <?php
            use yii\helpers\Url;
            foreach($model as $val){
                $url = Url::to(['site/trainone', 'id' => $val->id, 'num' => '1']);
        ?>
            <div class="block col-md-3 product-wrapper">
                <img class="kart" src="/web/img/<?= $val->img ?>">
                <p class='tre' style="color: gray; font-size: 12px; margin: 10px 0 0 15px;"><?= $val->theme ?></p>
                <p class='tre' style='word-wrap: break-word; color: black; font-size: 18px; margin: 10px 15px 0 15px;'> <?= $val->name ?></p>
                <p class='tre' style="color: rgb(70, 70, 70); font-size: 14px; margin: 10px 15px 0 15px;"><?= $val->description ?> </p>
                <div style="text-align: left; margin: 15px 0 0 15px;">
                    <img src="/web/img/svg5.svg" height="25px" >
                    <p style="color: #DC7326; font-size: 13px; font-weight: 600; margin: -20px 0 0 30px;"> <?= $val->count ?> тренировок</p>
                </div>
                    <a href="<?= $url ?>"><input type="submit" class="trbut" id="<?= $val->id ?>" value="Подробнее"></a>

            </div>
            <?php 
            if($val->id == '7'){  ?>
                <div class="block col-md-3 product-wrapper">
                    <p class='tre' style='word-wrap: break-word; text-align: center; font-size: 18px; margin: 160px 15px 0 15px;'> Есть противопоказания? </p>
                    <p class='tre' style="text-align: center; font-size: 14px; margin: 20px 15px 0 15px;">Заполните форму и узнайте каким спортом вам предпочтительнее заниматься!</p>
                    <a href="prot"><input type="submit" class="consbut" value="Заполнить"></a>
                </div>
           <?php }}
        ?>
    </div>
</center>
<!-- нужны универсальные тренировки? Заполните форму противопоказаний и узнайте каким спортом вам лучше всего заниматься  -->  