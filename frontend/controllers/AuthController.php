<?php

namespace frontend\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Cookie;

class AuthController extends Controller {
  public function behaviors() {
    return [
      'access' => [
        'class' => AccessControl::class,
        'rules' => [
          [
            'actions' => ['auth'],
            'allow'   => true,
            'ips'     => ['127.0.0.1'],
          ],
        ],
      ],
    ];
  }

  public function actionAuth() {
    $this->response->cookies->add(
      new Cookie([
        'name'   => 'token',
        'value'  => 'secret_token_test',
        'domain' => 'dev.duntek',
        'path'   => '/',
      ]),
    );

    $this->response->redirect('/');
  }
}
