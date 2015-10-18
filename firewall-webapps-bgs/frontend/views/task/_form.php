<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-index">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form
            ->field($model, 'url')
            ->label(false)
            ->textArea(['placeholder' => $model->getAttributeLabel('URL Website')]) ?>

    <?= $form
            ->field($model, 'jumlah')
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('Jumlah Halaman')]) ?>

    <?= $form
            ->field($model, 'socmed')
            ->label(false)
            ->checkboxlist(['Facebook' => 'Facebook', 'Twitter' => 'Twitter'])?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
