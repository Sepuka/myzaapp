<?php

namespace common\models;

use phpDocumentor\Reflection\Types\Integer;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQueryInterface;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This class presents our client who works with it
 * @property integer $user_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $o_auth
 * @property string $external_id
 * @property string $email
 * @property string $token
 * @property string $first_name
 * @property string $last_name
 * @property bool $active
 * @property Crypto crypto
 */
class User extends ActiveRecord implements IdentityInterface {
  public const FIELD_USER_ID = 'user_id';

  public static function tableName(): string {
    return 'users';
  }

  /**
   * {@inheritdoc}
   */
  public function behaviors(): array {
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
  public function getAuthKey(): ?string {
    return $this->token;
  }

  /**
   * {@inheritdoc}
   */
  public function validateAuthKey($authKey): ?bool {
    return $this->getAuthKey() === $authKey;
  }

  public function getCrypto(): ActiveQueryInterface {
    return $this->hasOne(Crypto::class, [self::FIELD_USER_ID => Crypto::FIELD_USER_ID]);
  }
}
