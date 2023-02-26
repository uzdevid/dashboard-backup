<?php

namespace app\modules\system\modules\api;

use Yii;
use yii\web\Response;

/**
 * api module definition class
 */
class Module extends \yii\base\Module {
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\system\modules\api\controllers';

    /**
     * {@inheritdoc}
     */
    public function init() {
        parent::init();

        Yii::$app->response->format = Response::FORMAT_JSON;
    }
}
