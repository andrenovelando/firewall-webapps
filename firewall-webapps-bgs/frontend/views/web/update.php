<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DatawebForm */

$this->title = 'Update Dataweb Form: ' . ' ' . $model->idWeb;
$this->params['breadcrumbs'][] = ['label' => 'Dataweb Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idWeb, 'url' => ['view', 'id' => $model->idWeb]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dataweb-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
