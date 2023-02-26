<?php

/** @var yii\web\View $this */

/** @var app\models\system\NotificationTypeRole $model */

use app\models\system\service\MenuService;

$this->title = Yii::t('system.crud', 'Create Notification Type Role');
$this->params['breadcrumbs'][] = MenuService::breadcrumb('/system/default/index');
$this->params['breadcrumbs'][] = MenuService::breadcrumb('/system/notification-type/index');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="section">
    <div class="row">
        <div class="col-6">
            <?php echo $this->render('_form', compact('model')); ?>
        </div>
    </div>
</section>
