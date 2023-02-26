<?php

use app\models\system\Action;
use app\models\system\service\ActionService;
use app\models\system\User;
use yii\bootstrap5\Html;

/**
 * @var yii\web\View $this
 * @var Action[] $actions
 * @var User $model
 */
?>

<div class="list-group">
    <div class="row">
        <?php foreach ($actions

        as $index => $action): ?>
        <div class="col-md-4">
            <label for="action-<?php echo $action->id; ?>" class="list-group-item form-check form-switch">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="form-check form-switch">
                        <?php echo Html::checkbox('checkbox', ActionService::canUserDoAction($model->id, $action->id), [
                            'id' => "action-{$action->id}",
                            'class' => 'form-check-input action-switch',
                            'data-action-id' => $action->id,
                            'onclick' => 'actionSwitch(this, event)'
                        ]); ?>
                    </div>
                    <div>
                        <p class="m-0"><?php echo $action->title; ?></p>
                        <p class="m-0 text-muted"><?php echo $action->path; ?></p>
                    </div>
                </div>
            </label>
        </div>
        <?php if (($index + 1) % 3 == 0): ?>
    </div>
    <div class="row">
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>

<script>
    function actionSwitch(input, event) {
        const actionId = event.target.dataset.actionId;

        $.ajax({
            url: BASEURL + '/' + LANGUAGE + '/system/api/user/permission',
            method: 'POST',
            data: JSON.stringify({
                action_id: actionId,
                user_id: '<?php echo $model->id; ?>'
            }),
            success: function (data) {
                if (data.success) {
                    toastr.success(data.body.message, data.body.title);
                } else {
                    toastr.error(data.body.message, data.body.title);
                }
            },
            error: function (error) {
                toastr.error(error.responseJSON.body.message, error.responseJSON.body.name);
            }
        });
    }
</script>
