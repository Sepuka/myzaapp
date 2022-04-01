<?php

namespace frontend\controllers;

use frontend\models\Users;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

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
            'actions' => ['login'],
            'allow'   => true,
            'ips'     => ['127.0.0.1'],
          ],
          [
            'actions' => ['auth'],
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

          $this->redirect($token ? 'site/auth' : 'site/login');
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
    $vk_auth = $this->getVkAuthButton();

    $token = $this->request->cookies->get('token');
    if ($token === null) {
      return $vk_auth;
    }

    $user    = Yii::$app->getUser()->identity;
    $address = (new Users())->getAddress($user->getId());

    return $this->render('index', ['name' => $user['first_name'], 'vk_auth' => $vk_auth, 'address' => (string)$address]);
  }

  public function actionLogin() {
    $vk_auth = $this->getVkAuthButton();

    return $this->render('login', [
      'vk_auth' => $vk_auth,
    ]);
  }

  public function actionAuth() {
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

  private function getVkAuthButton(): string {
    return YII_ENV === 'dev' ? $this->renderPartial('auth/vk_int') : $this->renderPartial('auth/vk_ext');
  }

  public function goLogin() {
    return $this->response->redirect('/site/login');
  }

  /**
   * Logs out the current user.
   *
   * @return mixed
   */
  public function actionLogout() {
    Yii::$app->user->logout();

    return $this->goHome();
  }
}
