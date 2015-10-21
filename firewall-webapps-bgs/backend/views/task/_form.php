<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border bg-black">
            <i class="fa fa-users"></i>
            <h3 class="box-title">Data Task ( ID Task : <?= $model->task_id ?> )</h3>
        </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="box-header">
                <div class="box-header">
                    <div class="box-header">
                        <?= $form
                            ->field($model, 'url')
                            //->label(true)
                            ->textArea(array('readonly'=>'true')) ?>
                    </div>
                    <div class="box-header">
                        <?= $form
                            ->field($model, 'jumlah')
                            //->label(true)
                            ->textInput(array('readonly'=>'true')) ?>
                    </div>
                    <div class="box-header">
                        <?= $form
                            ->field($model, 'facebook')
                            //->label(true)
                            ->textInput(array('readonly'=>'true')) ?>
                    </div>
                    <div class="box-header">
                        <?= $form
                            ->field($model, 'twitter')
                            //->label(true)
                            ->textInput(array('readonly'=>'true')) ?>
                    </div>
                    <div class="box-header">
                        <?php 
                            if($model->status != 'Completed'){
                                echo $form->field($model, 'status')->dropDownlist(['Pending' => 'Pending', 'Running' => 'Running', 'Cancelled' => 'Cancelled',]);
                            }else{
                                echo $form->field($model, 'status')->textInput(array('readonly'=>'true'));
                            }
                        ?> 
                    </div>
                    <div class="box-header">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success bg-blue' : 'btn btn-primary bg_blue']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>
