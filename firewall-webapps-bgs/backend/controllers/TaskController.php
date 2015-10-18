<?php

namespace backend\controllers;

use Yii;
use app\models\Task;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\User;
use yii\web\ForbiddenHttpException;
use backend\assets\priviledge;

/**
 * TaskController implements the CRUD actions for Task model.
 */
class TaskController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['logout', 'index', 'view', 'add', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Task models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(($role = priviledge::getRole()) == 'Admin'){
            $dataProvider = new ActiveDataProvider([
                'query' => Task::find(),
                'pagination' => [
                    'pageSize' => 15,
                ],
            ]);

            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        }else{
            throw new ForbiddenHttpException;
        }    
    }

    /**
     * Displays a single Task model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if(($role = priviledge::getRole()) == 'Admin'){
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }else{
            throw new ForbiddenHttpException;
        }    
    }

    /**
     * Creates a new Task model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(($role = priviledge::getRole()) == 'Admin'){
            $model = new Task();

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->url = strtolower($model->url);
                $model->status = 'Pending';
                //$model->user_id = \Yii::$app->user->identity;
                $mode = new LoginForm();
                $mode->username = \Yii::$app->user->identity->username;
                $user = new User();
                if($user = $mode->getUser()){
                     $model->user_id = $user->id;
                }
                $listsocmed = $_POST['Task']['socmed'];
                $model->facebook = 'No';
                $model->twitter = 'No';
                foreach ($listsocmed as $value) {
                    if($value == 'Facebook'){
                        $model->facebook = 'Yes';
                    }
                    if($value == 'Twitter'){
                        $model->twitter = 'Yes';
                    }
                }   
                
                if($model->save()){
                    return $this->redirect(['view', 'id' => $model->task_id]);
                }else{
                    return $this->render('create', [
                    'model' => $model,
                ]);
                }
                
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }else{
            throw new ForbiddenHttpException;
        }    
    }

    /**
     * Updates an existing Task model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(($role = priviledge::getRole()) == 'Admin'){
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->task_id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }else{
            throw new ForbiddenHttpException;
        }    
    }

    /**
     * Deletes an existing Task model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(($role = priviledge::getRole()) == 'Admin'){
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }else{
            throw new ForbiddenHttpException;
        }    
    }

    /**
     * Finds the Task model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Task the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if(($role = priviledge::getRole()) == 'Admin'){    
            if (($model = Task::findOne($id)) !== null) {
                return $model;
            } else {
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        }else{
            throw new ForbiddenHttpException;
        }        
    }
}
