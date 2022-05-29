<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\bootstrap5\BootstrapAsset;
use yii\web\YiiAsset;

class AppAsset extends AssetBundle {
  public $basePath = '@webroot';
  public $baseUrl = '@web';
  public $css = [
    'css/site.css',
    'css/admin.css',
  ];
  public $js = [
  ];
  public $depends = [
    YiiAsset::class,
    BootstrapAsset::class,
  ];
}
