<?php

namespace frontend\controllers;

use common\models\Session;
use common\models\User;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller {
  public $layout = 'default';

  /**
   * {@inheritdoc}
   */
  public function behaviors() {
    return [
      'access' => [
        'class'        => AccessControl::class,
        'rules'        => [
          [
            'actions' => ['login', 'logout', 'auth'],
            'allow'   => true,
          ],
          [
            'actions' => ['index'],
            'allow'   => true,
            'roles'   => ['@'],
          ],
        ],
        'denyCallback' => function($rule, $action) {
          $token = Yii::$app->request->cookies->get('token');

          $this->redirect($token ? '/site/auth' : '/site/login');
        },
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function actions() {
    return [
      'error'   => [
        'class' => 'yii\web\ErrorAction',
      ],
      'captcha' => [
        'class'           => 'yii\captcha\CaptchaAction',
        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
      ],
    ];
  }

  public function actionIndex() {
    $session = $this->getIdentity();
    $user = $session->user;

    return $this->render('index', ['name' => $user['first_name'], 'crypto' => $user->crypto]);
  }

  public function actionLogin() {
    $authBlock = $this->getAuthButton();

    return $this->render('login', [
      'authBlock' => $authBlock,
      'user'      => $this->getIdentity()->user,
    ]);
  }

  public function actionAuth(): Response {
    if (!Yii::$app->user->isGuest) {
      return $this->goHome();
    }

    $token = $this->request->cookies->get('token');
    if ($token === null) {
      return $this->goLogin();
    }

    Yii::$app->user->loginByAccessToken($token);

    if (Yii::$app->user->isGuest) {
      return $this->goLogin();
    }

    return $this->goHome();
  }

  private function getAuthButton(): string {
    if (!Yii::$app->getUser()->isGuest) {
      return $this->renderPartial('auth/logout');
    }

    return YII_ENV === 'dev' ? $this->renderPartial('auth/internal') : $this->renderPartial('auth/external');
  }

  public function goLogin() {
    return $this->response->redirect('/site/login');
  }

  public function actionLogout() {
    Yii::$app->user->logout();
    Yii::$app->response->cookies->removeAll();

    return $this->goLogin();
  }

  private function getIdentity(): Session {
    /** @var Session $session */
    $session = Yii::$app->user;

    return $session->identity;
  }
}
