<?php

use yii\web\View;

/**
 * @var View $this
 * @var string $content
 */
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?php echo Yii::$app->language; ?>">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title><?php echo $this->title; ?></title>
        <meta name="robot" content="none">

        <!-- Favicons -->
        <link href="<?php echo Yii::$app->request->baseUrl; ?>/img/favicon.png" rel="icon">
        <link href="<?php echo Yii::$app->request->baseUrl; ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo Yii::$app->request->baseUrl; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::$app->request->baseUrl; ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?php echo Yii::$app->request->baseUrl; ?>/css/dashboard.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl; ?>/css/main.css">
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/js/jquery.js"></script>
        <?php $this->head(); ?>
    </head>

    <body>
    <?php $this->beginBody(); ?>

    <main>
        <?php echo $content; ?>
    </main>
    <!-- Vendor JS Files -->
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/vendor/tinymce/tinymce.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/js/dashboard.js"></script>
    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>