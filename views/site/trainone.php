<?php
    use yii\helpers\Url;
    echo "<div style='padding: 110px 10px 0 10px; background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(/web/img/". $model->img ."); width: 100%; height: 300px; background-size: cover; background-position: center; background-repeat: no-repeat; '>";
    // echo "<p style='text-align: center;'><img src='/web/img/" . $model->img . "' style='width: 100%; filter: brightness(40%); height: 300px; object-fit: cover;'></p>";
    echo "<h3 style='text-align: center; color: white;'>" . $model->name . "</h3><br>";
    echo "<br><h6 class='desc'>" . $model->description . "</h6></div><br>";

    foreach($model1 as $val){
        if($val->id_train == $id){  
            $ll = $lin->src;
            $url = Url::to(['site/trainone', 'id' => $id]);
            $vid = "<p class='trr'><video class='trvid' src='/web/video/".$lii."' controls width='500px'></video></p>";
            $desc = $val->description;
            $who = $val->whom;
            $com = $val->compl;
        }

    }

    echo '<div class="row justify-content-center" id="choice">';
        $c = $model->count / 2;
        for($i = 1; $i <= $model->count; $i++){
            echo "<a id='".$i."' class='onne col-md-2' href='".$url."&num=".$i."'><div >Тренировка ". $i ."</div></a>";
        }
    echo "</div><br>";
?>
    <div class='row'>
        <div class='col' style='padding: 10px; float: left;'><?=$vid?></div>
        <div class='col' style='padding: 20px; width: 300px; text-align: justify; margin-top: 10px;'>
            <h5><?=$desc?></h5><br>
            <h5>Для кого: <span style="color: #DC7326;"><?= $who ?></span></h5>
            <h5>Сложность: <span style="color: #DC7326;"><?= $com ?></span>/10</h5>
        </div>
    </div>

    <script>
        try{
            var el=document.getElementById('choice').getElementsByTagName('a');
            var url=document.location.href;
            for(var i=0;i<el.length; i++){
                if (url==el[i].href){
                    el[i].className += ' selected';
                };
            };
        }catch(e){}

    </script>