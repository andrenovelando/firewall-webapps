<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Task';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

<h1><?= Html::encode('Add Task') ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form
            ->field($model, 'url')
            ->label(false)
            ->textArea(array('maxlength' => 64, 'rows' => 5, 'placeholder' => $model->getAttributeLabel('URL Website'))) ?>

    <?= $form
            ->field($model, 'jumlah')
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('Jumlah Halaman')]) ?>

    <?= $form
            ->field($model, 'socmed')
            ->label(false)
            ->checkboxlist(['Facebook' => 'Facebook', 'Twitter' => 'Twitter'])?> 

    <div class="form-group">
        <?= Html::submitButton('Add', ['class' =>'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <h1><?= Html::encode('List of Task') ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'user_id',
            'url',
            'jumlah',
            'facebook',
            'twitter',
            'status',
            'create_time',
            // 'jumlah',
            // 'facebook',
            // 'twitter',
            // 'create_time',
            // 'running_time:datetime',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
