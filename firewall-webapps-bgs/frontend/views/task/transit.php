<?php
use Yii;
//use app\models\Task;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Task */

$this->title = 'Task';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
		//$model = new Task();

	    return $this->render('/task/index', [
	       // 'dataProvider' => $dataProvider,
	        'model' => $model
	    ]);
?>