<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle {
  public $basePath = '@webroot';
  public $baseUrl = '@web';
  public $css = [
    'css/site.css',
    'css/cover.css',
    'https://use.fontawesome.com/releases/v5.15.4/css/all.css',
  ];
  public $cssOptions = ['crossorigin' => 'anonymous'];
  public $js = [
    'https://kit.fontawesome.com/72fe3abd58.js',
  ];
  public $jsOptions = ['crossorigin' => 'anonymous'];

  public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap5\BootstrapAsset',
  ];
}
