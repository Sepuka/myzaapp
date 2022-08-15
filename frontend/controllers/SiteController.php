<?php

namespace frontend\controllers;

use common\models\Session;
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
            'actions' => ['login', 'logout', 'auth', 'about'],
            'allow'   => true,
            'verbs'   => ['GET'],
          ],
          [
            'actions' => ['index'],
            'allow'   => true,
            'roles'   => ['@'],
          ],
        ],
        'denyCallback' => function($rule, $action) {
          $token = Yii::$app->request->cookies->get('token');

          $this->redirect($token ? '/site/auth' : '/site/about');
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
    $session     = $this->getIdentity();
    $user        = $session->user;
    $withdrawals = $user->withdrawals;

    return $this->render(
      'index',
      [
        'name'        => $user['first_name'],
        'crypto'      => $user->crypto,
        'social'      => Yii::$app->params['social'],
        'withdrawals' => $withdrawals,
      ]
    );
  }

  public function actionLogin() {
    $authBlock = $this->getAuthButton();
    $identity  = $this->getIdentity();

    return $this->render('login', [
      'authBlock' => $authBlock,
      'user'      => $identity->user ?? null,
      'social'    => Yii::$app->params['social'],
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

    Yii::$app->user->loginByAccessToken($token->value);

    if (Yii::$app->user->isGuest) {
      return $this->goLogout();
    }

    return $this->goHome();
  }

  private function getAuthButton(): string {
    if (!Yii::$app->getUser()->isGuest) {
      return $this->renderPartial('auth/logout');
    }

    return YII_ENV === 'dev' ? $this->renderPartial('auth/internal') : $this->renderPartial('auth/external');
  }

  public function goLogin(): Response {
    return $this->response->redirect('/site/login');
  }

  public function goLogout(): Response {
    return $this->response->redirect('/site/logout');
  }

  public function actionLogout(): Response {
    Yii::$app->user->logout();
    Yii::$app->response->cookies->removeAll();

    return $this->goLogin();
  }

  public function actionAbout(): string {
    return $this->render('about', ['social' => Yii::$app->params['social']]);
  }

  private function getIdentity(): ?Session {
    /** @var \yii\web\User $user */
    $user = Yii::$app->user;

    return $user->identity;
  }
}
