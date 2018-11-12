<?php

namespace alpiiscky\feedback\controllers;

use yii\web\Controller;

/**
 * Default controller for the `feedback` module
 */
class DefaultController extends Controller
{

    public function behaviors()
    {
        return [
            'ghost-access'=> [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
