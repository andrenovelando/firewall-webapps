<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Management';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border bg-black">
            <i class="fa fa-users"></i>
            <h3 class="box-title">List of User</h3>
        </div>
        <div class="row">
            <div class="box-body">
                <div class="box-body">
                    <div class="box-body">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Filter By
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Verify</a></li>
                            <li><a href="#">Not Yet</a></li>
                          </ul>
                        </div>
                    </div>
                    <div class="box-body">
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                //'id',
                                'username',
                                'full_name',
                                'role',
                                //'auth_key',
                                // 'password_hash',
                                // 'password_reset_token',
                                // 'email:email',
                                // 'status',
                                // 'created_at',
                                // 'updated_at',
                                 'verification',

                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

