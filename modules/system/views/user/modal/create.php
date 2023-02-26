<?php

use app\models\system\User;

/** @var yii\web\View $this */
/** @var User $model */
?>

<div class="card">
    <div class="card-body">
        <?php echo $this->render('../_form', compact('model')); ?>
    </div>
</div>