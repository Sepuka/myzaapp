<?php

namespace common\models;

use yii\db\ActiveQueryInterface;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * @property integer $user_id
 * @property string $token
 * @property integer $datetime
 * @property integer $o_auth
 * @property User $user
 */
class Session extends ActiveRecord implements IdentityInterface {
  public const FIELD_USER_ID    = 'user_id';
  public const FIELD_TOKEN      = 'token';
  public const FIELD_SESSION_ID = 'session_id';

  public static function tableName(): string {
    return 'sessions';
  }

  /**
   * {@inheritdoc}
   */
  public static function findIdentity($id) {
    // TODO tmp
    if (is_array($id)) {
      return null;
    }
    return static::findOne([self::FIELD_SESSION_ID => $id,]);
  }

  /**
   * {@inheritdoc}
   */
  public static function findIdentityByAccessToken($token, $type = null) {
    return static::findOne(['token' => $token]);
  }

  /**
   * {@inheritdoc}
   */
  public function getId() {
    return $this->getPrimaryKey();
  }

  /**
   * {@inheritdoc}
   */
  public function getAuthKey(): ?string {
    return $this->token;
  }

  /**
   * {@inheritdoc}
   */
  public function validateAuthKey($authKey): ?bool {
    return $this->getAuthKey() === $authKey;
  }

  public function getUser(): ActiveQueryInterface {
    return $this->hasOne(User::class, [self::FIELD_USER_ID => User::FIELD_USER_ID]);
  }
}
