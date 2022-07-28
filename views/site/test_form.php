<?php  
    foreach($model as $val){
        $datetime = $val->datetime;
        $e = explode(" ", $datetime);
        $d = explode("-", $e[0]);
        $t = explode(":", $e[1]);
        
        $timestamp = mktime($t[0], $t[1], $t[2], $d[1], $d[2], $d[0]);
        
        $date = date('m-d-Y', $timestamp);
        $time = date('H:i', $timestamp);

        if($val->id_user == Yii::$app->user->identity->id){
            echo "<div style='float: right; margin-top: 10px;'>";
            
            if($val->file != NULL){
                echo "<div style='border: 2px solid #DC7326; background-color: #DC7326;
                border-radius: 6px; padding: 10px 15px 10px 10px;'><span style='color: white; '>". $val->message .
                "<span style='font-size: 10px; color: white;'>&nbsp; &nbsp;".$time."</span></span><br><br>";
                echo "<video src='/web/".$val->file."' controls width='300px' poster='/web/img/2_th.jpg'></video></div></div>";
            }else{
                echo "<div style='border: 2px solid #DC7326; background-color: #DC7326;
                border-radius: 6px; padding: 10px 15px 10px 10px;'><span style='color: white; '>". $val->message ."<span style='font-size: 10px; color: white;'>
                &nbsp; &nbsp;".$time."</span></span>";
                echo "</div></div>";
            }
            echo "<div style='clear: both;'></div>";
        }else{
            echo "<div style='float: left; margin-top: 10px;'>";
            if($val->file != NULL){
                echo "<div style='border: 2px solid black;border-radius: 6px; padding: 10px 15px 10px 10px;'><span>". $val->message .
                "<span style='font-size: 10px;'>&nbsp; &nbsp;".$time."</span></span><br><br>";
                echo "<video src='/web/".$val->file."' controls width='300px' poster='/web/img/2_th.jpg'></video></div></div>";
            }else{
                echo "<div style='border: 2px solid black; border-radius: 6px; padding: 10px 15px 10px 10px;'>
                <span>". $val->message . "<span style='font-size: 10px;'>&nbsp; &nbsp;".$time."</span></span>";
                echo "</div></div>";
            }
            echo "<div style='clear: both;'></div>";
        }
    } 
    
?>