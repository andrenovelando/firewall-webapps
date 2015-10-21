<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DatawebForm */

$this->title = 'Create Dataweb Form';
$this->params['breadcrumbs'][] = ['label' => 'Dataweb Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataweb-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
