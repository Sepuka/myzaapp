<?php

namespace frontend\controllers;

use common\models\Session;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Cookie;
use yii\web\Response;

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

  public function actionAuth(): void {
    $token = 'secret_token_test' . time();
    $this->response->cookies->add(
      new Cookie([
        'name'   => 'token',
        'value'  => $token,
        'domain' => 'dev.duntek',
        'path'   => '/',
      ]),
    );

    $session = Session::findOne([Session::FIELD_TOKEN => $token]);
    if ($session === null) {
      $session           = new Session();
      $session->user_id  = 1;
      $session->token    = $token;
      $session->datetime = date('Y-m-d H:i:s');
      $session->o_auth   = 2;
      $session->save();
    }

    $this->response->redirect('/');
  }
}
