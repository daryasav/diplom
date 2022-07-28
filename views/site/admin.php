<?php
    if(Yii::$app->user->identity->id_role == '1'){?>
    <h2 style="margin-top: 40px;">Админ-панель</h2>
    <div class="row justify-content-center">
        <div style="background-color: white; border-radius: 6px; width: 350px; height: auto; margin: 10px;" class="col"><a href="/user/inde">
            <h5 style='color: black; padding: 10px 0 0 5px;'>Пользователи</h5></a>
        </div>
        <div class="col adm"><a href="/trainer/inde">
            <h5 style='color: black; padding: 10px 0 0 5px;'>Тренеры</h5></a>
        </div>
        <div class="col adm"><a href="/train/inde">
            <h5 style='color: black; padding: 10px 0 0 5px;'>Направления</h5></a>
        </div>
        <div class="col adm"><a href="/video/inde">
            <h5 style='color: black; padding: 10px 0 0 5px;'>Тренировки</h5></a>
        </div>
        <div class="col adm"><a href="/link/inde">
            <h5 style='color: black; padding: 10px 0 0 5px;'>Видео</h5></a>
        </div>
        <div class="col adm"><a href="/themes/inde">
            <h5 style='color: black; padding: 10px 0 0 5px;'>Статьи</h5></a>
        </div>
    </div>

    <?php }

?>

