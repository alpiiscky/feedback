<?php

use yii\db\Migration;

/**
 * Handles the creation of table `feedback_rules`.
 */
class m181107_054824_create_feedback_rules_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('feedback_rules', [
            'id' => $this->primaryKey(),
            'title' => $this->string(30)->notNull()->comment('Описание'),
            'inputType' => $this->string(30)->notNull()->comment('Тип поля ввода'),
            'inputRules' => $this->text()->comment('Правила валидации'),
            'sequence' => $this->integer()->defaultValue(0)->comment('Порядок'),
            'status' => $this->integer()->defaultValue(1)->comment('Статус'),
        ]);

        $this->batchInsert('feedback_rules', ['title', 'inputType', 'inputRules'], [
            ['Строковое поле', 'textInput', '[{"rule":"string","params":{"max":50}},{"rule":"required", "params":{"message":"Please choose a field.""}}]'],
            ['Email', 'textInput', '[{"rule":"email"},{"rule":"required"}]'],
            ['Многострочное поле', 'text', '[{"rule":"string"},{"rule":"required"}]'],
            ['Google captcha', 'googleCaptcha', '[{"rule":"\\himiklab\\yii2\\recaptcha\\ReCaptchaValidator","params":{"secret":"your secret key","uncheckedMessage":"Please confirm that you are not a bot"}}]'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('feedback_rules');
    }
}
