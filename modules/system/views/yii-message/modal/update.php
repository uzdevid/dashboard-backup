<?php

/** @var yii\web\View $this */
/** @var Menu $model */

use app\models\system\Menu;

?>

<div class="card">
    <div class="card-body py-3">
        <?php echo $this->render('../_form', compact('model')); ?>
    </div>
</div>
