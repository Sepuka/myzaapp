<?php

namespace backend\controllers;

use backend\models\Crypto;
use backend\models\User;
use backend\models\LoginForm;
use console\models\Permissions;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\ErrorAction;

/**
 * Site controller
 */
class SiteController extends Controller {
  /**
   * {@inheritdoc}
   */
  public function behaviors() {
    return [
      'access' => [
        'class'        => AccessControl::className(),
        'rules'        => [
          [
            'actions' => ['login', 'error'],
            'allow'   => true,
          ],
          [
            'actions' => ['logout', 'index'],
            'allow'   => true,
            'ips'     => Yii::$app->params['adminIPs'],
            'roles'   => [Permissions::READ_ADMIN_PANEL,],
          ],
        ],
      ],
      'verbs'  => [
        'class'   => VerbFilter::className(),
        'actions' => [
          'logout' => ['post'],
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function actions() {
    return [
      'error' => [
        'class' => ErrorAction::class,
      ],
    ];
  }

  public function actionIndex(): string {
    $user   = new User();
    $crypto = new Crypto();

    return $this->render('index', ['user' => $user, 'crypto' => $crypto]);
  }

  /**
   * Login action.
   *
   * @return string|Response
   */
  public function actionLogin() {
    if (!Yii::$app->user->isGuest) {
      return $this->goHome();
    }

    $this->layout = 'blank';
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
  public function actionLogout() {
    Yii::$app->user->logout();

    return $this->goHome();
  }
}
