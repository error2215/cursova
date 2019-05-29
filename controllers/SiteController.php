<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Images;
use app\models\Tournaments;
use app\models\Categories;
use app\models\ContactForm;
use app\models\Works;
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
                    // 'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
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
     * @return string
     */
    public function actionIndex()
    {
        $images = Images::find()
        ->orderBy(['priority' => SORT_ASC])
        ->all();

        $tournaments = Tournaments::find()
        ->orderBy(['priority' => SORT_ASC])
        ->all();

        $galleryCategories = Categories::find()
        ->orderBy(['priority' => SORT_ASC])
        ->all();

        return $this->render('index', [
            'images' => $images,
            'instructors' => $instructors,
            'tournaments' => $tournaments,
            'galleryCategories' => $galleryCategories,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['emailTo'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionRules()
    {
        return $this->render('rules');
    }

    public function actionCategories()
    {
        $categories = Categories::find()
        ->indexBy('id')
        ->all();
        return $this->render('categories', [
            'categories' => $categories,
        ]);
    }   
    public function actionGallery()
    {
        $request = Yii::$app->request;

        $images = Images::find()
        ->where(['category' => $request->get('category')])
        ->indexBy('id')
        ->all();

        $title = Categories::find()
        ->where(['name' => $request->get('category')])
        ->select('header')->all();

        return $this->render('gallery', [
            'images' => $images,
            'title' => $title[0]['header']
        ]);
    }

    public function actionWorks()
    {
        $tournaments = Tournaments::find()
        ->indexBy('id')
        ->all();
        $works = Works::find()
        ->indexBy('id')
        ->all();
        return $this->render('works', [
            'tournaments' => $tournaments,
            'works' => $works
        ]);
    }
    public function actionLoad()
    {
        $request = Yii::$app->request;

        $id = $request->get('id');
        $model = Works::find()
                ->where(['link' => $id])
                ->all();
        $files1 = scandir('teamsWorks');
        foreach ($files1 as $key => $value) {

            if (substr_count($value, $model[0]->link . '.')  == 1){
                $file = $value;
                break;
            }
        }
        return $this->render('load', [
            'file' => $file
        ]);
    }
}
