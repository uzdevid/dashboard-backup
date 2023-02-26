<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;

class SiteController extends Controller {
    public function behaviors(): array {
        $behaviors = parent::behaviors();
        $behaviors['access'] = [
            'class' => AccessControl::class,
            'except' => ['error'],
            'rules' => [
                [
                    'allow' => true,
                    'actions' => ['index', 'error'],
                    'roles' => ['@'],
                ],
            ],
        ];

        return $behaviors;
    }

    public function actionIndex(): string {
        $this->view->title = Yii::t('system.content', 'Panel');
        return $this->render('index');
    }

    public function actionError(): string {
        $this->layout = 'auth';
        $exception = Yii::$app->errorHandler->exception;

        $this->view->title = Yii::t('system.message', 'Error') . ' :: ' . $exception->getMessage();

        if ($exception instanceof NotFoundHttpException) {
            return $this->render('error', ['exception' => $exception]);
        } elseif ($exception instanceof ForbiddenHttpException) {
            return $this->render('error', ['exception' => $exception]);
        }

        return $this->render('error', ['exception' => $exception]);
    }
}
