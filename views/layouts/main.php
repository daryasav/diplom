<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use app\models\Chat;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title>SportOut</title>
    <link rel="shortcut icon" href="/web/favicon.ico"/>
    <?php $this->head() ?>
</head>
<!-- linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(/web/img/fon1.jpg) 
background-image: url(/web/img/fon1.jpg);-->
<body class="d-flex flex-column h-100" style="background-image: linear-gradient(rgba(0,0,0,0.05),rgba(0,0,0,0.05)),url(/web/img/fon1.jpg);
background-size: cover; background-repeat: no-repeat; background-attachment: fixed; ">

<header>
    <div id="menu">
        <?php
        $id = Yii::$app->user->identity->id;

        NavBar::begin([
            'brandLabel' => '<img class="img" src="/web/img/logo3.svg" height="50px">',
            'brandUrl' => '/site/index',
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-light fixed-top mmm',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav mm'],
            'items' => [
                // ['label' => 'Главная', 'url' => ['/site/index'], 'linkOptions' => ['class' => 'm', 'id' => 'cccc']],
                ['label' => 'Тренировки', 'url' => ['/site/train'], 'linkOptions' => ['class' => 'm']],
                ['label' => 'Калькулятор', 'url' => ['/site/calc'], 'linkOptions' => ['class' => 'm']],
                ['label' => 'Статьи', 'url' => ['/site/themes'], 'linkOptions' => ['class' => 'm']],
                ['label' => 'Консультация', 'url' => ['/site/chat'], 'linkOptions' => ['class' => 'm']],
                ['label' => 'О нас', 'url' => ['/site/about'], 'linkOptions' => ['class' => 'm']],
                
/////////////////////////////////////////////////////////////
                Yii::$app->user->identity->id_role == '2' ? (
                    ['label' => 'Чат', 'url' => ['/site/chatone?id='.$id], 'linkOptions' => ['class' => 'm']]
                ) : (
                    '<li>'
                    . '</li>'
                ),
//////////////////////////////////////////////////////////////////
                Yii::$app->user->identity->id_role == '3' ? (
                    ['label' => 'Чат', 'url' => ['/site/chattr?id='.$id], 'linkOptions' => ['class' => 'm']]
                ) : (
                    '<li>'
                    . '</li>'
                ),
/////////////////////////////////////////////////////////////
                Yii::$app->user->identity->id_role == '1' ? (
                    ['label' => 'Админ', 'url' => ['/site/admin'], 'linkOptions' => ['class' => 'm']]
                ) : (
                    '<li>'
                    . '</li>'
                ),
/////////////////////////////////////////////////////////////
                Yii::$app->user->isGuest ? (
                    ['label' => 'Вход', 'url' => ['/site/login'], 'linkOptions' => ['class' => 'm']]
                ) : (
                    ['label' => 'Выход', 'url' => ['/site/logout'], 'linkOptions' => ['class' => 'm']]
                    ),
            ],
        ]);
        NavBar::end();
        ?>
    </div>
    <script>
        try{
            var el=document.getElementById('menu').getElementsByTagName('a');
            var url=document.location.href;
            for(var i=0;i<el.length; i++){
                if (url==el[i].href){
                    el[i].className += ' selected';
                };
            };
        }catch(e){}
    </script>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>


<?php

    $strr = explode('/',$_SERVER['REQUEST_URI']);
    $strr = end($strr); 
    $parr = $this->params['par'];
    if($strr == 'personal?id='.$parr || $strr == 'pers?id='.$parr ){?>
        <footer>
            
        </footer>
    <?php }else{ ?>
        <footer class="footer mt-auto py-3 text-muted">
            <div class="container">
                <ul class="f" id="fooo" style="float: left;">
                    <li ><a href="index" style="color: white;">Главная</a></li>
                    <li><a href="train" style="color: white;">Тренировки</a></li> 
                    <li><a href="themes" style="color: white;">Статьи</a></li>
                </ul>     
                <ul class="f" id="fooo" >
                    <div class="me">
                        <li><a href="chat" style="color: white;">Консультация</a></li>
                        <li><a href="about" style="color: white;">О нас</a></li> 
                        <li><a href="login" style="color: white;">Вход</a></li>
                    </div>
                </ul>
            <div style="float: right; margin-top: -80px;"><img class="img" src="/web/img/logo.svg" height="50px" ></div>
            </div>
        </footer>
    <?php } ?>


<?php 
    $this->endBody(); 
?>
</body>
</html>
<?php $this->endPage() ?>
