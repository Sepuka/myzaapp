<?php

namespace frontend\widget;

use rmrevin\yii\fontawesome\FAS;
use rmrevin\yii\fontawesome\FontAwesome;
use yii\base\Widget;

class NarrowNavButton extends Widget {
  public string $scrollTarget = '';

  public function run(): string {
    $csv  = FAS::icon('angle-down')
      ->size(FontAwesome::SIZE_4X);

    return <<<HTML
<div class="arrow_block mt-auto">
    <div class="arrow_sub_block animation">
      <a href="#$this->scrollTarget">$csv</a>
    </div>
</div>
HTML;
  }
}
