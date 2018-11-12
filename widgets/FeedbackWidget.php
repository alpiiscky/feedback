<?php

namespace alpiiscky\feedback\widgets;


use alpiiscky\feedback\helpers\FeedbackHelper;
use alpiiscky\feedback\models\FeedbackModel;
use yii\base\Widget;

class FeedbackWidget extends Widget
{
    public $viewFile = 'index';

    public function run()
    {
        $rules = FeedbackHelper::generateRulesArray();
        $feedbackModel = FeedbackModel::create($rules);

        return $this->render($this->viewFile, [
            'feedbackModel' => $feedbackModel,
            'rules' => $rules
        ]);
    }
}