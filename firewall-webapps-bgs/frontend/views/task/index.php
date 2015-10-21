<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Task';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content">
    <div class="box box-primary">
        <?php $form = ActiveForm::begin(); ?>
        <div class="box-header with-border bg-black">
            <i class="fa fa-tasks"></i>
            <h3 class="box-title">Add Task</h3>
        </div>
        <div class="row">
            <div class="box-body">
                <div class="col-xs-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">URL Website*</h3>
                    </div>
                    <div class="box-body">
                        <?= $form
                            ->field($model, 'url')
                            ->label(false)
                            ->textArea(array('maxlength' => 64, 'rows' => 5)) 
                        ?>
                    </div>
                    <div class="box-body">
                        <?= Html::submitButton('Add', ['class' =>'btn btn-success bg-blue']) ?>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">Jumlah Halaman*</h3>
                    </div>
                    <div class="box-body">
                        <?= $form
                            ->field($model, 'jumlah')
                            ->label(false)
                            ->textInput() 
                        ?>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title">Social Media (Optional)</h3>
                    </div>
                    <div class="box-body">
                        <?= $form
                            ->field($model, 'socmed')
                            ->label(false)
                            ->checkboxlist(['Facebook' => 'Facebook', 'Twitter' => 'Twitter'])
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border bg-black">
            <i class="fa fa-tasks"></i>
            <h3 class="box-title">List of Task</h3>
        </div>
        <div class="row">
            <div class="box-body">
                <div class="box-body">
               
                    <div class="box-body">
                        <form action="/controllers/TaskController.php" method="post">
                            <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Filter By
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">All</a></li>
                                <li><a href="#">Completed</a></li>
                                <li><a href="#">Running</a></li>
                                <li><a href="#">Pending</a></li>
                                <li><a href="#">Cancelled</a></li>
                              </ul>
                            </div>
                        </form>
                    </div>
                
                    <div class="box-body">
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
                                //'user_id',
                                'task_id',
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
                        ]);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
