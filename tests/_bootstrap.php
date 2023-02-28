<?php
define('YII_ENV', 'test');
defined('YII_DEBUG') or define('YII_DEBUG', true);

(Dotenv\Dotenv::createImmutable(__DIR__ . '/../'))->load();

require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../vendor/autoload.php';