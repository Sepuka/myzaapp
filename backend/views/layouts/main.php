<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use yii\bootstrap5\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
      <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Duntek администратор</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
               aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign out</a>
            </div>
        </div>
    </header
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-home align-text-bottom"
                                     aria-hidden="true">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Дашборд
                            </a>
                        </li>
                        <!--                        <li class="nav-item">-->
                        <!--                            <a class="nav-link" href="https://metrika.yandex.ru/goals?id=88407990">-->
                        <!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"-->
                        <!--                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
                        <!--                                     stroke-linejoin="round" class="feather feather-file align-text-bottom"-->
                        <!--                                     aria-hidden="true">-->
                        <!--                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>-->
                        <!--                                    <polyline points="13 2 13 9 20 9"></polyline>-->
                        <!--                                </svg>-->
                        <!--                                Аналитика Яндекс-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <!--                        <li class="nav-item">-->
                        <!--                            <a class="nav-link" href="#">-->
                        <!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"-->
                        <!--                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
                        <!--                                     stroke-linejoin="round" class="feather feather-shopping-cart align-text-bottom"-->
                        <!--                                     aria-hidden="true">-->
                        <!--                                    <circle cx="9" cy="21" r="1"></circle>-->
                        <!--                                    <circle cx="20" cy="21" r="1"></circle>-->
                        <!--                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>-->
                        <!--                                </svg>-->
                        <!--                                Products-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <!--                        <li class="nav-item">-->
                        <!--                            <a class="nav-link" href="#">-->
                        <!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"-->
                        <!--                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
                        <!--                                     stroke-linejoin="round" class="feather feather-users align-text-bottom"-->
                        <!--                                     aria-hidden="true">-->
                        <!--                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>-->
                        <!--                                    <circle cx="9" cy="7" r="4"></circle>-->
                        <!--                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>-->
                        <!--                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>-->
                        <!--                                </svg>-->
                        <!--                                Customers-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="https://metrika.yandex.ru/goals?id=88407990">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-bar-chart-2 align-text-bottom"
                                     aria-hidden="true">
                                    <line x1="18" y1="20" x2="18" y2="10"></line>
                                    <line x1="12" y1="20" x2="12" y2="4"></line>
                                    <line x1="6" y1="20" x2="6" y2="14"></line>
                                </svg>
                                Аналитика Яндекс
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://analytics.google.com/analytics/web/#/p319157911/reports/intelligenthome">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-bar-chart-2 align-text-bottom"
                                     aria-hidden="true">
                                    <line x1="18" y1="20" x2="18" y2="10"></line>
                                    <line x1="12" y1="20" x2="12" y2="4"></line>
                                    <line x1="6" y1="20" x2="6" y2="14"></line>
                                </svg>
                                Аналитика Google
                            </a>
                        </li>
                        <!--                        <li class="nav-item">-->
                        <!--                            <a class="nav-link" href="#">-->
                        <!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"-->
                        <!--                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
                        <!--                                     stroke-linejoin="round" class="feather feather-layers align-text-bottom"-->
                        <!--                                     aria-hidden="true">-->
                        <!--                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>-->
                        <!--                                    <polyline points="2 17 12 22 22 17"></polyline>-->
                        <!--                                    <polyline points="2 12 12 17 22 12"></polyline>-->
                        <!--                                </svg>-->
                        <!--                                Integrations-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                    </ul>
            </nav>
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              <?= $content ?>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
