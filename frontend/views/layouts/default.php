<?php

use frontend\assets\AppAsset;
use rmrevin\yii\fontawesome\CdnFreeAssetBundle;
use yii\web\View;

/**
 * @var View $this
 * @var string $content
 */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="ru" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
          (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {(m[i].a = m[i].a || []).push(arguments)};
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
          })
          (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

          ym(88407990, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
          });
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/88407990" style="position:absolute; left:-9999px;" alt=""/></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-WHGY0N6DCP"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-WHGY0N6DCP');
        </script>

        <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("VK-RTRG-1366857-aWgPP"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1366857-aWgPP" style="position:fixed; left:-999px;" alt=""/></noscript>

        <?php $this->head(); ?>

        <title>криптокотельная duntek</title>
    </head>
    <body class="d-flex h-100 text-center text-white bg-dark">
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
