<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Testimonial;
use app\models\TestimonialSearch;
use app\models\Reservation;
use app\models\ReservationSearch;
use yii\web\Response;
use kartik\form\ActiveForm;

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
     * @return string
     */
    public function actionIndex()
    {
        $testimonial = new Testimonial();
        $testimonial->scenario = Testimonial::SCENARIO_INSERT;

        $reservation = new Reservation();
        $reservation->scenario = Reservation::SCENARIO_INSERT;

        return $this->render('index', [
            'testimonial' => $testimonial,
            'reservation' => $reservation,
            'dataProviderTestimonial' => (new TestimonialSearch())->testimonial(),
        ]);
    }

    /**
     * Login action.
     *
     * @return string
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
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
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

    public function actionTestimonialValidate()
    {
        $model = new Testimonial();
        $model->scenario = Testimonial::SCENARIO_INSERT;

        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            return ActiveForm::validate($model);
        }
    }

    public function actionTestimonialSubmit()
    {
        if (!Yii::$app->request->isAjax) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        $model = new Testimonial();
        $model->scenario = Testimonial::SCENARIO_INSERT;

        if ($model->load(Yii::$app->request->post())) {
            $model->status = Testimonial::STATUS_NEW;

            $response = Yii::$app->response;
            $response->format = Response::FORMAT_JSON;

            if ($model->save()) {
                $response->data = ['status' => true];
            }
        }
    }

    public function actionReservationValidate()
    {
        $model = new Reservation();
        $model->scenario = Reservation::SCENARIO_INSERT;

        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            return ActiveForm::validate($model);
        }
    }

    public function actionReservationSubmit()
    {
        if (!Yii::$app->request->isAjax) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        $model = new Reservation();
        $model->scenario = Reservation::SCENARIO_INSERT;

        if ($model->load(Yii::$app->request->post())) {
            $model->status = Reservation::STATUS_NEW;

            $response = Yii::$app->response;
            $response->format = Response::FORMAT_JSON;

            if ($model->save()) {
                $response->data = ['status' => true];
            }
        }
    }

    protected function findTestimonials()
    {
        $model = Testimonial::find()->all();
        return $model;
    }
}
