<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Sign Up';
?>
<div class="login-box">
    <div class="login-logo">
        <b>Create New Account</b>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Please fill out the following fields to signup:</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username')
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form
            ->field($model, 'fullname')
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('fullname')]) ?>

            <?= $form
            ->field($model, 'email')
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('email')]) ?>

        <?= $form
            ->field($model, 'password')
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <?= 
            $form
            ->field($model, 'role')
            ->label(false)
            ->dropDownlist(['Admin' => 'Admin', 'Expert' => 'Expert', 'Praktikan' => 'Praktikan',], ['prompt' => 'Role...']) 
        ?>
        <div class="row">
            <div class="col-xs-8">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <div class="col-xs-8">
                <?= Html::a('Already have an account?', ['/site/login']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
