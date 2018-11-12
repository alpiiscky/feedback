<?php

namespace alpiiscky\feedback\helpers;

use alpiiscky\feedback\models\FeedbackRules;

class FeedbackHelper
{

    public static function generateRulesArray()
    {
        $result = [];
        $rules = FeedbackRules::find()->where(['status' => FeedbackRules::STATUS_ENABLED])->all();

        foreach ($rules as $ruleKey => $rule) {
            $result[$ruleKey]['name'] = 'field_'.$ruleKey;
            $result[$ruleKey]['label'] = $rule->title;
            $result[$ruleKey]['type'] = $rule->inputType;
            $result[$ruleKey]['rules'] = json_decode($rule->inputRules, true);
        }

        return $result;
    }

}
