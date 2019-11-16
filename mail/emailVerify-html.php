<?php
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $user app\models\User */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
<div class="verify-email">
    <p>Hello <?= Html::encode($user->username) ?>,</p>

    <p>Follow the link below to verify your email:</p>

    <p><?= Html::a(Html::encode($verifyLink), $verifyLink) ?></p>
    <img src="<?= Yii::$app->request->baseUrl ?>web/images/flyer.jpg">

    <!-- <img src="flyer.jpg" width="500" height="400" /> -->
    <?php # echo Html::img('@web/images/flyer.jpg') ?>
</div>
