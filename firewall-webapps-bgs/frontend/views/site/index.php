<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\BadRequestHttpException;
use common\models\LoginForm;
use common\models\User;

    $mode = new LoginForm();
    $mode->username = \Yii::$app->user->identity->username;
    $user = new User();
    if(!$user = $mode->getUser()){
        throw new BadRequestHttpException;
    }

	$this->title = 'Homepage '.$user->role;
?>
<div class="site-index">

    <div class="jumbotron">
        <h2>Selamat Datang di Halaman <?= $user->role ?> !</h2>
    </div>

</div>
