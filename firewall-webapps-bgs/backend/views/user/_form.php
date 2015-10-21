<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Updating Data User';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border bg-black">
            <i class="fa fa-users"></i>
            <h3 class="box-title">Data User ( ID User : <?= $model->id ?> )</h3>
        </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="box-header">
                <div class="box-header">
                    <div class="box-header">
                        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="box-header">
                        <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="box-header">
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="box-header">
                        <?= 
                            $form->field($model, 'role')->dropDownlist(['Admin' => 'Admin', 'Expert' => 'Expert', 'Praktikan' => 'Praktikan',]) 
                        ?>
                    </div>
                    <div class="box-header">
                        <?php 
                            if($model->verification == 'No'){
                                echo $form->field($model, 'verification')->dropDownlist(['Yes' => 'Yes', 'No' => 'No',]);
                            }else{
                                echo $form->field($model, 'verification')->textInput(array('readonly'=>'true'));
                            } 
                        ?>
                    </div>
                    <div class="box-header">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success bg-blue' : 'btn btn-primary bg-blue']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>

