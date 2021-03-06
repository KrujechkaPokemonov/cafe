<?php

namespace app\controllers;

use app\models\Administrator;
use app\models\Booktable;
use app\models\Menuitems;
use app\models\Reservation;
use app\models\Menu;
use app\models\News;
use app\models\Lounge;
use http\Message;
use Yii;
use yii\data\Pagination;
use yii\debug\panels\DumpPanel;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
                    'logout' => ['post'],
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
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
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
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionIndex()
    {
        $query = News::find();
        $countQuery = clone $query;

        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this -> render('index', [
            'articles' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionLounge()
    {
        $data = Lounge ::find() -> all();

        $images = ['01234.jpg', '0234.jpg', '0345.jpg'];

        return $this -> render('lounge', [
            'lounge' => $data,
            'images' => $images
        ]);
    }

    public function actionBooktable()
    {
        $data = Booktable ::find() -> all();

        return $this -> render('booktable', [
            'booktable' => $data,
        ]);
    }

    public function actionConfirmation()
    {
        return $this->render('confirmation');
    }

    public function actionReservation()
    {

        if(Yii::$app->request->isPost )
        {
            $reservation = new Reservation();

            $reservation->load(Yii::$app->request->post());

            if($reservation->validate())
            {
                $reservation->save();

                Yii::$app->session->setFlash('reservation-status', true);
            } else {

                Yii::$app->session->setFlash('reservation-status', false);
            }

        }

        $data = Reservation ::find() -> all();
        $lounge = Lounge ::find() -> all();
        $booktable = Booktable ::find() -> all();

        return $this -> render('reservation', [
            'reservation' => $data,
            'lounges' => $lounge,
            'booktables' => $booktable
        ]);
    }


    public function actionTest()
    {
        $data = Menuitems::findALL(['parent' => null]);

//        var_dump($data);die();

        return $this -> render('test', [
            'menu' => $data,
        ]);
    }

}
