<?php

use app\models\system\service\MenuService;

/** @var yii\web\View $this */
/** @var app\models\system\YiiSourceMessage $model */

$this->title = Yii::t('system.content', 'Update Yii Source Message');
$this->params['breadcrumbs'][] = MenuService::breadcrumb('/system/yii-source-message/index');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="yii-source-message-update">
    <?php echo $this->render('_form', compact('model')); ?>
</div>
