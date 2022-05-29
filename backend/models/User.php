<?php

namespace backend\models;

use yii\db\ActiveRecord;

/**
 * This model presents our client, it needs for admin workflow
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
 */
class User extends ActiveRecord {
  public const FIELD_ACTIVE = 'active';

  public static function tableName(): string {
    return 'users';
  }

  public function getTotal(): int {
    return self::find()->count();
  }

  public function getActive(): int {
    return self::find()->where([self::FIELD_ACTIVE => true])->count();
  }
}
