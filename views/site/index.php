<meta  content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../web/css/index.css">

<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Button;
use yii\bootstrap4\Carousel;


/* @var $this yii\web\View */

$this->title =Yii::$app->name ;
?>
<div class="site-index">
    <!-- <img id="flyer" src="../web/images/flyer.jpg" width="800" height="533" > -->
   <?php
        $items=[
            '<div class="item-carousel">
                <h2>Your Notes</h2>
                <h3>At one place</h3>
                <a href="/EasyDo/web/index.php?r=site/register" class="btn btn-lg btn-primary">Get Registered Today 😍 </a>
            </div>',
            '<h2 class="s">adsdafas</h2>',
            '<h2 class="s">adsdafas</h2>',
            '<h2 class="s">adsdafas</h2>',
                // '<img class="item-carousel" src="../web/images/userIcon.png"/>',
                // '<img class="item-carousel" src="../web/images/userIcon-white.png"/>',
                // '<img class="item-carousel" src="../web/images/flyer.jpg"/>',
                
            ];


        echo Carousel::widget([
        'items' => $items,
        // 'options' => ['class' => '']
            //[the item contains only the image
            // '<img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"/>',
            // '<img src="https://miro.medium.com/max/3840/1*d1oxh4HnicCCx6eWB9ienQ.png"/>',
            // '<img src="https://www.luisllamas.es/wp-content/uploads/2018/01/instalar-servidor-web-xampp.png"/>',
            // equivalent to the above
            // 'content' => '<img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-02.jpg"/>',
            // the item contains both the image and the caption            ]

        ]);
   ?>
    <div class="jumbotron">
        <h1 style="font-size:60px;"><b><b>Welcome to <?=Yii::$app->name ?></b></b></h1>
        <?php
        $button =   Html::a(
                        'Get Registered',
                        '/EasyDo/web/index.php?r=site/register' ,
                        ['class' => 'btn btn-lg btn-primary' ],
                    );

        Yii::$app->user->isGuest ?  print( $button)
        : NULL?>
        <br>
        <br>
        <p><button onclick="window.location.href='/EasyDo/web/index.php?r=site/login'"
                   class="btn btn-lg btn-primary"><?php echo Yii::$app->user->isGuest ? 'Login' : 'Hi '.Yii::$app->user->identity->username.'<br>'.'Anything to be noted ?' ?></button></p>
     
        <?php
            Yii::$app->user->isGuest ? :  
            print( Html::a(
                'Take a Note',
                '/EasyDo/web/index.php?r=note/create' ,
                ['class' => 'btn btn-lg btn-success' ],
            ));
            echo('<br><br>');
            print( Html::a(
                'My Notes',
                '/EasyDo/web/index.php?r=note/index' ,
                ['class' => 'btn btn-lg btn-success' ],
            ));
            echo('<br><br>');
            print( Html::a(
                'Add Category',
                '/EasyDo/web/index.php?r=category/index' ,
                ['class' => 'btn btn-lg btn-success' ],
            ));
            echo('<br><br>');
            print( Html::a(
                'My Categories',
                '/EasyDo/web/index.php?r=category/index' ,
                ['class' => 'btn btn-lg btn-success' ],
            ));

        ?>
        
        <div id="react-test"></div>
    </div>
    <div class="body-content ">
       
    </div>
</div>
    <!-- Load our React component. -->
    <!-- <script src="./js/index.js"></script> -->
