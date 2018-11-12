<?php

namespace alpiiscky\feedback\models;

use \yii\base\DynamicModel;

class FeedbackModel
{
    protected static $fields = [];

    public static function create(array $rules)
    {
        foreach ($rules as $ruleLine) {
            self::$fields[] = $ruleLine['name'];
        }
        $model = new DynamicModel(self::$fields);

        foreach ($rules as $ruleLine) {
            foreach ($ruleLine['rules'] as $rule) {
                $parameter = [];
                if (isset($rule['params'])) {
                    foreach ($rule['params'] as $paramKey => $param) {
                        $parameter[$paramKey] = $param;
                    }
                }
                $model->addRule($ruleLine['name'], is_array($rule['rule']) ? self::getRule($rule['rule']) : $rule['rule'], $parameter);
            }
        }

        return $model;
    }

    protected static function getRule($rule)
    {
        if (isset($rule['class'])) {
            return $rule['class'];
        }
    }

}
