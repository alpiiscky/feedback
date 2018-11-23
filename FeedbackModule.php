<?php

namespace alpiiscky\feedback;

use Yii;

/**
 * feedback module definition class
 */
class FeedbackModule extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'alpiiscky\feedback\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        Yii::setAlias('@alpiiscky', '@vendor/alpiiscky/feedback');

        Yii::$app->i18n->translations['feedback'] = [
            'class'          => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath'       => '@alpiiscky/yii2-feedback/messages',
            'fileMap'        => [
                'feedback' => 'feedback.php',
            ]
        ];
    }


    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t($category, $message, $params, $language);
    }
}
