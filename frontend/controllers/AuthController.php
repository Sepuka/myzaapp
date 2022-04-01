<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\web\Cookie;

class AuthController extends Controller {
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
