<?php

namespace app\controllers;

use app\models\Foodanddrinks;
use app\models\Menuitems;
use app\models\Reservation;
use app\models\Menu;
use app\models\News;
use app\models\Lounge;
use Yii;
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
        $article = News ::find() -> all();
        return $this -> render('index', [
            'articles' => $article,
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


    /**
     * КСТАТИ
     *
     *
     *
     *
     * Самое норм для тебя это сделать 3 модуля для разных групп пользователей
     */
    public function actionReservation()
    {
        //если форма отправлена
        if(Yii::$app->request->isPost )
        {
            $reservation = new Reservation();
            //загружаем то что пришло из формы (смотри форму /views/reservation.php )
            $reservation->load(Yii::$app->request->post());

            //эта функция вместо var_dump() описана в /web/index.php
            //она нужна для дебага
            dd($reservation);

            //если провалидировалось
            if($reservation->validate())
            {
                $reservation->save();

                //если  все норм верни что-то типа 'Успешно!!!'
                Yii::$app->session->setFlash('reservation-status', true);
            } else {
                //если нет то неуспешно ((
                Yii::$app->session->setFlash('reservation-status', false);
            }

        }

        $data = Reservation ::find() -> all();
        $lounge = Lounge ::find() -> all();

        // это для теста представления. Удоли это
        Yii::$app->session->setFlash('reservation-status', true);

        return $this -> render('reservation', [
            'reservation' => $data,
            'lounges' => $lounge
        ]);
    }

    public function actionMenu()
    {
        $data = Menu ::find() -> all();

        $images = ['123.jpg', '234.jpg', '067.jpg'];

        return $this -> render('menu', [
            'menu' => $data,
            'images' => $images
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
