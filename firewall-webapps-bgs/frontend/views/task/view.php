<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Task */

$this->title = 'Task Review';
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'task_id',
            //'user_id',
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
