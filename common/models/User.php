<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQueryInterface;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $token
 * @property string $email
 * @property string $auth_key
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 * @property Crypto crypto
 */
class User extends ActiveRecord implements IdentityInterface {
  public const FIELD_USER_ID = 'user_id';

  public static function tableName() {
    return 'users';
  }

  /**
   * {@inheritdoc}
   */
  public function behaviors() {
    return [
      TimestampBehavior::class,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public static function findIdentity($id) {
    return static::findOne(['user_id' => $id]);
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
  public function getAuthKey() {
    return $this->token;
  }

  /**
   * {@inheritdoc}
   */
  public function validateAuthKey($authKey) {
    return $this->getAuthKey() === $authKey;
  }

  public function getCrypto(): ActiveQueryInterface {
    return $this->hasOne(Crypto::class, [self::FIELD_USER_ID => Crypto::FIELD_USER_ID]);
  }
}
