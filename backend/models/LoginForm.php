<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\IdentityInterface;

/**
 * Login form
 */
class LoginForm extends Model {
  public string $username = '';
  public string $password = '';
  public bool $rememberMe = true;

  private ?IdentityInterface $_user = null;

  /**
   * {@inheritdoc}
   */
  public function rules() {
    return [
      // username and password are both required
      [['username', 'password'], 'required'],
      // rememberMe must be a boolean value
      ['rememberMe', 'boolean'],
      // password is validated by validatePassword()
      ['password', 'validatePassword'],
    ];
  }

  public function validatePassword(string $attribute) {
    if (!$this->hasErrors()) {
      $user = $this->getAdmin();
      if (!$user || !$user->validatePassword($this->password)) {
        $this->addError($attribute, 'Incorrect username or password.');
      }
    }
  }

  public function login(): bool {
    if ($this->validate()) {
      $user = $this->getAdmin();
      if ($user === null) {
        return false;
      }

      return Yii::$app->user->login($user, $this->rememberMe ? 3600 * 24 * 30 : 0);
    }

    return false;
  }

  protected function getAdmin(): ?Admin {
    if ($this->_user === null) {
      $this->_user = Admin::findByUsername($this->username);
    }

    return $this->_user;
  }
}
