<?php

namespace app\controllers;

use app\models\Lesson;
use app\models\Subject;
use app\models\Task;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    // сделать использовать какой шаблон для сайто

    public $enableCsrfValidation=false;
    public $roleInSystem = false;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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

    public function actionIndex()
    {
        //$this->layout='nav';
         return $this->render('index');
        /*if (Yii::$app->user->isGuest){
            return $this->redirect('http://localhost/basic/index.php?r=site%2Flogin');
        } else {
            return $this->redirect('http://localhost/basic/index.php?r=test');
        }
        */

    }

    // $pacan = \app\models\Test::find()->where(['id'=>$id])->one();
    // echo 'Имя пользователя с id: '.$id.' - '.$pacan->name;


    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionPiska()
    {
        return $this->render('max');
    }

    public function actionHello() {
        return $this->render('hello.php');
    }

    public function actionUserForm() {
        $model = new UserForm;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

        }else{
            return $this->render('userForm',['model'=>$model]);
        }
    }

    public function actionUserlogin() {

        $this->layout='startlayout';
        return $this->render('userlogin');
    }


    public function actionHandleform(){
        $data = Yii::$app->request->post('password');
        //print_r($data);
        if ($data=='test') {
           print_r($data);
            // Установить роль пользователя на Админа!!11101010
            //
            //
            //
            $this->layout='nav';
            $this->roleInSystem=true;
            //return $this->redirect('planschedule');
            //actionPlanschedule();
        }
        return $this->redirect('planschedule');


    }

    public function actionPlanschedule() {
        $this->layout='nav';
        $model = new Subject();
        $course = Yii::$app->request->post('Subject');
        echo($course["subject_term"]);
        echo($course["subject_name"]);

        // к бд создается запрос
        $query = Subject::find()->where(['subject_name' => $course["subject_name"]])
            ->andWhere(['subject_term' => $course["subject_term"]])
            ->orderBy('id');
        // и запихивается в dataprovider
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        //print_r($dataProvider);
        //$data = Yii::$app->request->post();
        //if ($data==null) {
        //print_r($data);
        //echo ("nullDATA");

        // возвращаем ту же страницу но уже с новыми данными
            return $this->render('planschedule', array('dataProvider' => $dataProvider, 'model' => $model)); //}

        //else {
          /*  $course = Yii::$app->request->post('Subject');
            //print_r($course);
            echo($course["subject_term"]);
            echo($course["subject_name"]);
            // create query
            $query = Subject::find()->where(['subject_name' => $course["subject_name"]])
                ->andWhere(['subject_term' => $course["subject_term"]])
                ->orderBy('id')
                ->all();


            $dataProvider = new ActiveDataProvider([
                'query' => Subject::find()->where(['subject_name' => $course["subject_name"]])
                    ->andWhere(['subject_term' => $course["subject_term"]])
                    ->orderBy('id')
                    ->all()
            ]);


            return $this->render('planschedule', array('dataProvider' => $dataProvider, 'model' => $model));
            //return $this->render('planschedule');*/
      //  }
    }

    public function actionPreparation() {
        $this->layout='nav';
        $model = new Lesson();
        $course = Yii::$app->request->post('Lesson');
        //echo($course["year"]);
        //echo($course["subject"]);

        // к бд создается запрос
        $query = Lesson::find()->where(['year' => $course["year"]])
            ->andWhere(['subject' => $course["subject"]])
            ->orderBy('id');
        // и запихивается в dataprovider
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        // возвращаем ту же страницу но уже с новыми данными
        return $this->render('preparation', array('dataProvider' => $dataProvider, 'model' => $model)); //}

        //return $this->render('preparation');
    }

    public function actionTasks() {
        $this->layout='nav';
        return $this->render('tasks');
    }


    public function actionSubject()
    {
        $model = new \app\models\Subject();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('subject', [
            'model' => $model,
        ]);
    }

    public function runAction($id, $params = [])
    {
        // Extract the params from the request and bind them to params
        $params = \yii\helpers\BaseArrayHelper::merge(Yii::$app->getRequest()->getBodyParams(), $params);
        return parent::runAction($id, $params);
    }

    public function actionBlah() {
        $data = Yii::$app->request->post();

        $course = Yii::$app->request->post('Subject');
        //print_r($course);
        echo($course["subject_term"]);
        echo($course["subject_name"]);
        // create query
        $query = Subject::find()->where(['subject_name' => $course["subject_name"]])
            ->where(['subject_term' => $course["subject_term"]])
            ->orderBy('id')
            ->all();
        //print_r($query);
        $model = new Subject();
        //Yii::$app->runAction(array('query'=>$query, 'model'=>$model));
        //return $this->render('planschedule',array('query'=>$query, 'model'=>$model));
        //return $this->render('planschedule', array('query' => $query, 'model' => $model));
        Yii::$app->response->redirect(['site/planschedule','query' => $query, 'model' => '$model']);
        //$this->redirect('planschedule',('query'=>$query, 'model'=>$model));
    }
    
}
