<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/vendor/bootstrap/css/bootstrap.min.css',
        '/vendor/bootstrap-icons/bootstrap-icons.css',
        '/vendor/boxicons/css/boxicons.min.css',
        '/vendor/quill/quill.snow.css',
        '/vendor/quill/quill.bubble.css',
        '/vendor/remixicon/remixicon.css',
        '/vendor/simple-datatables/style.css',
        '/vendor/jquery-ui/css/style.css',
        '/vendor/sortable-list/css/treeSortable.css',
        '/vendor/toaster/css/toastr.min.css',
        '/vendor/choices/css/choices.min.css',
        '/css/dashboard.css',
        //
        '/css/main.css',
    ];
    public $js = [
        '/vendor/bootstrap/js/bootstrap.bundle.min.js',
        '/vendor/apexcharts/apexcharts.min.js',
        '/vendor/chart.js/chart.min.js',
        '/vendor/echarts/echarts.min.js',
        '/vendor/quill/quill.min.js',
        '/vendor/simple-datatables/simple-datatables.js',
        '/vendor/tinymce/tinymce.min.js',
        '/vendor/jquery-ui/js/script.js',
        '/vendor/toaster/js/toastr.min.js',
        '/vendor/modal-page/js/script.js',
        '/vendor/offcanvas-page/js/script.js',
        '/js/notifications-badge.js',
        [
            '/vendor/choices/js/choices.min.js',
            'position' => View::POS_HEAD
        ],
        '/js/dashboard.js',
        //
        '/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
