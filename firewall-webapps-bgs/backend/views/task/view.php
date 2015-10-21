<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Task */

$this->title = 'Task Review';
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border bg-black">
            <i class="fa fa-users"></i>
            <h3 class="box-title">Detail Information</h3>
        </div>
        <div class="row">
            <div class="box-header">
                <div class="box-body">
                    <div class="box-body">
                    <?= Html::a('Update', ['update', 'id' => $model->task_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->task_id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete Task ID: '.$model->task_id,
                            'method' => 'post',
                        ],
                    ]) ?>
                    </div>
                    <div class="box-body">
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'task_id',
                                'user_id',
                                'status',
                                'description',
                                'url:url',
                                'jumlah',
                                'facebook',
                                'twitter',
                                'create_time',
                               // 'running_time',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>