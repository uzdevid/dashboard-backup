<?php

namespace app\components\Header;

use app\models\system\Notification;
use Yii;
use yii\base\Widget;

class Header extends Widget {

    public function run() {
        $user = Yii::$app->user->identity;

        $unread_notifications = Notification::find()
            ->where(['user_id' => $user->id])
            ->andWhere(['is_read' => 0])
            ->all();

        return $this->render('index', compact('user', 'unread_notifications'));
    }
}