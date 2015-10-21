<?php

namespace frontend\controllers;

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
use frontend\assets\priviledge;
use yii\web\BadRequestHttpException;
use \DateTime;

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
                        'actions' => ['logout', 'index', 'view', 'add', 'create', 'update', 'delete', 'filter'],
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
        if(($role = priviledge::getRole()) == 'Praktikan'){
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
                if($listsocmed){
                    foreach ($listsocmed as $value) {
                        if($value == 'Facebook'){
                            $model->facebook = 'Yes';
                        }
                        if($value == 'Twitter'){
                            $model->twitter = 'Yes';
                        }
                    }   
                }
                $date = new DateTime();
                $model->create_time = $date->getTimestamp();
                $rootdir = 'data_praktikan';
                $dir = 'data_praktikan/'.$mode->username.'_'.$model->user_id;
                if(is_dir($rootdir) === false){
                    mkdir($rootdir);
                }
                if(is_dir($dir) === false){
                    mkdir($dir);
                }
                $file_to_write = 'task_'.$mode->username.'_'.$model->user_id.'_'.$model->create_time;
                if($file = fopen($dir . '/' . $file_to_write,"w")){
                    fwrite($file, $model->url);
                    fclose($file);
                    $temp_url = $model->url;
                    $model->url = $dir.'/'.$file_to_write;
                    if($model->save()){
                        
                        $model = new Task();
                        $dataProvider = new ActiveDataProvider([
                            'query' => Task::find()->andFilterWhere(['user_id' => \Yii::$app->user->identity->id]),
                            'pagination' => [
                                'pageSize' => 10,
                            ],
                        ]);

                        return $this->render('index', [
                            'dataProvider' => $dataProvider,
                            'model' => $model
                        ]);
                    }else{
                       /* $dataProvider = new ActiveDataProvider([
                            'query' => Task::find()->andFilterWhere(['user_id' => \Yii::$app->user->identity->id]),
                            'pagination' => [
                                'pageSize' => 10,
                            ],
                        ]);
                        $model->url = $temp_url;
                        return $this->render('index', [
                            'dataProvider' => $dataProvider,
                            'model' => $model
                        ]);*/
                        throw new BadRequestHttpException;
                    }
                }else{
                    throw new BadRequestHttpException;
                }
                
            } else {
                //if($model->jenisFilter === 'All'){
                    $dataProvider = new ActiveDataProvider([
                        'query' => Task::find()->andFilterWhere(['user_id' => \Yii::$app->user->identity->id]),
                        'pagination' => [
                            'pageSize' => 10,
                        ],
                    ]);
               /* }else{
                    $dataProvider = new ActiveDataProvider([
                        'query' => Task::find()->andFilterWhere(['user_id' => \Yii::$app->user->identity->id, 'status' => $model->jenisFilter]),
                        'pagination' => [
                            'pageSize' => 10,
                        ],
                    ]);
                }*/
                        //find('user_id' == \Yii::$app->user->identity->id),

                return $this->render('index', [
                    'dataProvider' => $dataProvider,
                    'model' => $model
                ]);
            }
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
        if(($role = priviledge::getRole()) == 'Praktikan'){
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
        if(($role = priviledge::getRole()) == 'Praktikan'){
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
                if($listsocmed){
                    foreach ($listsocmed as $value) {
                        if($value == 'Facebook'){
                            $model->facebook = 'Yes';
                        }
                        if($value == 'Twitter'){
                            $model->twitter = 'Yes';
                        }
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
        if(($role = priviledge::getRole()) == 'Praktikan'){
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
        if(($role = priviledge::getRole()) == 'Praktikan'){
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }else{
            throw new ForbiddenHttpException;
        }
    }

    public function actionFilter($filter)
    {
        if(($role = priviledge::getRole()) == 'Praktikan'){
            $model = new Task();
            $model->jenisFilter = $filter;
            if($filter!='All'){
                $dataProvider = new ActiveDataProvider([
                    'query' => Task::find()->andFilterWhere(['user_id' => \Yii::$app->user->identity->id, 'status' => $filter]),
                    'pagination' => [
                        'pageSize' => 10,
                     ],
                ]);
            }else{
                $dataProvider = new ActiveDataProvider([
                    'query' => Task::find()->andFilterWhere(['user_id' => \Yii::$app->user->identity->id]),
                    'pagination' => [
                        'pageSize' => 10,
                     ],
                ]);
            }

            return $this->render('index', [
                'dataProvider' => $dataProvider,
                'model' => $model
            ]);
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
        if(($role = priviledge::getRole()) == 'Praktikan'){   
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
