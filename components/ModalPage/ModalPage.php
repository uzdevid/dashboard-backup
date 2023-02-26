<?php

namespace app\components\ModalPage;

use yii\base\Widget;
use yii\bootstrap5\Html;
use yii\helpers\Url;

class ModalPage extends Widget {
    public function run() {
        return $this->render('index');
    }

    public static function link($text, $url, $options = []) {
        if (empty($options['class'])) {
            $options['class'] = 'in-modal';
        } else {
            $options['class'] .= ' in-modal';
        }
        return Html::a($text, Url::to($url), $options);
    }

    public static function options($centered = true, $size = '') {
        return [
            'centered' => $centered,
            'size' => $size,
        ];
    }

    public static function title($text, $icon = null) {
        return "{$icon} {$text}";
    }
}