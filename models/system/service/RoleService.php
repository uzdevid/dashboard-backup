<?php

namespace app\models\system\service;

use app\models\system\Role;
use yii\helpers\ArrayHelper;

class RoleService {
    public static function list(): array {
        return ArrayHelper::map(Role::find()->all(), 'id', 'translatedName');
    }
}