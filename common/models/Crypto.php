<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * @property string $currency
 * @property string $address
 * @property int $user_id
 * @property float $balance
 * @property int $updated_at
 */
class Crypto extends ActiveRecord {
  public const TABLE_NAME = 'cryptos';

  public const FIELD_CURRENCY   = 'currency';
  public const FIELD_ADDRESS    = 'address';
  public const FIELD_USER_ID    = 'user_id';
  public const FIELD_BALANCE    = 'balance';
  public const FIELD_UPDATED_AT = 'updated_at';

  public static function tableName() {
    return self::TABLE_NAME;
  }

  public function getBalance(): string {
    return sprintf('%f', $this->balance);
  }
}
