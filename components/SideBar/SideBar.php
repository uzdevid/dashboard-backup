<?php

namespace app\components\SideBar;

use app\models\system\Menu;
use Yii;
use yii\base\Widget;

class SideBar extends Widget {
    public function init() {
        $this->view = new View();
        parent::init();
    }

    public function run() {
        parent::run();

        $this->view->params['menu'] = Menu::findOne(@$_GET['menu']);
        $menu = Menu::find()
            ->where(['parent_id' => null])
            ->andWhere(['role_id' => Yii::$app->user->identity->role->id])
            ->orWhere(['parent_id' => null, 'role_id' => null])
            ->orderBy(['order' => SORT_ASC])
            ->all();
        return $this->render('index', compact(['menu']));
    }
}