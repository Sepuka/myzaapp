<?php

namespace frontend\widget;

use rmrevin\yii\fontawesome\FAB;
use yii\bootstrap5\Nav;
use yii\bootstrap5\Widget;

class Social extends Widget {
  public array $social = [];

  public function run() {
    $items = [
      [
        'label' => FAB::icon('instagram'),
        'url'   => $this->social['instagram'],
      ],
      [
        'label' => FAB::icon('vk',),
        'url'   => $this->social['vk'],
      ],
      [
        'label' => Fab::icon('youtube'),
        'url'   => $this->social['youtube'],
      ],
    ];

    return Nav::widget([
      'items'        => $items,
      'encodeLabels' => false,
    ]);
  }
}
