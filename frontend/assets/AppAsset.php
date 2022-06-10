<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\bootstrap5\BootstrapAsset;
use yii\web\YiiAsset;

class AppAsset extends AssetBundle {
  public $basePath = '@webroot';
  public $baseUrl = '@web';
  public $css = [
    'css/site.css',
    'css/cover.css',
    'css/fontawesome.min.css',
  ];
  public $js = [
    'https://kit.fontawesome.com/72fe3abd58.js',
  ];
  public $jsOptions = ['crossorigin' => 'anonymous'];

  public $depends = [
    YiiAsset::class,
    BootstrapAsset::class,
  ];
}
