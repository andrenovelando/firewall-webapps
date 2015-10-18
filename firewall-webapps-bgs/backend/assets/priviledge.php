<?php
namespace backend\assets;

use Yii;
use common\models\LoginForm;
use common\models\User;

class priviledge
{
	public function __construct() {}

	public static function getRole(){
		$mode = new LoginForm();
        $mode->username = \Yii::$app->user->identity->username;
        $role;
        $user = new User();
        if($user = $mode->getUser()){
        	$role = $user->role;
        }else{
        	$role = null;
        }
        return $role;
	}
}

?>