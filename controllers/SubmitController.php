<?php

namespace alpiiscky\feedback\controllers;

use alpiiscky\feedback\FeedbackModule;
use alpiiscky\feedback\helpers\FeedbackHelper;
use alpiiscky\feedback\models\FeedbackModel;
use yii\web\Controller;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * Submit controller for the `feedback` module
 */
class SubmitController extends Controller
{

    public function actionIndex()
    {
        $request = Yii::$app->request;

        $rules = FeedbackHelper::generateRulesArray();
        $feedbackModel = FeedbackModel::create($rules);

        if ($request->isPost) {
            if (($feedbackModel->load($request->post())) && ($feedbackModel->validate())) {

                $mailer = \Yii::$app->mailer;

                $mailer->compose('@alpiiscky/feedback/views/mail/message', [
                    'rules' => $rules,
                    'feedbackModel' => $feedbackModel
                ])
                    ->setFrom([\Yii::$app->params['noticeEmail'] => \Yii::$app->params['noticeTheme']])
                    ->setTo(\Yii::$app->params['adminEmail'])
                    ->setSubject(\Yii::$app->params['noticeTheme'])
                    ->send();

                Yii::$app->session->setFlash('success', FeedbackModule::t('feedback', 'Email sent'));
                return $this->redirect('/');
            }
        }

        throw new NotFoundHttpException();

    }

}
