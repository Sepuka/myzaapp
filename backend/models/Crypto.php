<?php

namespace backend\models;

class Crypto extends \common\models\Crypto {
  public function getTotalAmount(): string {
    return sprintf('%f', (float)self::find()->sum(self::FIELD_BALANCE) / self::MULTIPLIER);
  }
}
