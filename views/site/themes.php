<h2 style="margin-top: 40px;">Статьи</h2>
<?php
    use yii\widgets\LinkPager;
    use yii\helpers\Url;
?>
<center>
    <div class="row justify-content-center" style="margin-top: 20px;">
        <?php
            foreach($model as $one_news){
                $url = Url::to(['site/oneth', 'id' => $one_news->id]);
        ?>
            <div class="stt col-md-3 product-wrapper">
                <a href='<?= $url ?>'><div class="karr" style="background-image: url(/web/<?= $one_news->picture ?>);"></div></a>
                <p class='tre' style="color: #DC7326; font-size: 12px; margin: 10px 0 0 15px;"><?= $one_news->category ?></p>
                <h5 class="tree" style="font-size: 18px; margin: 10px 15px 0 15px;"><a style='color: black; text-decoration: none;' href='<?= $url ?> '><?= $one_news->title ?></a></h5>
                <a href="<?= $url ?>"><input type="submit" class="thbut" value="Читать"></a>
            </div>
        <?php } ?>
    </div>
</center>
<p style='clear: both;'><?= LinkPager::widget(['pagination' => $pages,]); ?></p>
