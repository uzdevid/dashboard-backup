<?php

namespace app\components\Toaster;

use yii\base\Widget;

class Toaster extends Widget {
    const DEFAULT_SUCCESS_SCRIPT = 'toastr.success(data.body.message, data.body.title)';
    const DEFAULT_ERROR_SCRIPT = 'toastr.error(data.body.message, data.body.title)';
    const DEFAULT_OPTIONS = [
        "closeButton" => true,
        "newestOnTop" => true,
        "progressBar" => true,
        "showDuration" => "300",
        "hideDuration" => "1000",
        "timeOut" => "5000",
        "extendedTimeOut" => "1000",
        "showEasing" => "swing",
        "hideEasing" => "linear",
        "showMethod" => "fadeIn",
        "hideMethod" => "fadeOut"
    ];

    public static function DefaultSuccess() {
        return [
            'script' => self::DEFAULT_SUCCESS_SCRIPT,
            'options' => self::DEFAULT_OPTIONS
        ];
    }

    public static function DefaultError() {
        return [
            'script' => self::DEFAULT_ERROR_SCRIPT,
            'options' => self::DEFAULT_OPTIONS
        ];
    }
}