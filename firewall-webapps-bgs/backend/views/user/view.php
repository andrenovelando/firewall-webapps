<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->full_name.' ( '.$model->role.' )';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
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
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete username: '.$model->username,
                            'method' => 'post',
                        ],
                    ]) ?>
                    </div>
                    <div class="box-body">
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                'username',
                                'full_name',
                                'role',
                                //'auth_key',
                                //'password_hash',
                                //'password_reset_token',
                                'email:email',
                                //'status',
                                'created_at',
                                'updated_at',
                                'verification',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

