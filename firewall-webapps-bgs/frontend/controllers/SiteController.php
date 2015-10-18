<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use common\models\User;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\ForbiddenHttpException;
use frontend\assets\priviledge;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'index',],
                'rules' => [
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        if(($role = priviledge::getRole()) != 'Admin'){
            return $this->render('index');    
        }else{
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())&&$model->validate()) {
            $_user = new User();
            if($_user = $model->getUser()){
                if($_user->role != 'Admin'){
                    $model->login();
                    return $this->goHome();
                }else{
                    return $this->render('login', [
                        'model' => $model,
                    ]);
                }
            }else{
                return $this->render('login', [
                    'model' => $model,
                ]);    
            }
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())&&$model->validate()) {
            if ($user = $model->signup()) {
                //if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                //}
            }
        }else{
            return $this->render('signup', [
                'model' => $model,            
            ]);
        }

        
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
	
	

	/*
RESULT CONTROLLER
*/
public function actionResultklasifikasi()
    {
        if(($role = priviledge::getRole()) != 'Admin'){
            return $this->render('resultklasifikasi');
        }else{
            throw new ForbiddenHttpException;
        }
    }

public function actionResultmap()
    {
        if(($role = priviledge::getRole()) != 'Admin'){  
            return $this->render('resultmap');
        }else{
            throw new ForbiddenHttpException;
        }
    }
public function actionResultnetworkfb()
    {
        if(($role = priviledge::getRole()) != 'Admin'){
            return $this->render('resultnetworkfb');
        }else{
            throw new ForbiddenHttpException;
        }
    }
public function actionResultnetworktwitter()
    {
        if(($role = priviledge::getRole()) != 'Admin'){
            return $this->render('resultnetworktwitter');
        }else{
            throw new ForbiddenHttpException;
        }
    }
public function actionResulttagcloud()
    {
        if(($role = priviledge::getRole()) != 'Admin'){
            return $this->render('resulttagcloud');
        }else{
            throw new ForbiddenHttpException;
        }
    }
public function actionResultsentiment()
    {
        if(($role = priviledge::getRole()) != 'Admin'){
            return $this->render('resultsentiment');
        }else{
            throw new ForbiddenHttpException;
        }
    }	
	
/*
REPORT CONTROLLER
*/
public function actionReportweb()
    {
        if(($role = priviledge::getRole()) != 'Admin'){
            return $this->render('reportweb');
        }else{
            throw new ForbiddenHttpException;
        }
    }

	public function actionCrawling()
    {
        if(($role = priviledge::getRole()) == 'Praktikan'){
            return $this->render('crawling');
        }else{
            throw new ForbiddenHttpException;
        }
    }
    public function actionCleaning()
    {
        if(($role = priviledge::getRole()) == 'Praktikan'){
            return $this->render('cleaning');
        }else{
            throw new ForbiddenHttpException;
        }
    }
    public function actionClassification()
    {
        if(($role = priviledge::getRole()) == 'Praktikan'){
            return $this->render('classification');
        }else{
            throw new ForbiddenHttpException;
        }
    }
	
}
