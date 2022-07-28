<?php
    echo "<div style='margin-top: 25px; padding-top: 90px; background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(/web/". $model->picture ."); 
    width: 100%; height: 300px; background-size: cover; background-position: center; background-repeat: no-repeat;'>";
    echo "<h3 style='margin-top: 30px; text-align: center; color: white;'>" . $model->title . "</h3></div>";
    // echo "<p style='text-align: center;'><img src='/web/" . $model->picture . "' style='width: 100%; filter: brightness(70%); height: 350px; object-fit: cover;'></p>";
    echo "<br><h6 class='stat'>" . $model->text . "</h6><br>"; 
?>