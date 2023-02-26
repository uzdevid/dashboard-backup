<?php

namespace app\components\OffCanvas;

use yii\base\Widget;
use yii\bootstrap5\Html;
use yii\helpers\Url;

class OffCanvas extends Widget {
    public function run() {
        return $this->render('index');
    }

    public static function link($text, $url, $options = []) {
        if (empty($options['class'])) {
            $options['class'] = 'in-offcanvas';
        } else {
            $options['class'] .= ' in-offcanvas';
        }
        return Html::a($text, Url::to($url), $options);
    }

    public static function options($side) {
        return [
            'side' => $side,
        ];
    }

    public static function title($text, $icon = null) {
        return "{$icon} {$text}";
    }
}