<?php

use app\assets\AppAsset;
use dashboard\header\Header;
use dashboard\modalpage\ModalPage;
use dashboard\modalpage\ModalPageAsset;
use dashboard\offcanvaspage\OffCanvas;
use dashboard\sidebar\SideBar;
use dashboard\toaster\ToasterAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\web\View;

/** @var string $content */
/** @var View $this */

AppAsset::register($this);
ToasterAsset::register($this);
ModalPageAsset::register($this);
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?php echo Yii::$app->language; ?>">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title><?php echo $this->title; ?> :: <?php echo Yii::$app->name; ?></title>
        <meta name="robot" content="none">

        <!-- Favicons -->
        <link href="<?php echo Yii::$app->request->baseUrl; ?>/img/favicon.png" rel="icon">
        <link href="<?php echo Yii::$app->request->baseUrl; ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

        <script src="<?php echo Yii::$app->request->baseUrl; ?>/js/jquery.js"></script>

        <script>
            const BASEURL = '<?php echo Yii::$app->params['url']; ?>';
            const LANGUAGE = '<?php echo Yii::$app->language; ?>';
        </script>


        <?php $this->head(); ?>
    </head>

    <body>
    <?php $this->beginBody(); ?>
    <?php echo Header::widget(); ?>
    <?php echo SideBar::widget(); ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?php echo $this->title; ?></h1>
            <?php echo Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [], 'options' => []]); ?>
        </div>

        <?php echo $content; ?>
    </main>

    <footer id="footer" class="footer">
        <div class="copyright">
            <?php echo Yii::t('system.content', '&copy; Copyright <strong><span>UzDevid</span></strong>. All Rights Reserved'); ?>
        </div>
        <div class="credits">
            <?php echo Yii::t('system.content', 'Powered by <a href="https://devid.uz" target="_blank">UzDevid</a>'); ?>
        </div>
    </footer>

    <?php echo OffCanvas::widget(); ?>

    <?php echo ModalPage::widget(); ?>

    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>