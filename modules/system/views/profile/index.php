<?php

use app\components\Url;
use app\models\system\User;
use dashboard\modalpage\ModalPage;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\web\View;

/**
 * @var View $this
 * @var User $user
 */
?>

<section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo Yii::t('system.content', 'Your general data'); ?></h5>
                    <?php $form = ActiveForm::begin([
                        'id' => 'profile-form',
                        'fieldConfig' => [
                            'template' => '<div class="form-floating mb-3">{input}{label}{error}</div>',
                            'labelOptions' => ['class' => 'form-label'],
                            'inputOptions' => ['class' => 'form-control'],
                            'errorOptions' => ['class' => 'invalid-feedback'],
                        ],
                    ]); ?>

                    <?php echo $form->field($user, 'surname')->textInput(['placeholder' => $user->getAttributeLabel('surname')]); ?>
                    <?php echo $form->field($user, 'name')->textInput(['placeholder' => $user->getAttributeLabel('name')]); ?>
                    <?php echo $form->field($user, 'email')->textInput(['type' => 'email', 'placeholder' => $user->getAttributeLabel('email')]); ?>
                    <?php echo $form->field($user, 'image', ['template' => '{label}{input}{error}'])->fileInput(); ?>

                    <div class="text-end">
                        <?php echo Html::submitButton(Yii::t('system.crud', 'Save'), ['class' => 'btn btn-success']); ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo Yii::t('system.content', 'Change password'); ?></h5>

                    <?php $form = ActiveForm::begin([
                        'id' => 'reset-password-form',
                        'fieldConfig' => [
                            'template' => '<div class="form-floating mb-3">{input}{label}{error}</div>',
                            'labelOptions' => ['class' => ''],
                            'inputOptions' => ['class' => 'form-control'],
                            'errorOptions' => ['class' => 'invalid-feedback'],
                        ],
                    ]); ?>
                    <?php $user->scenario = 'resetPassword'; ?>
                    <?php echo $form->field($user, 'new_password')->textInput(['type' => 'password', 'placeholder' => $user->getAttributeLabel('new_password')]); ?>

                    <div class="text-end">
                        <?php echo Html::submitButton(Yii::t('system.crud', 'Save'), ['class' => 'btn btn-success']); ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="card-title"><?php echo Yii::t('system.content', 'Your contacts'); ?></h5>
                        </div>
                        <div class="col text-end">
                            <?php echo ModalPage::link(Yii::t('system.content', 'Create Contact'), Url::to(['/system/contact/create']), ['class' => 'btn btn-primary py-1 px-3']); ?>
                        </div>
                    </div>

                    <ul class="ps-0">
                        <?php foreach ($user->contacts as $i => $contact): ?>
                            <li class="row align-items-center p-2">
                                <div class="col-1">
                                    <i class="bi bi-journal fs-4 text-primary"></i>
                                </div>
                                <div class="col-10">
                                    <p class="mb-0"><?php echo $contact->contact; ?></p>
                                    <p class="mb-0 small text-muted"><?php echo $contact->translatedType; ?></p>
                                </div>
                                <div class="col-1">
                                    <?php echo Html::a('<i class="bi bi-trash fs-6"></i>', Url::to(['/system/contact/delete', 'id' => $contact->id]), [
                                        'class' => 'border-0 px-3 py-2 rounded btn btn-danger',
                                        'data' => [
                                            'confirm' => Yii::t('system.message', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]); ?>
                                </div>
                            </li>
                            <?php if (count($user->contacts) - 1 > $i): ?>
                                <hr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo Yii::t('system.content', 'Active Sessions'); ?></h5>
                    <ul class="ps-0">
                        <?php foreach ($user->devices as $i => $device): ?>
                            <li class="row align-items-center p-2">
                                <div class="col-1">
                                    <i class="bi bi-check-circle fs-4 text-success"></i>
                                </div>
                                <div class="col-10">
                                    <p class="mb-0"><?php echo $device->deviceName; ?></p>
                                    <p class="mb-0 small text-muted"><?php echo $device->formattedAuthTime; ?></p>
                                </div>
                                <div class="col-1">
                                    <?php echo Html::a('<i class="bi bi-trash fs-6"></i>', Url::to(['/system/device/delete', 'id' => $device->id]), [
                                        'class' => 'border-0 px-3 py-2 rounded btn btn-danger',
                                        'data' => [
                                            'confirm' => Yii::t('system.message', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]); ?>
                                </div>
                            </li>
                            <?php if (count($user->devices) - 1 > $i): ?>
                                <hr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>