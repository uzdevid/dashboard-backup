<?php

use yii\web\View;

/**
 * @var View $this
 * @var Exception $exception
 */

?>

<div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="pt-4 pb-2 px-5">
                    <h5 class="card-title text-center pb-0 fs-4"><?php echo Yii::t('system.message', 'Error'); ?></h5>
                    <p class="text-center small"><?php echo $exception->getMessage(); ?></p>
                </div>
            </div>
        </div>
    </section>
</div>
