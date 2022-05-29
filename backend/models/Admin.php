<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * @property integer $admin_id
 * @property string $login
 * @property string $password
 */
class Admin extends ActiveRecord implements IdentityInterface {
  public const TABLE_NAME       = 'admins';
  public const FIELD_NAME_ID    = 'admin_id';
  public const FIELD_NAME_LOGIN = 'login';

  public static function tableName(): string {
    return self::TABLE_NAME;
  }

  public static function findByUsername(string $username): ?self {
    return static::findOne([self::FIELD_NAME_LOGIN => $username,]);
  }

  public static function findIdentity($id): ?self {
    return static::findOne([self::FIELD_NAME_ID => $id,]);
  }

  public static function findIdentityByAccessToken($token, $type = null) {
    // TODO: Implement findIdentityByAccessToken() method.
  }

  public function getId() {
    return $this->getPrimaryKey();
  }

  public function getAuthKey() {
    // TODO: Implement getAuthKey() method.
  }

  public function validateAuthKey($authKey) {
    // TODO: Implement validateAuthKey() method.
  }

  public function validatePassword(string $password) {
    return Yii::$app->security->validatePassword($password, $this->password);
  }
}
