<?php

namespace alpiiscky\feedback\models;

use Yii;
use himiklab\sortablegrid\SortableGridBehavior;

/**
 * This is the model class for table "feedback_rules".
 *
 * @property int $id
 * @property string $title Описание
 * @property string $inputType Тип поля ввода
 * @property string $inputRules Правила валидации
 * @property int $sequence Порядок
 * @property int $status Статус
 */
class FeedbackRules extends \yii\db\ActiveRecord
{

    CONST STATUS_DISABLED = 0;
    CONST STATUS_ENABLED = 1;

    public function behaviors()
    {
        return [
            'sort' => [
                'class' => SortableGridBehavior::className(),
                'sortableAttribute' => 'sequence'
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback_rules';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'inputType'], 'required'],
            [['inputRules'], 'string'],
            [['sequence', 'status'], 'integer'],
            [['title', 'inputType'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Описание',
            'inputType' => 'Тип поля ввода',
            'inputRules' => 'Правила валидации',
            'sequence' => 'Порядок',
            'status' => 'Статус',
        ];
    }
}
