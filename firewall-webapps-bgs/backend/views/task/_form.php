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
            //->label(true)
            ->textArea(array('readonly'=>'true')) ?>

    <?= $form
            ->field($model, 'jumlah')
            //->label(true)
            ->textInput(array('readonly'=>'true')) ?>

    <?= $form
            ->field($model, 'facebook')
            //->label(true)
            ->textInput(array('readonly'=>'true')) ?>

    <?= $form
            ->field($model, 'twitter')
            //->label(true)
            ->textInput(array('readonly'=>'true')) ?>

    <?php 
        if($model->status != 'Completed'){
            echo $form->field($model, 'status')->dropDownlist(['Pending' => 'Pending', 'Running' => 'Running', 'Cancelled' => 'Cancelled',]);
        }else{
            echo $form->field($model, 'status')->textInput(array('readonly'=>'true'));
        }
    ?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
