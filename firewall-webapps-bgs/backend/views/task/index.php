<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasks Management';
$this->params['breadcrumbs'][] = $this->title;
?>

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
                    </div>
                    <div class="box-body">
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'task_id',
                                'user_id',
                                'url:url',
                                'description',
                                'jumlah',
                                'facebook',
                                'twitter',
                                'status',
                                'create_time',
                                // 'running_time:datetime',

                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
